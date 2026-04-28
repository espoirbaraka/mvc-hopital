<?php
class MedicamentController extends Controller
{
    public function dashboard()
    {
        $medoc = new Medicament();
        $patient = new Patient();

        $this->view("dashboard", [
            'title' => 'Tableau de bord',
            'activePage' => 'dashboard',
            'stats' => [
                'medicaments' => $medoc->countMedicaments(),
                'patients' => $patient->countPatients(),
                'prixMoyen' => $medoc->getAveragePrice(),
            ],
            'recentMedicaments' => $medoc->getRecentMedicaments(),
            'recentPatients' => $patient->getRecentPatients(),
        ]);
    }

    public function displayMedicament()
    {
        $search = trim($_GET['q'] ?? '');
        $medoc = new Medicament();

        $this->view("medicament", [
            'title' => 'Medicaments',
            'activePage' => 'medicaments',
            'search' => $search,
            'medicaments' => $medoc->getAllMedicaments($search),
            'count' => $medoc->countMedicaments(),
            'averagePrice' => $medoc->getAveragePrice(),
        ]);
    }

    public function displayAddMedicament()
    {
        $this->view("addMedicament", [
            'title' => 'Ajouter un medicament',
            'activePage' => 'medicaments',
            'old' => [
                'designation' => '',
                'description' => '',
                'prix' => '',
            ],
        ]);
    }

    public function insertMedicament()
    {
        $designation = trim($_POST['designation'] ?? '');
        $description = trim($_POST['description'] ?? '');
        $prix = trim($_POST['prix'] ?? '');

        if ($designation === '' || $description === '' || $prix === '') {
            $this->flash('error', 'Tous les champs du medicament sont obligatoires.');
            $this->view("addMedicament", [
                'title' => 'Ajouter un medicament',
                'activePage' => 'medicaments',
                'old' => [
                    'designation' => $designation,
                    'description' => $description,
                    'prix' => $prix,
                ],
            ]);
            return;
        }

        if (!is_numeric($prix) || (float) $prix < 0) {
            $this->flash('error', 'Le prix doit etre un nombre positif.');
            $this->view("addMedicament", [
                'title' => 'Ajouter un medicament',
                'activePage' => 'medicaments',
                'old' => [
                    'designation' => $designation,
                    'description' => $description,
                    'prix' => $prix,
                ],
            ]);
            return;
        }

        $medicament = new Medicament();
        $medicament->createMedicament($designation, $description, (float) $prix);

        $this->flash('success', 'Le medicament a ete ajoute avec succes.');
        $this->redirect("?page=medicaments");
    }

    public function deleteMedicament()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect("?page=medicaments");
        }

        $id = (int) ($_GET['id'] ?? 0);

        if ($id > 0) {
            $medicament = new Medicament();
            $medicament->deleteMedicament($id);
            $this->flash('success', 'Le medicament a ete supprime.');
        }

        $this->redirect("?page=medicaments");
    }
}
