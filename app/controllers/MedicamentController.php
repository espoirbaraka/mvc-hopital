<?php
class MedicamentController extends Controller{
    public function displayMedicament(){
        $medoc = new Medicament();
        $data['medocs'] = $medoc->getAllMedicaments();

        $this->view("medicament", $data['medocs']);
    }
}