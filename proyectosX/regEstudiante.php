<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>

<h2>Registro de Estudiante</h2>
<!--
Crear un formulario que registre:

Nombre
Edad
Carrera

y mostrar la información enviada.
-->
<form method="POST">

Nombre:
<br>
<input type="text" name="nombre">

<br><br>

Edad:
<br>
<input type="number" name="edad">

<br><br>

Carrera:
<br>
<input type="text" name="carrera">

<br><br>

<button type="submit">
Guardar
</button>

</form>

<?php

if($_POST){

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$carrera = $_POST["carrera"];

echo "<h3>Datos Registrados</h3>";

echo "Nombre: " . $nombre;
echo "<br>";

echo "Edad: " . $edad;
echo "<br>";

echo "Carrera: " . $carrera;

}

?>

</body>
</html>