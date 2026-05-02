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
        if(isset($_POST['designation']) && isset($_POST['description']) && isset($_POST['prix'])){
            $design = $_POST['designation'];
            $desc = $_POST['description'];
            $prix = $_POST['prix'];
            $medicament = new Medicament();
            $medicament->createMedicament($design, $desc, $prix);
        }
        header("Location: ?page=liste");
    }
}