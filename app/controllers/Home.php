<?php

namespace Controller;



defined('ROOTPATH') OR exit('Access Denied');

class Home
{
    use MainController;

    public function index()
    {
        $this->view('home');
    }
}
