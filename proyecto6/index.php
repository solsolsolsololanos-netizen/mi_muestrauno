<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla de Sueldo</title>
    <!-- Conexión al archivo CSS -->
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="ground-cat" aria-hidden="true"></div>

<div class="contenedor">

    <h1>
        Plantilla de Sueldo
    </h1>

<form 
    action="procesar.php"
    method="POST">

    <label>
        Nombre
    </label>

    <input
        type="text"
        name="nombre"
        required>

    <label>
        Cargo
    </label>

    <input
        type="text"
        name="cargo"
        required>

    <label>
        Horas Trabajadas
    </label>

    <input
        type="number"
        name="horas"
        required>
    
    <label>
        Pago por Horas
    </label>

    <input
        type="number"
        step="0.01"
        name="pagoHoras"
        required>
     
    <label>
        Bonificación
    </label>

    <input
        type="number"
        step="0.01"
        name="bonificacion"
        required>
    
    <label>
        Sistema Pensionario
    </label>

    <div class="radio-group">
        <label class="radio-option">
            <input
                type="radio"
                name="sistema"
                value="AFP"
                required>
            AFP
        </label>

        <label class="radio-option">
            <input 
                type="radio"
                name="sistema"
                value="ONP">
            ONP
        </label>
    </div>

</div>
    
    <button type="submit">
        Calcular sueldo
    </button>

</form>
    
</div>

</body>
</html>
