<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

define(HOST , 'localhost');
define(USER , 'Allone');
define(SENHA , '123');
define(BANCO, 'api');

define(DS, DIRECTORY_SEPARATOR);
define(DIR_APP, 'api');

if(file_exists('autoload.php')){
    include 'autoload.php';
}else{
    echo 'ERRO AO INCLUIR BOOTSTRAP';exit;
};