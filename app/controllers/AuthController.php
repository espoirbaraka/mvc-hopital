<?php
class AuthController extends Controller {
    
    public function displayLogin(){
        $this->view("login");
    }

    public function displayRegister(){
        $this->view("register");
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = new User();
            $userData = $user->getUserByUsername($username);

            if($userData && $user->verifyPassword($password, $userData['password'])){
                session_start();
                $_SESSION['user_id'] = $userData['id'];
                $_SESSION['username'] = $userData['username'];
                
                header("Location: ?page=liste");
                exit();
            } else {
                $error = "Identifiants incorrects";
                $this->view("login", ['error' => $error]);
            }
        }
    }

    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

            if($password !== $confirmPassword){
                $error = "Les mots de passe ne correspondent pas";
                $this->view("register", ['error' => $error]);
                return;
            }

            $user = new User();
            $existingUser = $user->getUserByUsername($username);

            if($existingUser){
                $error = "Cet utilisateur existe déjà";
                $this->view("register", ['error' => $error]);
                return;
            }

            if($user->createUser($username, $email, $password)){
                session_start();
                $newUser = $user->getUserByUsername($username);
                $_SESSION['user_id'] = $newUser['id'];
                $_SESSION['username'] = $newUser['username'];
                
                header("Location: ?page=liste");
                exit();
            }
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: ?page=login");
        exit();
    }
}
?>
