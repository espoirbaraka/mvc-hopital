<?php
class Database{
    public $connexion;
    //commentaire
    public function connect(){
       $connexion = new PDO('mysql:host=localhost;dbname=hopital', 'root', ''); 
       return $connexion;
    }
}