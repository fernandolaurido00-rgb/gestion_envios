<?php

$servidor = "mysql-tuusuario.alwaysdata.net";
$usuario = "tuusuario";
$password = "tu_password";
$basedatos = "tuusuario_envios_db";

$conn = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conn) {
    die("Error de conexión");
}

?>