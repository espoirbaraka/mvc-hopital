<?php
/*
 * ============================================================
 *  FICHIER : app/models/Medicament.php
 *  RÔLE    : Modèle pour gérer les données des médicaments
 *            (couche M du MVC = Model)
 * ============================================================
 *
 *  Ce fichier représente la couche "Modèle" du MVC pour les médicaments.
 *  Son rôle est de communiquer avec la base de données :
 *    - Lire les médicaments (SELECT)
 *    - Créer un nouveau médicament (INSERT) → pas encore codé
 *    - Modifier un médicament (UPDATE) → pas encore codé
 *    - Supprimer un médicament (DELETE) → pas encore codé
 *
 *  Imagine ce fichier comme un "bibliothécaire" qui connaît
 *  comment chercher, ajouter, modifier ou supprimer des livres
 *  (ici des médicaments) dans la bibliothèque (la base de données).
 * ============================================================
 */

/*
 *  "class Medicament extends Model"
 *
 *  - "class Medicament" = on crée une nouvelle classe appelée Medicament.
 *  - "extends Model" = la classe Medicament HÉRITE de la classe Model.
 *
 *  "extends" en PHP signifie "hérite de".
 *  Hériter, c'est comme un enfant qui reçoit automatiquement les
 *  caractéristiques de son parent.
 *
 *  Ici, Medicament hérite de Model, ce qui lui donne automatiquement :
 *    - La propriété $this->db (la connexion à la base de données)
 *    - Le constructeur de Model qui se connecte automatiquement
 *      à la base de données dès la création d'un objet Medicament.
 *
 *  Grâce à ça, on n'a pas besoin de réécrire le code de connexion ici.
 */
class Medicament extends Model {

    /*
     * -------------------------------------------------------
     *  PROPRIÉTÉS DE LA CLASSE (les caractéristiques d'un médicament)
     * -------------------------------------------------------
     *
     *  Ces variables représentent les "colonnes" de la table
     *  "tbl_medicament" dans la base de données.
     *  Chaque médicament a :
     *    - un code (identifiant unique)
     *    - une désignation (son nom commercial)
     *    - une description (ce à quoi il sert)
     *    - un prix
     *
     *  "public" = ces variables sont accessibles depuis l'extérieur.
     *  "$code", "$designation", etc. = les noms des variables.
     *
     *  Ces propriétés ne sont pas utilisées directement par les
     *  requêtes SQL ici, mais elles définissent la "forme" d'un médicament.
     * -------------------------------------------------------
     */

    // Le code unique qui identifie chaque médicament dans la base de données
    public $code;

    // Le nom ou la désignation commerciale du médicament (ex: "Paracétamol")
    public $designation;

    // Une courte description du médicament (ex: "Antidouleur et antipyrétique")
    public $description;

    // Le prix du médicament en unité monétaire
    public $prix;

    /*
     * ------------------------------------------------------------
     *  MÉTHODE : getAllMedicaments()
     * ------------------------------------------------------------
     *
     *  Cette méthode va chercher TOUS les médicaments dans la
     *  base de données et les retourne sous forme de tableau (liste).
     *
     *  C'est comme demander au bibliothécaire :
     *  "Donne-moi la liste complète de tous les livres de la bibliothèque."
     * ------------------------------------------------------------
     */
    public function getAllMedicaments(){

        /*
         *  "$this->db" = notre connexion à la base de données.
         *  Elle a été créée automatiquement par le constructeur de Model
         *  (dont Medicament hérite).
         *
         *  "->prepare()" est une méthode de PDO qui permet de
         *  PRÉPARER une requête SQL avant de l'exécuter.
         *
         *  Pourquoi préparer plutôt qu'exécuter directement ?
         *  C'est plus sécurisé et plus rapide si la requête doit
         *  être exécutée plusieurs fois.
         *
         *  La requête SQL : "SELECT * FROM tbl_medicament"
         *    - SELECT = je veux LIRE des données
         *    - * = je veux TOUTES les colonnes (code, designation, description, prix)
         *    - FROM tbl_medicament = depuis la table appelée "tbl_medicament"
         *
         *  Le résultat (la requête préparée) est stocké dans $requette.
         *  (Note: il y a une faute de frappe dans le nom de la variable,
         *  le correct serait "requête" ou "query", mais on ne change rien au code.)
         */
        $requette = $this->db->prepare("SELECT * FROM tbl_medicament");

        /*
         *  "->execute([])" lance réellement la requête SQL.
         *
         *  Le tableau vide "[]" signifie qu'il n'y a pas de
         *  paramètres à injecter dans la requête.
         *  (Les paramètres servent quand on a des conditions
         *  comme "WHERE id = ?", mais ici on prend tout.)
         *
         *  Après cette ligne, la base de données a reçu et
         *  exécuté notre requête SELECT.
         */
        $requette->execute([]);

        /*
         *  "->fetchAll()" récupère TOUS les résultats de la requête.
         *  Cela retourne un tableau PHP où chaque élément est une
         *  ligne de la table (un médicament).
         *
         *  Exemple de ce que $resultat pourrait contenir :
         *  [
         *    ["code" => "M001", "designation" => "Doliprane", "prix" => 5.50],
         *    ["code" => "M002", "designation" => "Ibuprofène", "prix" => 3.20],
         *    ...
         *  ]
         *
         *  "return $resultat" = on envoie ce tableau à celui
         *  qui a appelé cette méthode (le contrôleur).
         */
        return $resultat = $requette->fetchAll();
    }

    /*
     * ------------------------------------------------------------
     *  MÉTHODE : createMedicament()
     * ------------------------------------------------------------
     *
     *  Cette méthode servira à ajouter un nouveau médicament
     *  dans la base de données (requête SQL INSERT).
     *
     *  Elle est déclarée mais pas encore codée (le corps est vide).
     *  C'est prévu pour une prochaine étape de développement.
     * ------------------------------------------------------------
     */
    public function createMedicament(){
        // TODO: écrire ici la requête SQL INSERT pour créer un médicament
    }

    /*
     * ------------------------------------------------------------
     *  MÉTHODE : updateMedicament()
     * ------------------------------------------------------------
     *
     *  Cette méthode servira à modifier un médicament existant
     *  dans la base de données (requête SQL UPDATE).
     *
     *  Elle est déclarée mais pas encore codée (le corps est vide).
     * ------------------------------------------------------------
     */
    public function updateMedicament(){
        // TODO: écrire ici la requête SQL UPDATE pour modifier un médicament
    }

    /*
     * ------------------------------------------------------------
     *  MÉTHODE : deleteMedicament()
     * ------------------------------------------------------------
     *
     *  Cette méthode servira à supprimer un médicament
     *  de la base de données (requête SQL DELETE).
     *
     *  Elle est déclarée mais pas encore codée (le corps est vide).
     * ------------------------------------------------------------
     */
    public function deleteMedicament(){
        // TODO: écrire ici la requête SQL DELETE pour supprimer un médicament
    }
}