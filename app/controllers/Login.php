<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied');

class Login
{
    use MainController;

    public function index()
    {
        $this->view('login');
    }
}