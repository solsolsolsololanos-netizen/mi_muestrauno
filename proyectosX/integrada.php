<!DOCTYPE html>
<html>
<head>
<title>Evaluación</title>
</head>
<body>
<!--Problema:
Crear un sistema que:

Reciba nombre y nota mediante formulario
Use una función
Determine si aprobó o desaprobó
Muestre resultado en HTML -->
<h2>Registro de Nota</h2>

<form method="POST">

Nombre:
<br>
<input type="text" name="nombre">

<br><br>

Nota:
<br>
<input type="number" name="nota">

<br><br>

<button>
Evaluar
</button>

</form>

<?php

function estado($nota){

if($nota >= 11){
return "Aprobado";
}else{
return "Desaprobado";
}

}

if($_POST){

$nombre = $_POST["nombre"];
$nota = $_POST["nota"];

echo "<h3>Resultado</h3>";

echo "Alumno: " . $nombre;

echo "<br>";

echo "Estado: " . estado($nota);

}

?>

</body>
</html>