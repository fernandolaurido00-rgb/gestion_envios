<?php

include("conexion.php");

$id = $_POST['id'];
$destinatario = $_POST['destinatario'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE envios SET
destinatario='$destinatario',
direccion='$direccion',
descripcion='$descripcion'
WHERE id=$id";

$conn->query($sql);

header("Location:index.php");

?>