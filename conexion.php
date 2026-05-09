<?php

$servidor = "mysql-laurido.alwaysdata.net";
$usuario = "laurido";
$password = "antho2022";
$basedatos = "laurido_gestion_envios_db";

$conn = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>