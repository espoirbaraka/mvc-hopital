<?php
include "../core/Controller.php";
include "../core/Model.php";
include "../app/controllers/MedicamentController.php";
include "../app/models/Medicament.php";

$medicament = new MedicamentController();

// Vérifier si 'page' existe dans $_GET
if(isset($_GET['page'])) {
    $page = $_GET['page'];
    
    if($page == "insererMedoc"){
        $medicament->displayAddMedicament();
    } elseif($page == "liste"){
        $medicament->displayMedicament();
    } elseif($page == "insert"){
        $medicament->insertMedicament();
    } else {
        // Page par défaut si la valeur n'est pas reconnue
        $medicament->displayMedicament();
    }
} else {
    // Page par défaut quand aucun paramètre 'page' n'est fourni
    $medicament->displayMedicament();
}
?>