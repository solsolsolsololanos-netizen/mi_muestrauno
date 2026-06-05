<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: in.php');
    exit;
}

$nombre = trim($_POST['nombre'] ?? '');
$cargo = trim($_POST['cargo'] ?? '');
$horas = floatval($_POST['horas'] ?? 0);
$pagoHoras = floatval($_POST['pagoHoras'] ?? 0);
$bonificacion = floatval($_POST['bonificacion'] ?? 0);
$sistema = $_POST['sistema'] ?? '';

if ($nombre === '' || $cargo === '' || $horas <= 0 || $pagoHoras <= 0 || $sistema === '') {
    header('Location: in.php');
    exit;
}

$salarioBruto = ($horas * $pagoHoras) + $bonificacion;
if ($sistema === 'AFP') {
    $descuento = $salarioBruto * 0.13;
} else {
    $descuento = $salarioBruto * 0.10;
}
$salarioNeto = $salarioBruto - $descuento;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Sueldo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="ground-cat" aria-hidden="true"></div>
<div class="contenedor">
    <h1>Resultado de Sueldo</h1>
    <div class="result-box">
        <p><strong>Nombre:
        </strong> <?= htmlspecialchars($nombre) ?></p>
        <p><strong>Cargo:</strong> <?= htmlspecialchars($cargo) ?></p>
        <p><strong>Horas Trabajadas:</strong> <?= number_format($horas, 2) ?></p>
        <p><strong>Pago por Hora:</strong> S/ <?= number_format($pagoHoras, 2) ?></p>
        <p><strong>Bonificación:</strong> S/ <?= number_format($bonificacion, 2) ?></p>
        <p><strong>Sistema de Pensiones:</strong> <?= htmlspecialchars($sistema) ?></p>
        <p><strong>Salario Bruto:</strong> S/ <?= number_format($salarioBruto, 2) ?></p>
        <p><strong>Descuento (<?= htmlspecialchars($sistema) ?>):</strong> S/ <?= number_format($descuento, 2) ?></p>
        <p><strong>Salario Neto:</strong> S/ <?= number_format($salarioNeto, 2) ?></p>
    </div>
    <div class="result-action">
        <a href="in.php"><button type="button">Volver</button></a>
    </div>
</div>
</body>
</html>