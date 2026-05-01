<?php
include "../core/Controller.php"; //Inclusion du controller
include "../core/Model.php";
include "../app/controllers/MedicamentController.php";
include "../app/models/Medicament.php";

$medicament = new MedicamentController();

$page = $_GET['page'];
if($page == "insererMedoc"){
    $medicament->displayAddMedicament();
} elseif($page == "liste"){
    $medicament->displayMedicament();
} elseif($page == "insert"){
    $medicament->insertMedicament();
}

