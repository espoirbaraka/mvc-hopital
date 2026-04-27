<?php
class Controller{
    public function view($file, $data = []){
        $filePath = __DIR__ . '/../app/views/' . $file . '.php';
        if (!file_exists($filePath)) {
            die("Vue non trouvée : $file");
        }
        require $filePath;
    }
}