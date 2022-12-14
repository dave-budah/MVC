<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied');


class User
{
    use Model;
    protected $table = 'users';
    protected $allowedColumns = [
        'name',
        'unique_id',
        'email',
        'password',
        'avatar',
        'role',
    ];
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['email']))
        {
            $this->errors['email'] = 'Email is required';
        } else
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = 'Email is not valid';
        }
        if (empty($data['password']))
        {
            $this->errors['password'] = 'Password is required';
        }

        if (empty($this->errors))
        {
            require true;
        }
        return false;
    }

}