<?php

require_once("fnc.php");
require_once("config.php");

$hostname = "localhost";
$username = "root";
$password = "";
$database = "futboldb";

error_reporting(0);
mysqli_report(MYSQLI_REPORT_OFF);

$enlace = mysqli_connect($hostname, $username, $password, $database);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos futboldb es genial." . PHP_EOL;
//echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

mysqli_close($enlace);
//var_dump($enlace);
?>