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

    public function createMedicament($design ,$desc, $prix){
        $this->designation=$design;
        $this->description=$desc;
        $this->prix=$prix;
        $requette = $this -> db -> prepare("INSERT INTO tbl_medicament 
        (designation, description, prix) VALUES(?, ?, ?)");
        $requette->execute([$this->designation, $this->description, $this->prix]);
    }

    public function updateMedicament(){
        
    }

    public function deleteMedicament(){
        
    }
}