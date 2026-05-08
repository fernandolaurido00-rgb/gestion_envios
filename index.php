<?php
require_once("conexion.php");

$sql = "SELECT * FROM envios";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestión de Envíos local</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<div class="container">

<h1>Gestión de Envíos</h1>

<a class="boton" href="crear.php">Nuevo Envío</a>

<table>

<tr>
    <th>ID</th>
    <th>Destinatario</th>
    <th>Dirección</th>
    <th>Descripción</th>
    <th>Acciones</th>
</tr>

<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['destinatario']; ?></td>
<td><?php echo $fila['direccion']; ?></td>
<td><?php echo $fila['descripcion']; ?></td>

<td>
<a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>

|

<a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>