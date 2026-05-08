<?php

$servidor = "mysql-tuusuario.alwaysdata.net";
$usuario = "laurido";
$password = "antho2022";
$basedatos = "gestion_envios_db";

$conn = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conn) {
    die("Error de conexión");
}

?>