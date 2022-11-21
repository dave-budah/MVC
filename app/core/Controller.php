<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied');


Trait MainController
{
    public function view($name, $data = [])
    {
        if (!empty($data))
            extract($data);
        $filename = '../app/views/'.$name.'.php';
        if (!file_exists($filename)) {
            $filename = '../app/views/404.php';
        }
        require $filename;
    }

}