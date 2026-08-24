<?php
$host     = "TU_HOST_AIVEN";
$user     = "avnadmin";
$password = "TU_CONTRASEÑA";
$database = "defaultdb";
$port     = 27037;

$conex = mysqli_connect($host, $user, $password, $database, $port);

if (!$conex) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}
?>