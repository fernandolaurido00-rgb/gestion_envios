<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Envío</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="container">

<h1>Nuevo Envío</h1>

<form action="guardar.php" method="POST">

<input type="text" name="destinatario" placeholder="Destinatario" required>

<input type="text" name="direccion" placeholder="Dirección" required>

<textarea name="descripcion" placeholder="Descripción"></textarea>

<button type="submit">Guardar</button>

</form>

</div>

</body>
</html>