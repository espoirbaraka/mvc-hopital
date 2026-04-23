<?php
class MedicamentController extends Controller{
    public function displayMedicament(){
        $medoc = new Medicament();
        $data['medocs'] = $medoc->getAllMedicaments();

        $this->view("medicament", $data['medocs']);
    }

    public function displayAddMedicament(){
        $this->view("addMedicament");
    }

    public function insertMedicament(){
        $design = $_POST['designation'];
        $desc = $_POST['description'];
        $prix = $_POST['prix'];
        $medicament = new Medicament();
        $medicament->createMedicament($design, $desc, $prix);

        header('Location: ?page=liste');
    }
}