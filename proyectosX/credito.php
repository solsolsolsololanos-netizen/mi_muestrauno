<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación de crédito</title>
</head>
<body>
    <h1>Evaluación Bancaria</h1>

<form method="POST">

Nombre:
<br>
<input type="text"
name="nombre" required>

<br><br>

Ingreso mensual:
<br>
<input type="number"
name="ingreso" required>

<br><br>

Antigüedad laboral:
<br>
<input type="number"
name="antiguedad" required>

<br><br>

<button>
Evaluar
</button>

</form>

<hr>

<?php

if($_POST){

$nombre =
$_POST["nombre"];

$ingreso =
$_POST["ingreso"];

$antiguedad =
$_POST["antiguedad"];

echo "<h2>Resultado</h2>";

echo "Cliente: "
. $nombre;

echo "<br>";

if(
$ingreso > 2500
&&
$antiguedad > 2
){

echo
"<h3>Crédito Aprobado</h3>";

}else{

echo
"<h3>Crédito Rechazado</h3>";

}

}

?>

</body>
</html>