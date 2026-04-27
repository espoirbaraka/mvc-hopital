<?php
include "../core/Controller.php";
include "../core/Model.php";
include "../app/controllers/MedicamentController.php";
include "../app/controllers/PatientController.php";
include "../app/models/Medicament.php";
include "../app/models/Patient.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

// Routes Médicaments
if($page == "insererMedoc"){
    $medicament = new MedicamentController();
    $medicament->displayAddMedicament();
} elseif($page == "liste"){
    $medicament = new MedicamentController();
    $medicament->displayMedicament();
} elseif($page == "insert"){
    $medicament = new MedicamentController();
    $medicament->insertMedicament();
}
// Routes Patients
elseif($page == "listePatients"){
    $patient = new PatientController();
    $patient->displayPatient();
} elseif($page == "insererPatient"){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $patient = new PatientController();
        $patient->insertPatient();
    } else {
        $patient = new PatientController();
        $patient->displayAddPatient();
    }
} elseif($page == "modifierPatient"){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $patient = new PatientController();
        $patient->updatePatient();
    } else {
        $patient = new PatientController();
        $patient->displayEditPatient();
    }
} elseif($page == "supprimerPatient"){
    $patient = new PatientController();
    $patient->deletePatient();
} else {
    // Page d'accueil
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion Hôpital</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background-color: #f5f5f5;
            }
            .container {
                max-width: 1000px;
                margin: auto;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            .menu {
                display: flex;
                gap: 20px;
                justify-content: center;
                margin: 30px 0;
            }
            .card {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                text-align: center;
                width: 200px;
            }
            .card a {
                display: inline-block;
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                margin-top: 10px;
            }
            .card a:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>🏥 Gestion Hôpital</h1>
            <div class="menu">
                <div class="card">
                    <h2>💊 Médicaments</h2>
                    <p>Gérer les médicaments disponibles</p>
                    <a href="?page=liste">Voir la liste</a>
                </div>
                <div class="card">
                    <h2>👥 Patients</h2>
                    <p>Gérer les informations des patients</p>
                    <a href="?page=listePatients">Voir la liste</a>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}

