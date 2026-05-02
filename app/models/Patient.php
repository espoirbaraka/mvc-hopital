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

    public function updatePatient(){
        
    }

    public function deletePatient(){
        
    }
}