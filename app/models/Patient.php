<?php
class Patient extends Model {
    public $code;
    public $nom;
    public $postnom;
    public $prenom;
    public $date_naissance;
    public $adresse;
    public $telephone;

    public function getAllPatients(){
        $requette = $this->db->prepare("SELECT * FROM tbl_patient");
        $requette->execute([]);
        return $resultat = $requette->fetchAll();
    }

    public function getPatientById($id){
        $requette = $this->db->prepare("SELECT * FROM tbl_patient WHERE code_patient = ?");
        $requette->execute([$id]);
        return $resultat = $requette->fetch();
    }

    public function createPatient($nom, $postnom, $prenom, $date_naissance, $adresse, $telephone){
        $this->nom = $nom;
        $this->postnom = $postnom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $requette = $this->db->prepare("INSERT INTO tbl_patient
        (nom, postnom, prenom, date_naissance, adresse, telephone) VALUES(?, ?, ?, ?, ?, ?)");
        $requette->execute([$this->nom, $this->postnom, $this->prenom, $this->date_naissance, $this->adresse, $this->telephone]);
    }

    public function updatePatient($id, $nom, $postnom, $prenom, $date_naissance, $adresse, $telephone){
        $this->nom = $nom;
        $this->postnom = $postnom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $requette = $this->db->prepare("UPDATE tbl_patient SET nom = ?, postnom = ?, prenom = ?, date_naissance = ?, adresse = ?, telephone = ? WHERE code_patient = ?");
        $requette->execute([$this->nom, $this->postnom, $this->prenom, $this->date_naissance, $this->adresse, $this->telephone, $id]);
    }

    public function deletePatient($id){
        $requette = $this->db->prepare("DELETE FROM tbl_patient WHERE code_patient = ?");
        $requette->execute([$id]);
    }
}
?>
