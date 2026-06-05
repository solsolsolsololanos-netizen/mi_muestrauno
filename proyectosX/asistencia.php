<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de asistencia</title>
</head>
<body>
    <h1>Control de Asisyencia</h1>

<form method="POST">

Nombre:
<br>
<input type="text"
name="nombre" required>

<br><br>

Total de clases:
<br>
<input type="number"
name="clases" required>

<br><br>

Asistencias:
<br>
<input type="number"
name="asistencia" required>

<br><br>

<button>
Evaluar
</button>

</form>

<hr>

<?php

function calcularPorcentaje(
$asistencia,
$clases
){

return
($asistencia * 100)
/ $clases;

}

if($_POST){

$nombre =
$_POST["nombre"];

$clases =
$_POST["clases"];

$asistencia =
$_POST["asistencia"];

$porcentaje =
calcularPorcentaje(
$asistencia,
$clases
);

echo "<h2>Resultado</h2>";

echo "Alumno: "
. $nombre;

echo "<br>";

echo "Asistencia: "
. round($porcentaje,2)
. "%";

echo "<br>";

if($porcentaje >= 70){

echo
"<h3>Habilitado</h3>";

}else{

echo
"<h3>Inhabilitado</h3>";

}

}

?>



</body>
</html>