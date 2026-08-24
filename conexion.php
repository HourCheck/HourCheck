<?php
$host     = getenv('DB_HOST')     ?: 'mysql-143672f9-aslicvd09-f409.i.aivencloud.com';
$user     = getenv('DB_USER')     ?: 'avnadmin';
$password = getenv('DB_PASS')     ?: 'AVNS_PuVvsawjq4xpduyda42';
$database = getenv('DB_NAME')     ?: 'defaultdb';
$port     = getenv('DB_PORT')     ?: 27037;

$conex = mysqli_connect($host, $user, $password, $database, $port);

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conex, "utf8mb4");
?>