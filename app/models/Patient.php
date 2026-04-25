<?php

class Patient extends Model {

    public function getAllPatients(){
        $requette = $this->db->prepare("SELECT * FROM tbl_patient");
        $requette->execute();
        return $requette->fetchAll();
    }

    public function createPatient($nom, $postnom, $prenom, $date_naissance, $adresse, $telephone){
        $requette = $this->db->prepare("
            INSERT INTO tbl_patient (nom, postnom, prenom, date_naissance, adresse, telephone)
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        $requette->execute([
            $nom,
            $postnom,
            $prenom,
            $date_naissance,
            $adresse,
            $telephone
        ]);
    }

    public function updatePatient(){

    }

    public function deletePatient(){

    }
}