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

        if($design == null || $desc == null || $prix ==null )
        {
            echo "Veillez remplir tous les champs ! ";
        }
        else
        {
            $medicament = new Medicament();
            $medicament->createMedicament($design, $desc, $prix);

            header("Location: ?page=liste");
        }
    }

    public function searchMedicament()
    {
        $keyword = $_POST["keyword"];
        $medoc = new Medicament();
        $data = $medoc->searchMedicament($keyword);
        $this->view("medicament", $data);
    }
}