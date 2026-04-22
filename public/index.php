<?php
/*
 * ============================================================
 *  FICHIER : public/index.php
 *  RÔLE    : Point d'entrée unique de l'application (Front Controller)
 * ============================================================
 *
 *  Imagine une réception dans un hôpital.
 *  Quand quelqu'un arrive, il passe TOUJOURS par la réception.
 *  Ce fichier index.php joue exactement ce rôle :
 *  c'est LA PREMIÈRE PORTE par laquelle toutes les requêtes
 *  de l'application passent. On appelle cela un "Front Controller".
 *
 *  Concrètement, quand un visiteur tape l'adresse du site
 *  dans son navigateur, c'est CE fichier qui est exécuté en premier.
 * ============================================================
 */

/*
 * ------------------------------------------------------------
 *  ÉTAPE 1 : Inclure les fichiers nécessaires ("include")
 * ------------------------------------------------------------
 *
 *  En PHP, "include" signifie "va chercher ce fichier et
 *  colle son contenu ici". C'est comme si tu photocopiais
 *  le contenu d'un autre fichier et tu le collais à cet endroit.
 *
 *  Pourquoi faire ça ?
 *  Parce que notre application est divisée en plusieurs fichiers
 *  pour rester organisée. Avant d'utiliser quelque chose qui
 *  est défini dans un autre fichier, il faut d'abord le charger.
 *
 *  Le chemin "../core/Controller.php" signifie :
 *    - ".." = remonte d'un niveau dans les dossiers (on sort du dossier "public")
 *    - "/core/" = entre dans le dossier "core"
 *    - "Controller.php" = prend ce fichier précis
 * ------------------------------------------------------------
 */

// On charge la classe de base Controller (elle se trouve dans le dossier core/)
// Cette classe contient des fonctions réutilisables par tous les contrôleurs.
include "../core/Controller.php";

// On charge la classe de base Model (elle se trouve dans le dossier core/)
// Cette classe permet à tous les modèles de se connecter à la base de données.
include "../core/Model.php";

// On charge le contrôleur spécifique aux médicaments.
// Ce fichier contient la logique pour afficher, créer, modifier les médicaments.
include "../app/controllers/MedicamentController.php";

// On charge le modèle Médicament.
// Ce fichier contient les requêtes SQL liées à la table des médicaments.
include "../app/models/Medicament.php";

/*
 * ------------------------------------------------------------
 *  ÉTAPE 2 : Créer un objet et appeler une action
 * ------------------------------------------------------------
 *
 *  En Programmation Orientée Objet (POO), une "classe" c'est
 *  comme un plan de construction. Un "objet" c'est ce qu'on
 *  construit à partir de ce plan.
 *
 *  Exemple concret :
 *    - La classe "Voiture" est le plan de fabrication.
 *    - L'objet "$maVoiture = new Voiture()" est la voiture réelle
 *      qu'on a fabriquée grâce à ce plan.
 *
 *  Ici, on fabrique un objet de type "MedicamentController"
 *  et on le stocke dans la variable $medicament.
 *
 *  Le mot-clé "new" = "fabrique un nouvel objet de cette classe".
 * ------------------------------------------------------------
 */

// On crée un nouvel objet MedicamentController.
// Cet objet va gérer tout ce qui concerne les médicaments.
$medicament = new MedicamentController();

/*
 *  On appelle la méthode (= fonction) "displayMedicament()" sur notre objet.
 *  La flèche "->" est la façon d'appeler une fonction qui appartient à un objet.
 *
 *  C'est comme dire à l'objet $medicament :
 *  "Hey, exécute ta fonction displayMedicament !"
 *
 *  Cette fonction va :
 *    1. Aller chercher tous les médicaments dans la base de données.
 *    2. Envoyer ces données à la vue (la page HTML) pour les afficher.
 */
$medicament->displayMedicament();