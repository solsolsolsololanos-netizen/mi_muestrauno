<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Matrícula</title>
</head>
<body>
    <h1>Matrícula de Estudiantes</h1>

<form method="POST">

Nombre:
<br>
<input type="text"
name="nombre" required>

<br><br>

Carrera:
<br>

<select name="carrera">

<option value="Sistemas">
Sistemas
</option>

<option value="Contabilidad">
Contabilidad
</option>

<option value="Administracion">
Administración
</option>

</select>

<br><br>

Turno:
<br>

<select name="turno">

<option value="Mañana">
Mañana
</option>

<option value="Tarde">
Tarde
</option>

<option value="Noche">
Noche
</option>

</select>

<br><br>

<button>
Calcular Matrícula
</button>

</form>

<hr>

<?php

if($_POST){

$nombre =
$_POST["nombre"];

$carrera =
$_POST["carrera"];

$turno =
$_POST["turno"];

switch($carrera){

case "Sistemas":
$costo = 350;
break;

case "Contabilidad":
$costo = 300;
break;

case "Administracion":
$costo = 280;
break;

}

if($turno == "Noche"){

$costo += 50;

}

echo "<h2>Resumen</h2>";

echo "Alumno: "
. $nombre;

echo "<br>";

echo "Carrera: "
. $carrera;

echo "<br>";

echo "Turno: "
. $turno;

echo "<br>";

echo "<h3>Monto a pagar: S/"
. $costo .
"</h3>";

}

?>
</body>
</html>