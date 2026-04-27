<?php
class MedicamentController extends Controller{
    public function displayMedicament(){
        $medoc = new Medicament();
        $medocs = $medoc->getAllMedicaments();
        $this->view("medicament", ['medocs' => $medocs]);
    }

    public function displayAddMedicament(){
        $this->view("addMedicament");
    }

    public function insertMedicament(){
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location: ?page=insererMedoc");
            return;
        }
        
        $designation = isset($_POST['designation']) ? trim($_POST['designation']) : '';
        $description = isset($_POST['description']) ? trim($_POST['description']) : '';
        $prix = isset($_POST['prix']) ? trim($_POST['prix']) : '';

        if (empty($designation) || empty($description) || empty($prix)) {
            $_SESSION['error'] = 'Tous les champs sont obligatoires';
            header("Location: ?page=insererMedoc");
            return;
        }

        if (!is_numeric($prix) || $prix <= 0) {
            $_SESSION['error'] = 'Le prix doit être un nombre positif';
            header("Location: ?page=insererMedoc");
            return;
        }

        try {
            $medicament = new Medicament();
            $medicament->createMedicament($designation, $description, $prix);
            $_SESSION['success'] = 'Médicament ajouté avec succès';
            header("Location: ?page=liste");
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header("Location: ?page=insererMedoc");
        }
    }
}