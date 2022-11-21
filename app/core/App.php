<?php

defined('ROOTPATH') OR exit('Access Denied');


class App
{
    private $controller = 'Home';
    private $method = 'index';

    private function splitURL()
    {
        $URL = isset($_GET['url']) ? $_GET['url'] : 'home';
        return explode('/', trim($URL, '/'));
    }

    public function loadController()
    {
        $URL = $this->splitURL();

//        Select controller
        $filename = '../app/controllers/'.ucfirst($URL[0]).'.php';
        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        } else {
            $filename = '../app/controllers/PageNotFound.php';
            require $filename;
            $this->controller = 'PageNotFound';
        }

        $mycontroller = '\Controller\\'.$this->controller;
        $controller = new $mycontroller;

//        Select method
        if (!empty($URL[1])) {
           if (method_exists($controller, $URL[1])) {
               $this->method = $URL[1];
               unset($URL[1]);
           }
        }

        call_user_func_array([$controller, $this->method], $URL);

    }
}
