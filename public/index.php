<?php
include "../core/Controller.php";
include "../core/Model.php";
include "../app/controllers/MedicamentController.php";
include "../app/controllers/PatientController.php";
include "../app/models/Medicament.php";
include "../app/models/Patient.php";

$medicament = new MedicamentController();
$patient = new PatientController();

$page = $_GET['page'] ?? 'home';
if($page == "home"){
    include "../app/views/home.php";
} elseif($page == "insererMedoc"){
    $medicament->displayAddMedicament();
} elseif($page == "liste"){
    $medicament->displayMedicament();
} elseif($page == "insert"){
    $medicament->insertMedicament();
} elseif($page == "listePatient"){
    $patient->displayPatient();
} elseif($page == "insererPatient"){
    $patient->displayAddPatient();
} elseif($page == "insertPatient"){
    $patient->insertPatient();
}

