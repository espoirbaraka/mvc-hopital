<?php
class Database{
    public $connexion;

    public function connect(){
       $this->connexion = 
       new PDO('mysql:host=localhost;dbname=hopital', 'root', ''); 
       return $this->connexion;
    }
}