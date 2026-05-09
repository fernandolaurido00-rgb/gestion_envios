<?php

$servidor = "mysql-laurido.alwaysdata.net";
$usuario = "laurido";
$password = "karen2216";
$basedatos = "laurido_gestion_envios_db";

$conn = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

?>