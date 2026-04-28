<?php
class PatientController extends Controller
{
    public function displayPatients()
    {
        $search = trim($_GET['q'] ?? '');
        $patient = new Patient();

        $this->view("patients", [
            'title' => 'Patients',
            'activePage' => 'patients',
            'search' => $search,
            'patients' => $patient->getAllPatients($search),
            'count' => $patient->countPatients(),
        ]);
    }

    public function displayAddPatient()
    {
        $this->view("addPatient", [
            'title' => 'Ajouter un patient',
            'activePage' => 'patients',
            'old' => [
                'nom' => '',
                'postnom' => '',
                'prenom' => '',
                'date_naissance' => '',
                'adresse' => '',
                'telephone' => '',
            ],
        ]);
    }

    public function insertPatient()
    {
        $payload = [
            'nom' => trim($_POST['nom'] ?? ''),
            'postnom' => trim($_POST['postnom'] ?? ''),
            'prenom' => trim($_POST['prenom'] ?? ''),
            'date_naissance' => trim($_POST['date_naissance'] ?? ''),
            'adresse' => trim($_POST['adresse'] ?? ''),
            'telephone' => trim($_POST['telephone'] ?? ''),
        ];

        foreach ($payload as $value) {
            if ($value === '') {
                $this->flash('error', 'Tous les champs du patient sont obligatoires.');
                $this->view("addPatient", [
                    'title' => 'Ajouter un patient',
                    'activePage' => 'patients',
                    'old' => $payload,
                ]);
                return;
            }
        }

        $dateTime = date_create($payload['date_naissance']);
        if ($dateTime === false) {
            $this->flash('error', 'La date de naissance est invalide.');
            $this->view("addPatient", [
                'title' => 'Ajouter un patient',
                'activePage' => 'patients',
                'old' => $payload,
            ]);
            return;
        }

        $payload['date_naissance'] = $dateTime->format('Y-m-d H:i:s');

        $patient = new Patient();
        $patient->createPatient($payload);

        $this->flash('success', 'Le patient a ete ajoute avec succes.');
        $this->redirect("?page=patients");
    }

    public function deletePatient()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect("?page=patients");
        }

        $id = (int) ($_GET['id'] ?? 0);

        if ($id > 0) {
            $patient = new Patient();
            $patient->deletePatient($id);
            $this->flash('success', 'Le patient a ete supprime.');
        }

        $this->redirect("?page=patients");
    }
}
