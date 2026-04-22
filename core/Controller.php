<?php
/*
 * ============================================================
 *  FICHIER : core/Controller.php
 *  RÔLE    : Classe de base pour tous les Contrôleurs (couche C du MVC)
 * ============================================================
 *
 *  Dans l'architecture MVC :
 *    - Le Contrôleur est le "chef d'orchestre".
 *    - Il reçoit les demandes de l'utilisateur.
 *    - Il demande les données au Modèle.
 *    - Il envoie ces données à la Vue pour les afficher.
 *
 *  Ce fichier contient la classe "Controller", qui est la classe
 *  PARENTE de tous les contrôleurs de l'application.
 *
 *  Elle fournit une méthode commune "view()" que tous les
 *  contrôleurs enfants peuvent utiliser pour afficher une page HTML.
 *
 *  Pense à cette classe comme à un "kit de base" que chaque
 *  contrôleur reçoit en héritage. Tous les contrôleurs
 *  peuvent appeler $this->view() sans avoir à réécrire la logique.
 * ============================================================
 */

/*
 *  Définition de la classe Controller.
 *  Cette classe ne fait qu'une chose : charger une vue (fichier HTML/PHP)
 *  et lui transmettre des données.
 */
class Controller{

    /*
     * ------------------------------------------------------------
     *  MÉTHODE : view($file, $data = [])
     * ------------------------------------------------------------
     *
     *  Cette méthode permet d'afficher une page (une "vue").
     *  Elle prend en paramètre le nom du fichier de vue à charger
     *  et, optionnellement, des données à lui transmettre.
     *
     *  PARAMÈTRES :
     *
     *  - $file (obligatoire)
     *    C'est le nom du fichier de vue à afficher,
     *    SANS l'extension ".php".
     *    Exemple : si $file = "medicament", la méthode chargera
     *    le fichier "app/views/medicament.php".
     *
     *  - $data = [] (optionnel)
     *    C'est un tableau (liste) de données à transmettre à la vue.
     *    Par exemple, la liste des médicaments récupérée
     *    depuis la base de données.
     *    Le "= []" signifie que si on n'envoie rien, $data sera
     *    par défaut un tableau vide. C'est une valeur par défaut.
     * ------------------------------------------------------------
     */
    public function view($file, $data = []){

        /*
         *  "require" fonctionne comme "include" mais avec une différence :
         *  si le fichier est introuvable, "require" arrête complètement
         *  l'exécution et affiche une erreur fatale.
         *  "include" lui ne ferait qu'afficher un avertissement.
         *
         *  Le chemin est construit dynamiquement :
         *    "../app/views/" . $file . ".php"
         *
         *  Le point "." en PHP est l'opérateur de concaténation.
         *  Il permet de coller des morceaux de texte ensemble.
         *
         *  Exemple :
         *    Si $file = "medicament", le chemin sera :
         *    "../app/views/" . "medicament" . ".php"
         *    = "../app/views/medicament.php"
         *
         *  Ce fichier PHP sera chargé et exécuté.
         *  Grâce à "require", la variable $data est automatiquement
         *  accessible dans le fichier de vue (car ils partagent le même
         *  contexte d'exécution PHP). La vue pourra donc utiliser $data
         *  pour afficher les informations.
         */
        require "../app/views/".$file.".php";
    }
}