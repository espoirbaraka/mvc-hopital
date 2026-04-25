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

    public function updateMedicament($code_medoc, $design, $desc, $prix){
        $this->code = $code_medoc;
        $this->designation = $design;
        $this->description = $desc;
        $this->prix = $prix;
        $requette = $this->db->prepare("UPDATE tbl_medicament SET designation=?, description=?, 
        prix=? WHERE code_medicament=?");
        $requette->execute([$this->designation, $this->description, $this->prix, $this->code]);
    }

    public function deleteMedicament($code_medoc){
        $this->code = $code_medoc;
        $request = $this->db->prepare("DELETE FROM tbl_medicament WHERE code_medicament=?");
        $request->execute([$this->code]);
    }

    public function searchMedicament($keyword)
    {
        $request = $this->db->prepare("SELECT * FROM tbl_medicament WHERE CONCAT(designation, description) LIKE ?");
        $request->execute(["%$keyword%"]);
        return $result = $request->fetchAll();
    }
}