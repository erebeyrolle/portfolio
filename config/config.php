<?php

require __DIR__ . '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'./../');
$dotenv->load();

$db_dsn = getenv('DB_DSN');
$db_name = getenv('DB_NAME');
$db_charset = getenv('DB_CHARSET');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');