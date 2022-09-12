<?php
require __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// $conexion__db__accent = mysqli_connect('mysql-luisruben.alwaysdata.net','luisruben_prueba','1073992580','luisruben_accent-hollding');
$puerto = $_ENV["HOST"];
$usuario = $_ENV["USUARIO"];
$contraseña = $_ENV["PASSWORD"];
$database = $_ENV["DATABASE"];

$conexion__db__accent = mysqli_connect($puerto,$usuario,$contraseña,$database);


?>