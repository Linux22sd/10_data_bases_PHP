<?php

$server = "localhost";
$database = "finazas_personales";
$username = "alex";
$password = "linux";

// Forma procedural ------------------------------------------------------
// $mysqli = mysqli_connect($server, $username, $password, $database);
// Comprobar conexion de manera procedural -------------------------------
// if (!$mysqli) 
//    die("Algo salio mal" . mysqli_connect_error());


// Forma orientada a objetos --------------------------------------------
$mysqli = new mysqli($server, $username, $password, $database);
// Comprobar conexion forma orientada a objetos -------------------------
if ($mysqli->connect_errno)
    die("Algo salio mal {$mysqli->connect_error}" );


// Esto nos ayuda a poder usar cualquier caracter en nuestras consultas
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

echo "<pre>";
print_r($setnames);
echo "</pre>";
?>