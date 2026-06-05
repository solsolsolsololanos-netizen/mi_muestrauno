<!DOCTYPE html>
<html>
<head>
    <title>Tabla</title>
    <!--Crear un formulario que reciba un número y muestre su tabla de multiplicar-->
</head>
<body>

<h2>Tabla de Multiplicar</h2>

<form method="POST">

Número:
<input type="number" name="numero">

<button>
Generar
</button>

</form>

<?php

if($_POST){

$numero = $_POST["numero"];

for($i=1; $i<=12; $i++){

echo $numero . " x " . $i .
" = " . ($numero * $i);

echo "<br>";

}

}

?>

</body>
</html>