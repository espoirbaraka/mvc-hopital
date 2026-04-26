<?php
class User extends Model {
    public $id;
    public $username;
    public $email;
    public $password;

    public function getUserByUsername($username){
        $requette = $this->db->prepare("SELECT * FROM tbl_user WHERE username = ?");
        $requette->execute([$username]);
        return $requette->fetch();
    }

    public function getUserById($id){
        $requette = $this->db->prepare("SELECT * FROM tbl_user WHERE id = ?");
        $requette->execute([$id]);
        return $requette->fetch();
    }

    public function createUser($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        
        $requette = $this->db->prepare("INSERT INTO tbl_user (username, email, password) VALUES(?, ?, ?)");
        $requette->execute([$this->username, $this->email, $this->password]);
        
        return true;
    }

    public function verifyPassword($password, $hash){
        return password_verify($password, $hash);
    }
}
?>
