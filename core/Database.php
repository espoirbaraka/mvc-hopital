<?php
/*
 * ============================================================
 *  FICHIER : core/Database.php
 *  RÔLE    : Gérer la connexion à la base de données MySQL
 * ============================================================
 *
 *  Imagine que la base de données est un grand classeur rempli
 *  de fiches (les données : médicaments, patients, etc.).
 *  Pour consulter ce classeur, tu as besoin d'un "pass d'accès".
 *  Ce fichier Database.php s'occupe d'ouvrir cette connexion
 *  et de te donner ce "pass" pour pouvoir lire ou écrire des données.
 *
 *  C'est la SEULE classe qui sait comment se connecter à la
 *  base de données. Toutes les autres classes passent par elle.
 * ============================================================
 */

/*
 *  En PHP, "class" permet de définir une classe.
 *  Une classe, c'est comme un modèle ou un moule.
 *  Ici on crée le moule "Database".
 *  Grâce à ce moule, on pourra créer des objets Database
 *  qui savent se connecter à la base de données.
 */
class Database{

    /*
     *  "public $connexion;" déclare une propriété (variable) de la classe.
     *
     *  - "public" = cette variable est accessible depuis n'importe où,
     *    depuis l'intérieur ET l'extérieur de la classe.
     *  - "$connexion" = c'est le nom de la variable.
     *    Elle va stocker le lien vers la base de données une fois connecté.
     *
     *  Pour l'instant, elle est vide (null). Elle sera remplie
     *  quand on appellera la méthode connect() ci-dessous.
     */
    public $connexion;

    /*
     * ------------------------------------------------------------
     *  MÉTHODE : connect()
     * ------------------------------------------------------------
     *
     *  Une "méthode", c'est simplement une fonction qui est
     *  définie à l'intérieur d'une classe.
     *
     *  Cette méthode "connect()" a pour mission unique de
     *  créer et retourner une connexion à la base de données MySQL.
     *
     *  - "public" = cette méthode est accessible depuis l'extérieur
     *    de la classe. N'importe qui peut l'appeler.
     *  - "function" = mot-clé pour déclarer une fonction.
     *  - "connect" = le nom qu'on a choisi pour cette fonction.
     * ------------------------------------------------------------
     */
    public function connect(){

       /*
        *  PDO signifie "PHP Data Objects".
        *  C'est un outil intégré à PHP pour parler à différentes
        *  bases de données (MySQL, PostgreSQL, SQLite, etc.).
        *  C'est comme un traducteur universel entre PHP et la base de données.
        *
        *  "new PDO(...)" crée un nouvel objet PDO, c'est-à-dire
        *  qu'on ouvre une connexion vers la base de données.
        *
        *  Les paramètres passés à PDO sont :
        *
        *  1) 'mysql:host=localhost;dbname=hopital'
        *     C'est la "chaîne de connexion" (DSN = Data Source Name).
        *     Elle dit à PHP :
        *       - "mysql" = le type de base de données utilisé (ici MySQL)
        *       - "host=localhost" = la base de données se trouve sur
        *         cette même machine (localhost = mon propre ordinateur)
        *       - "dbname=hopital" = le nom de la base de données
        *         à laquelle on veut se connecter (ici elle s'appelle "hopital")
        *
        *  2) 'root'
        *     C'est le nom d'utilisateur pour se connecter à MySQL.
        *     Par défaut avec XAMPP, c'est "root".
        *
        *  3) ''
        *     C'est le mot de passe de l'utilisateur MySQL.
        *     Ici il est vide (pas de mot de passe),
        *     ce qui est normal dans un environnement de développement local.
        *     En production (sur un vrai site), il faudrait mettre
        *     un vrai mot de passe ici !
        *
        *  La connexion créée est stockée dans la variable locale $connexion.
        */
       $connexion = 
       new PDO('mysql:host=localhost;dbname=hopital', 'root', ''); 

       /*
        *  "return" signifie "renvoie cette valeur à celui qui a appelé
        *  cette méthode".
        *
        *  Concrètement : quand on appelle $database->connect(),
        *  on reçoit en retour l'objet $connexion (notre lien vers
        *  la base de données), qu'on peut ensuite utiliser pour
        *  faire des requêtes SQL.
        */
       return $connexion;
    }
}