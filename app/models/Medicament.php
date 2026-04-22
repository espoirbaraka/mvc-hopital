<?php
class Medicament extends Model {
    public $code;
    public $designation;
    public $description;
    public $prix;

    public function getAllMedicaments(){
        $requette = $this->db->prepare("SELECT * FROM tbl_medicament");
        $requette->execute([]);
        return $resultat = $requette->fetchAll();
    }

    public function createMedicament(){

    }

    public function updateMedicament(){
        
    }

    public function deleteMedicament(){
        
    }
}