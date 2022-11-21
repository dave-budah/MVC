<?php

namespace Controller;


defined('ROOTPATH') OR exit('Access Denied');


class PageNotFound
{
    use MainController;

    public function index()
    {
        $this->view('404');
    }
}