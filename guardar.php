<?php

include("conexion.php");

$destinatario = $_POST['destinatario'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO envios(destinatario, direccion, descripcion)
VALUES('$destinatario','$direccion','$descripcion')";

mysqli_query($conn, $sql);

header("Location:index.php");

?>