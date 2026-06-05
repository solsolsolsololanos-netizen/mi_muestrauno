<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de venta</title>
</head>
<body>

<h1>Boleta de Venta</h1>

<form method="POST">

    Producto:
    <br>
    <input type="text"
    name="producto" required>

    <br><br>

    Precio:
    <br>
    <input type="number"
    name="precio" required>

    <br><br>

    Cantidad:
    <br>
    <input type="number"
    name="cantidad" required>

    <br><br>

    <button>
        Calcular
    </button>

</form>

<hr>

<?php

if($_POST){

$producto = $_POST["producto"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

$subtotal =
$precio * $cantidad;

if($subtotal > 100){

$descuento =
$subtotal * 0.10;

}else{

$descuento = 0;

}

$total =
$subtotal - $descuento;

echo "<h2>Boleta</h2>";

echo "Producto: "
. $producto;

echo "<br>";

echo "Precio: S/"
. $precio;

echo "<br>";

echo "Cantidad: "
. $cantidad;

echo "<br>";

echo "Subtotal: S/"
. $subtotal;

echo "<br>";

echo "Descuento: S/"
. $descuento;

echo "<br>";

echo "<h3>Total: S/"
. $total . "</h3>";

}

?>
    
</body>
</html>