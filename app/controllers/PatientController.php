<?php

class PatientController extends Controller {

    public function displayPatient(){
        $patient = new Patient();
        $data['patients'] = $patient->getAllPatients();

        $this->view("patient", $data['patients']);
    }

    public function displayAddPatient(){
        $this->view("addPatient");
    }

    public function insertPatient(){
        $nom = $_POST['nom'];
        $postnom = $_POST['postnom'];
        $prenom = $_POST['prenom'];
        $date_naissance = $_POST['date_naissance'];
        $adresse = $_POST['adresse'];
        $telephone = $_POST['telephone'];

        $patient = new Patient();
        $patient->createPatient($nom, $postnom, $prenom, $date_naissance, $adresse, $telephone);

        header("Location: ?page=listePatient");
    }
}