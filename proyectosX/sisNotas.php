<!DOCTYPE html>
<html>
<head>
    <title>Notas</title>
    <!-- Crear un formulario que reciba una nota y determine si el alumno aprobó o desaprobó.-->
</head>
<body>

<h2>Evaluar Nota</h2>

<form method="POST">

Ingrese nota:
<input type="number" name="nota">

<button>
Evaluar
</button>

</form>

<?php

if($_POST){

$nota = $_POST["nota"];

if($nota >= 11){

echo "<h3>Aprobado</h3>";

}else{

echo "<h3>Desaprobado</h3>";

}

}

?>

</body>
</html>