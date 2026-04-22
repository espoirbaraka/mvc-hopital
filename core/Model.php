<?php
/*
 * ============================================================
 *  FICHIER : core/Model.php
 *  RÔLE    : Classe de base pour tous les Modèles (couche M du MVC)
 * ============================================================
 *
 *  Dans l'architecture MVC (Model - View - Controller) :
 *    - M = Model  = gère les données (base de données)
 *    - V = View   = gère l'affichage (HTML)
 *    - C = Controller = gère la logique, fait le lien entre M et V
 *
 *  Ce fichier contient la classe "Model", qui est la classe PARENTE
 *  de tous les modèles de l'application.
 *
 *  Pourquoi une classe parente ?
 *  Imagine une famille. Le parent possède certaines choses que
 *  tous ses enfants héritent automatiquement.
 *  Ici, la classe Model possède la connexion à la base de données,
 *  et chaque modèle (Medicament, Patient, etc.) en hérite.
 *  Cela évite de répéter le code de connexion dans chaque fichier.
 * ============================================================
 */

/*
 *  On importe (inclut) le fichier Database.php qui contient
 *  la classe Database. On en a besoin ici pour créer une connexion.
 *  Sans ce "include", PHP ne saurait pas ce qu'est la classe Database.
 */
include "Database.php";

/*
 *  On définit la classe "Model".
 *  Cette classe ne fait qu'une seule chose importante :
 *  se connecter à la base de données au moment de sa création
 *  et stocker cette connexion dans $this->db.
 *  Tous les modèles qui étendent cette classe auront accès à $this->db.
 */
class Model{

    /*
     *  "public $db;" déclare une propriété accessible depuis partout.
     *
     *  $db va stocker la connexion active à la base de données.
     *  "db" est l'abréviation de "database" (base de données).
     *
     *  Grâce à cette variable, tous les modèles enfants pourront
     *  faire des requêtes SQL en utilisant simplement "$this->db".
     */
    public $db;

    /*
     * ------------------------------------------------------------
     *  MÉTHODE SPÉCIALE : __construct()
     * ------------------------------------------------------------
     *
     *  "__construct()" est ce qu'on appelle un "constructeur".
     *  C'est une méthode SPÉCIALE qui s'exécute AUTOMATIQUEMENT
     *  dès qu'on crée un nouvel objet avec "new NomDeLaClasse()".
     *
     *  Exemple :
     *    $medicament = new Medicament();
     *    → Au moment du "new", le constructeur de Medicament s'exécute.
     *    → Medicament hérite de Model, donc le constructeur de Model
     *      s'exécute aussi automatiquement.
     *    → Ce constructeur se connecte à la base de données.
     *
     *  En résumé : à chaque fois qu'on crée un modèle, la connexion
     *  à la base de données est établie automatiquement. Pratique !
     * ------------------------------------------------------------
     */
    public function __construct(){

        /*
         *  On crée un nouvel objet de la classe "Database".
         *  Cet objet sait comment se connecter à MySQL.
         *  On le stocke temporairement dans $database.
         */
        $database = new Database();

        /*
         *  On appelle la méthode connect() sur $database.
         *  Elle nous renvoie la connexion active à la base de données.
         *
         *  On la stocke dans "$this->db".
         *
         *  Le mot "this" désigne l'objet courant (celui qu'on est en train
         *  de créer). La flèche "->" permet d'accéder à ses propriétés.
         *
         *  Donc "$this->db" = "ma propre variable $db".
         *  Après cette ligne, tous les modèles enfants pourront utiliser
         *  "$this->db" pour faire des requêtes SQL.
         *
         *  "return" ici n'est pas vraiment utile dans un constructeur
         *  (le constructeur ne peut pas vraiment "retourner" de valeur),
         *  mais la valeur est quand même assignée à $this->db.
         */
        return $this->db = $database->connect();
    }
}