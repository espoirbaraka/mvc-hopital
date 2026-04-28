<?php
class Controller
{
    public function view($file, $data = [])
    {
        $flash = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);

        extract($data);

        require "../app/views/" . $file . ".php";
    }

    protected function redirect($url)
    {
        header("Location: " . $url);
        exit;
    }

    protected function flash($type, $message)
    {
        $_SESSION['flash'] = [
            'type' => $type,
            'message' => $message,
        ];
    }
}
