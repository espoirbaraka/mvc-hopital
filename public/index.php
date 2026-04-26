<?php
session_start();

include "../core/Controller.php";
include "../core/Model.php";
include "../app/models/User.php";
include "../app/models/Medicament.php";
include "../app/models/Patient.php";
include "../app/controllers/AuthController.php";
include "../app/controllers/MedicamentController.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'login';

// Routes publiques (avant authentification)
if($page == "login"){
    $auth = new AuthController();
    $auth->displayLogin();
    $auth->login();
} elseif($page == "register"){
    $auth = new AuthController();
    $auth->displayRegister();
    $auth->register();
} elseif($page == "logout"){
    $auth = new AuthController();
    $auth->logout();
} else {
    // Routes protégées (nécessite une session)
    if(!isset($_SESSION['user_id'])){
        header("Location: ?page=login");
        exit();
    }

    $medicament = new MedicamentController();

    if($page == "insererMedoc"){
        $medicament->displayAddMedicament();
    } elseif($page == "liste"){
        $medicament->displayMedicament();
    } elseif($page == "insert"){
        $medicament->insertMedicament();
    }
}

