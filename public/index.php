<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../core/Controller.php";
require_once "../core/Model.php";
require_once "../core/Database.php";
require_once "../app/controllers/MedicamentController.php";
require_once "../app/models/Medicament.php";

$medicament = new MedicamentController();

$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'liste';

switch($page) {
    case "insererMedoc":
        $medicament->displayAddMedicament();
        break;
    case "liste":
        $medicament->displayMedicament();
        break;
    case "insert":
        $medicament->insertMedicament();
        break;
    default:
        $medicament->displayMedicament();
        break;
}

