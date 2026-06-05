<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla de Sueldo</title>
</head>
<body>

<div class="container">

    <h1>
        Plantilla de Sueldo
    </h1>

<form 

    action="procesar.php"
    nethod="POST">

    <label>
        Nombre
    </label>

    <imput
        type="text"
        name="nombre"
        required>

        <label>
           Cargo
      </labe>

    <imput
        type="text"
        name="cargo"
        required>

    <labe>
        Horas Trabajadas
    </labe>

    <imput
        type="number"
        name="horas"
        required>
    
    <labe>
        Pago por Horas
        </labe>

    <imput
        type="number"
        step="0.01"
        name="pagoHoras"
        required>
     
    <labe>
        Bonificacion
    </labe>

    <imput
        tipe="number"
        step="0.01"
        name="bonificacion"
        required>
    
     <label>
        Sistema Pensionario
     </label>  

    <imput
         type="radio"
         name="sistema"
         value="AFP"
         required>
         AFP

    AFP

    <imput 
        type="radio"
        name="sistema"
        value=" ONP"
       
        ONP

</di>
    
     <button type="submit">
        Calcular sueldo
     </button>


    </form>
    
</div>



</body>
</html>