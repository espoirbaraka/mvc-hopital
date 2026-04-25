<?php
include "../core/Controller.php";
include "../core/Model.php";
include "../app/controllers/MedicamentController.php";
include "../app/models/Medicament.php";

include "../app/controllers/PatientController.php";
include "../app/models/Patient.php";

$patient = new PatientController();

$medicament = new MedicamentController();

$page = $_GET['page'] ?? 'home';
if($page == "insererMedoc"){
    $medicament->displayAddMedicament();
} elseif($page == "liste"){
    $medicament->displayMedicament();
} elseif($page == "insert"){
    $medicament->insertMedicament();
}


elseif($page == "listePatient"){
    $patient->displayPatient();
}
elseif($page == "insererPatient"){
    $patient->displayAddPatient();
}
elseif($page == "insertPatient"){
    $patient->insertPatient();
}

elseif($page == "home"){
    include "../app/views/home.php";
}