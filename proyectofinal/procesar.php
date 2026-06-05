<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$codigo = trim($_POST['codigo'] ?? '');
$nombre = trim($_POST['nombre'] ?? '');
$carrera = trim($_POST['carrera'] ?? '');
$ciclo = trim($_POST['ciclo'] ?? '');
$turno = trim($_POST['turno'] ?? '');
$cantidadCursos = (int) ($_POST['cantidadCursos'] ?? 0);

$error = '';
if ($codigo === '' || $nombre === '' || $carrera === '' || $ciclo === '' || $turno === '' || $cantidadCursos < 1) {
    $error = 'Complete todos los campos antes de enviar el formulario con la cantidad de cursos válida.';
}

$costPerCourse = 150;
$subtotal = $cantidadCursos * $costPerCourse;
$discount = 0;
$surcharge = 0;

if ($turno === 'Noche' && $cantidadCursos > 5) {
    $discount = round($subtotal * 0.10, 2);
} elseif ($turno !== 'Noche') {
    $surcharge = round($subtotal * 0.05, 2);
}

$total = round($subtotal - $discount + $surcharge, 2);

function formatMoney($value) {
    return number_format($value, 2, '.', ',');
}

?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de solicitud</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <div class="page-shell">
        <header class="app-header">
            <div class="brand">
                <span class="brand-mark">M</span>
                <div>
                    <strong>Matrícula</strong>
                    <small>Resumen</small>
                </div>
            </div>
            <a class="button secondary" href="index.php">Regresar</a>
        </header>

        <main class="layout single-panel">
            <section class="panel result-panel">
                <h1>Solicitud procesada</h1>

                <?php if ($error): ?>
                    <div class="alert"><?php echo htmlspecialchars($error); ?></div>
                <?php else: ?>
                    <section class="payment-summary">
                        <div>
                            <span>Elegiste</span>
                            <strong><?php echo htmlspecialchars($carrera); ?></strong>
                        </div>
                        <div>
                            <span>Cursos</span>
                            <strong><?php echo htmlspecialchars($cantidadCursos); ?></strong>
                        </div>
                        <div>
                            <span>Turno</span>
                            <strong><?php echo htmlspecialchars($turno); ?></strong>
                        </div>
                        <div>
                            <span>Total</span>
                            <strong>S/ <?php echo formatMoney($total); ?></strong>
                        </div>
                    </section>
                    <dl class="data-list">
                        <div>
                            <dt>Código de estudiante</dt>
                            <dd><?php echo htmlspecialchars($codigo); ?></dd>
                        </div>
                        <div>
                            <dt>Nombre completo</dt>
                            <dd><?php echo htmlspecialchars($nombre); ?></dd>
                        </div>
                        <div>
                            <dt>Carrera</dt>
                            <dd><?php echo htmlspecialchars($carrera); ?></dd>
                        </div>
                        <div>
                            <dt>Ciclo</dt>
                            <dd><?php echo htmlspecialchars($ciclo); ?></dd>
                        </div>
                        <div>
                            <dt>Turno</dt>
                            <dd><?php echo htmlspecialchars($turno); ?></dd>
                        </div>
                        <div>
                            <dt>Cantidad de cursos</dt>
                            <dd><?php echo htmlspecialchars($cantidadCursos); ?></dd>
                        </div>
                        <div>
                            <dt>Subtotal</dt>
                            <dd>S/ <?php echo formatMoney($subtotal); ?></dd>
                        </div>
                        <div>
                            <dt>Descuento</dt>
                            <dd>S/ <?php echo formatMoney($discount); ?></dd>
                        </div>
                        <div>
                            <dt>Recargo</dt>
                            <dd>S/ <?php echo formatMoney($surcharge); ?></dd>
                        </div>
                        <div>
                            <dt>Total a pagar</dt>
                            <dd><strong>S/ <?php echo formatMoney($total); ?></strong></dd>
                        </div>
                    </dl>
                    <div class="form-actions">
                        <a class="button" href="index.php">Enviar otro formulario</a>
                        <a class="button secondary" href="vista.html">Volver a vista</a>
                    </div>
                <?php endif; ?>
            </section>
        </main>
    </div>
</body>
</html>
