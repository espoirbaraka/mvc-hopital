<?php
include "../core/Controller.php";
include "../core/Model.php";
include "../app/controllers/MedicamentController.php";
include "../app/models/Medicament.php";
// comment inserer les médicaments

$medicament = new MedicamentController();

$page = $_GET['page'];
if($page == "insererMedoc"){
    $medicament->displayAddMedicament();
} elseif($page == "liste"){
    $medicament->displayMedicament();
} elseif($page == "insert"){
    $medicament->insertMedicament();
}

