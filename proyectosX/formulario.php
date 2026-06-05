<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <!--Crear un formulario que reciba un nombre y lo muestre en pantalla. -->
</head>
<body>

<h2>Ingrese su Nombre</h2>

<form method="POST">

<input type="text" name="nombre"
placeholder="Ingrese nombre">

<button type="submit">
Enviar
</button>

</form>

<?php

if($_POST){

$nombre = $_POST["nombre"];

echo "<h3>Hola " . $nombre . "</h3>";

}

?>

</body>
</html>