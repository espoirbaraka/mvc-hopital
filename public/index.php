<?php
session_start();

include "../core/Controller.php";
include "../core/Model.php";
include "../app/controllers/MedicamentController.php";
include "../app/controllers/PatientController.php";
include "../app/models/Medicament.php";
include "../app/models/Patient.php";

$medicament = new MedicamentController();
$patient = new PatientController();

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'dashboard':
        $medicament->dashboard();
        break;

    case 'medicaments':
        $medicament->displayMedicament();
        break;

    case 'medicaments-create':
        $medicament->displayAddMedicament();
        break;

    case 'medicaments-store':
        $medicament->insertMedicament();
        break;

    case 'medicaments-delete':
        $medicament->deleteMedicament();
        break;

    case 'patients':
        $patient->displayPatients();
        break;

    case 'patients-create':
        $patient->displayAddPatient();
        break;

    case 'patients-store':
        $patient->insertPatient();
        break;

    case 'patients-delete':
        $patient->deletePatient();
        break;

    default:
        $medicament->dashboard();
        break;
}

