<?php
// Lee las variables de entorno configuradas en Render o el servidor
$host     = getenv('DB_HOST');
$user     = getenv('DB_USER');
$password = getenv('DB_PASS');
$database = getenv('DB_NAME');
$port     = getenv('DB_PORT');

$conex = mysqli_connect($host, $user, $password, $database, $port);

if (!$conex) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

mysqli_set_charset($conex, "utf8mb4");
?>