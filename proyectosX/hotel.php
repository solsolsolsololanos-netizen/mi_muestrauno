<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva hotel</title>
</head>
<body>
<h1>Reserva de Hotel</h1>

<form method="POST">

Cliente:
<br>
<input type="text"
name="cliente" required>

<br><br>

Habitación:
<br>

<select name="habitacion">

<option value="Simple">
Simple
</option>

<option value="Doble">
Doble
</option>

<option value="Suite">
Suite
</option>

</select>

<br><br>

Noches:
<br>
<input type="number"
name="noches"
required>

<br><br>

<button>
Calcular
</button>

</form>

<hr>

<?php

if($_POST){

$cliente =
$_POST["cliente"];

$habitacion =
$_POST["habitacion"];

$noches =
$_POST["noches"];

switch($habitacion){

case "Simple":
$precio = 80;
break;

case "Doble":
$precio = 120;
break;

case "Suite":
$precio = 250;
break;

}

$total =
$precio * $noches;

echo "<h2>Detalle Reserva</h2>";

echo "Cliente: "
. $cliente;

echo "<br>";

echo "Habitación: "
. $habitacion;

echo "<br>";

echo "Noches: "
. $noches;

echo "<br>";

echo "Costo por noche: S/"
. $precio;

echo "<br>";

echo "<h3>Total a pagar: S/"
. $total .
"</h3>";

}

?>    



</body>
</html>