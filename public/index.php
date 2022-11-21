<?php
session_start();

$minPHPVersion = '8.0';
if (phpversion() < $minPHPVersion) {
    die("The minimum PHP version is {$minPHPVersion} . Your current version is" . phpversion());
}

const ROOTPATH = __DIR__ . DIRECTORY_SEPARATOR;

require '../app/core/init.php';

$app = new App;
$app->loadController();
