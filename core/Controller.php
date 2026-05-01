<?php
class Controller{
    // Henoc Banza a rien compris
    public function view($file, $data = []){
        require "../app/views/".$file.".php";
    }
}