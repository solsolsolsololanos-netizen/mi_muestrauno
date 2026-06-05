<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
</head>
<body>
    
<h1>Sistema de Inventario</h1>

<form method="POST">

    <label>Producto:</label>
    <br>
    <input type="text" name="producto" required>

    <br><br>

    <label>Stock Actual:</label>
    <br>
    <input type="number" name="stock" required>

    <br><br>

    <label>Unidades Vendidas:</label>
    <br>
    <input type="number" name="vendido" required>

    <br><br>

    <button type="submit">
        Verificar Stock
    </button>

</form>

<hr>

<?php

if($_POST){

    $producto = $_POST["producto"];
    $stock = $_POST["stock"];
    $vendido = $_POST["vendido"];

    echo "<h2>Resultado</h2>";

    echo "Producto: " . $producto;
    echo "<br>";

    echo "Stock actual: " . $stock;
    echo "<br>";

    echo "Cantidad vendida: " . $vendido;
    echo "<br><br>";

    if($vendido > $stock){

        echo "<h3>No hay suficiente stock</h3>";

    }else{

        $restante = $stock - $vendido;

        echo "<h3>Venta procesada</h3>";

        echo "Stock restante: " . $restante;
    }

}

?>








</body>
</html>