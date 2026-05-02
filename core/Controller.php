<?php
class Controller{
    public function view($file, $data = []){
        extract($data);
        require "../app/views/".$file.".php";
    }
}