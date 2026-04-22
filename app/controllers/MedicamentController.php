<?php
/*
 * ============================================================
 *  FICHIER : app/controllers/MedicamentController.php
 *  RÔLE    : Contrôleur pour les médicaments (couche C du MVC)
 * ============================================================
 *
 *  Dans l'architecture MVC, le Contrôleur est le "chef d'orchestre".
 *  Il ne stocke pas de données (c'est le rôle du Modèle)
 *  et ne s'occupe pas de l'affichage (c'est le rôle de la Vue).
 *
 *  Son travail :
 *    1. Recevoir une demande (ex: "affiche les médicaments")
 *    2. Demander les données correspondantes au Modèle
 *    3. Envoyer ces données à la Vue pour les afficher
 *
 *  Pense à lui comme à un serveur dans un restaurant :
 *    - Le client (utilisateur) passe une commande
 *    - Le serveur (contrôleur) transmet la commande à la cuisine (modèle)
 *    - La cuisine prépare le plat (les données)
 *    - Le serveur apporte le plat au client (la vue l'affiche)
 * ============================================================
 */

/*
 *  "class MedicamentController extends Controller"
 *
 *  - "class MedicamentController" = on définit la classe MedicamentController.
 *  - "extends Controller" = elle hérite de la classe parente "Controller"
 *    (définie dans core/Controller.php).
 *
 *  Grâce à "extends Controller", MedicamentController hérite automatiquement
 *  de la méthode "view()" de la classe Controller.
 *  On peut donc appeler "$this->view(...)" sans la redéfinir ici.
 */
class MedicamentController extends Controller{

    /*
     * ------------------------------------------------------------
     *  MÉTHODE : displayMedicament()
     * ------------------------------------------------------------
     *
     *  Cette méthode gère l'affichage de la liste des médicaments.
     *  C'est elle qui est appelée dans le fichier index.php
     *  avec "$medicament->displayMedicament()".
     *
     *  Son déroulement :
     *    Étape 1 → Créer un objet Medicament (le modèle)
     *    Étape 2 → Demander au modèle tous les médicaments
     *    Étape 3 → Envoyer ces données à la vue pour l'affichage
     * ------------------------------------------------------------
     */
    public function displayMedicament(){

        /*
         *  ÉTAPE 1 : On crée un objet de la classe "Medicament" (le modèle).
         *
         *  "new Medicament()" = fabrique un nouvel objet Medicament.
         *  En faisant ça, le constructeur de Medicament (hérité de Model)
         *  s'exécute automatiquement et se connecte à la base de données.
         *
         *  On stocke cet objet dans la variable $medoc.
         *  $medoc représente maintenant notre "accès" au modèle des médicaments.
         */
        $medoc = new Medicament();

        /*
         *  ÉTAPE 2 : On demande tous les médicaments au modèle.
         *
         *  "$medoc->getAllMedicaments()" appelle la méthode getAllMedicaments()
         *  définie dans la classe Medicament (app/models/Medicament.php).
         *  Cette méthode exécute la requête SQL et retourne un tableau
         *  contenant tous les médicaments de la base de données.
         *
         *  On stocke le résultat dans $data['medocs'].
         *
         *  $data est un tableau associatif (comme un dictionnaire) :
         *    - La clé 'medocs' est le nom qu'on donne à cette liste.
         *    - La valeur est le tableau des médicaments retourné par le modèle.
         *
         *  Exemple de contenu de $data['medocs'] :
         *    [
         *      ["code" => "M001", "designation" => "Doliprane", ...],
         *      ["code" => "M002", "designation" => "Amoxicilline", ...],
         *    ]
         */
        $data['medocs'] = $medoc->getAllMedicaments();

        /*
         *  ÉTAPE 3 : On envoie les données à la vue pour affichage.
         *
         *  "$this->view()" appelle la méthode view() héritée de Controller.
         *
         *  On lui passe deux arguments :
         *    1) "medicament" = le nom du fichier de vue à charger.
         *       Cela correspond à "app/views/medicament.php".
         *    2) $data['medocs'] = les données à transmettre à la vue.
         *       La vue recevra ces données dans une variable appelée $data
         *       et pourra les afficher.
         *
         *  Après cette ligne, PHP va charger le fichier medicament.php
         *  et afficher son contenu au navigateur de l'utilisateur.
         */
        $this->view("medicament", $data['medocs']);
    }
}