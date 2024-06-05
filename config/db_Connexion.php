<?php
require_once('config.php');

// define('DSN','mysql:host=localhost;dbname=library');
// define('USER','root');
// define('PASSWORD','1604');
// define('CHARSET','charset=utf-8');

function connectDB($db_dsn, $db_name, $db_charset, $db_user, $db_pass)
{
    $dataBase = new PDO("'".$db_dsn.";".$db_name."'".";".$db_charset."'", $db_user, $db_pass);
    $dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dataBase;
}