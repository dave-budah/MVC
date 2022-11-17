<?php

class Controller
{
    public function view($name)
    {
        $filename = '../app/views/'.$name.'.php';
        if (!file_exists($filename)) {
            $filename = '../app/views/404.php';
        }
        require $filename;
    }

}