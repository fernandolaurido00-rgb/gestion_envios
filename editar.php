<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM envios WHERE id=$id";
$resultado = mysqli_query($conn, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Envío</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="container">

<h1>Editar Envío</h1>

<form action="actualizar.php" method="POST">

<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

<input type="text" name="destinatario"
value="<?php echo $fila['destinatario']; ?>" required>

<input type="text" name="direccion"
value="<?php echo $fila['direccion']; ?>" required>

<textarea name="descripcion"><?php echo $fila['descripcion']; ?></textarea>

<button type="submit">Actualizar</button>

</form>

</div>

</body>
</html>