<?php

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

}