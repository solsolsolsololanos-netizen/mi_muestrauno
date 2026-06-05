<!DOCTYPE html>
<html>
<head>
    <title>Mayor de Edad</title>
</head>
<body>

<?php
//Determinar si una persona es mayor de edad.
$edad = 18;

echo "Edad: " . $edad;
echo "<br>";

echo "¿Es mayor de edad?: ";

echo $edad >= 18;
echo "<br>";
echo ($edad >= 18) ? "Sí" : "No"; //operador condicional ternario


?>

</body>
</html>