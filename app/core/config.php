<?php

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

define('APP_NAME', 'selvigtech');
define('APP_VERSION', '1.0');
define('ADD_DESC', 'Personal portfolio');