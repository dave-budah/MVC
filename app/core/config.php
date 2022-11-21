<?php

defined('ROOTPATH') OR exit('Access Denied');

if ($_SERVER['SERVER_NAME'] == 'localhost')
{
    define('DBNAME', 'mvcdb');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBDRIVER', 'mysql');
    define('DBPASWORD', '');
    define('ROOT', 'http://localhost/mvc/public');
} else {

    define('DBNAME', 'mvcdb');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBDRIVER', 'mysql');
    define('DBPASWORD', '');
    define('ROOT', 'https://www.selvigtech.com');
}

const APP_NAME = 'selvigtech';
const APP_VERSION = '1.0';
const ADD_DESC = 'Personal portfolio';