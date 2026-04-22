<?php
include "../core/Controller.php";
include "../core/Model.php";
include "../app/controllers/MedicamentController.php";
include "../app/models/Medicament.php";

$medicament = new MedicamentController();
$medicament->displayMedicament();