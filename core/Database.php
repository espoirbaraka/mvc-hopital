<?php
class Database{
    public $connexion;

    public function connect(){
        // Use a persistent connection for better performance
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->connexion = new PDO('mysql:host=localhost;dbname=hopital', 'root', '', $options);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }

        return $this->connexion;
    }
}