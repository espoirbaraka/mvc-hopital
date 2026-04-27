<?php
class Medicament extends Model {
    public $code;
    public $designation;
    public $description;
    public $prix;

    public function getAllMedicaments(){
        try {
            $query = $this->db->prepare("SELECT * FROM tbl_medicament ORDER BY code DESC");
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            die('Erreur lors de la récupération des médicaments : ' . $e->getMessage());
        }
    }

    public function getMedicamentById($code){
        try {
            $query = $this->db->prepare("SELECT * FROM tbl_medicament WHERE code = ?");
            $query->execute([$code]);
            return $query->fetch();
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function createMedicament($design, $desc, $prix){
        if (empty($design) || empty($desc) || empty($prix)) {
            throw new Exception('Tous les champs sont obligatoires');
        }
        
        try {
            $query = $this->db->prepare("INSERT INTO tbl_medicament (designation, description, prix) VALUES(?, ?, ?)");
            return $query->execute([$design, $desc, floatval($prix)]);
        } catch (PDOException $e) {
            die('Erreur lors de l\'insertion : ' . $e->getMessage());
        }
    }

    public function updateMedicament($code, $design, $desc, $prix){
        if (empty($code) || empty($design) || empty($desc) || empty($prix)) {
            throw new Exception('Tous les champs sont obligatoires');
        }
        
        try {
            $query = $this->db->prepare("UPDATE tbl_medicament SET designation = ?, description = ?, prix = ? WHERE code = ?");
            return $query->execute([$design, $desc, floatval($prix), $code]);
        } catch (PDOException $e) {
            die('Erreur lors de la mise à jour : ' . $e->getMessage());
        }
    }

    public function deleteMedicament($code){
        if (empty($code)) {
            throw new Exception('Code obligatoire');
        }
        
        try {
            $query = $this->db->prepare("DELETE FROM tbl_medicament WHERE code = ?");
            return $query->execute([$code]);
        } catch (PDOException $e) {
            die('Erreur lors de la suppression : ' . $e->getMessage());
        }
    }
}