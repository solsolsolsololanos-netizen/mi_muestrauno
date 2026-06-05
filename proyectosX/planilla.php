<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilla salarial</title>
</head>
<body>
    
<h1>Sistema de Planilla</h1>

<form method="POST">

Nombre:
<br>
<input type="text"
name="nombre" required>

<br><br>

Sueldo Base:
<br>
<input type="number"
name="sueldo" required>

<br><br>

Horas Extras:
<br>
<input type="number"
name="horas" required>

<br><br>

<button>
Calcular Sueldo
</button>

</form>

<hr>

<?php

function calcularAFP($total){

return $total * 0.08;

}

if($_POST){

$nombre =
$_POST["nombre"];

$sueldo =
$_POST["sueldo"];

$horas =
$_POST["horas"];

$pagoExtra =
$horas * 25;

$total =
$sueldo + $pagoExtra;

$afp =
calcularAFP($total);

$neto =
$total - $afp;

echo "<h2>Boleta Salarial</h2>";

echo "Trabajador: "
. $nombre;

echo "<br>";

echo "Sueldo Base: S/"
. $sueldo;

echo "<br>";

echo "Pago Horas Extra: S/"
. $pagoExtra;

echo "<br>";

echo "Descuento AFP: S/"
. $afp;

echo "<br>";

echo "<h3>Sueldo Neto: S/"
. $neto .
"</h3>";

}

?>

</body>
</html>