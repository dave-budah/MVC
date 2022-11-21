<?php

namespace Controller;

use Controller;


defined('ROOTPATH') OR exit('Access Denied');


class Register
{
    use MainController;

    public function index($data)
    {
        $user = new User;
        if ($user->validate($_POST))
        {
            $user->insert($_POST);
            return('login');
        }

        $data['errors'] = $user->errors;
        $this->view('register', $data);
    }
}