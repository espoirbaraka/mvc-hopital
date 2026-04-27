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

    public function createMedicament($design, $desc, $prix){
        $this->designation = $design;
        $this->description = $desc;
        $this->prix = $prix;
        $requette = $this->db->prepare("INSERT INTO tbl_medicament
        (designation, description, prix) VALUES(?, ?, ?)");
        $requette->execute([$this->designation, $this->description, $this->prix]);
    }

    public function updateMedicament($code, $design, $desc, $prix){
        $this->code = $code;
        $this->designation = $design;
        $this->description = $desc;
        $this->prix = $prix;
        $requette = $this->db->prepare("UPDATE tbl_medicament SET designation = ?, description = ?, prix = ? WHERE code_medicament = ?");
        return $requette->execute([$this->designation, $this->description, $this->prix, $this->code]);
    }

    public function deleteMedicament($code){
        $this->code = $code;
        $requette = $this->db->prepare("DELETE FROM tbl_medicament WHERE code_medicament = ?");
        return $requette->execute([$this->code]);
    }
}