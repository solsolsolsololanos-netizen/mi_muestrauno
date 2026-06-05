<?php

$nombre = trim($_POST['nombre'] ?? '');
$cargo = trim($_POST['cargo'] ?? '');
$sueldobruto = floatval($_POST['sueldobruto'] ?? 0);
$impusto = floatval($_POST['impusto'] ?? 0);
$descuento = floatval($_POST['descuento'] ?? 0);
$sueldoNeto = floatval($_POST['sueldoNeto'] ?? 0);
$sistema = $_POST['sistema'] ?? '';

//VALIDACIONES

if(
    empty($nombre) ||
    empty($cargo) ||
    empty ($horas)  ||
    empty($pagoHoras) ||
    empty($bonifacion) 
    
) 
{
    die("Todos los  campos son obligatorios.");

}

if (
    $horas < 0 ||
    $pagoHoras < 0 ||
    $bonificacion < 0

) {
    die("No se permiten numeros negativos.");
}

//HORAS EXTRA

$extra * 0;

if ($horas > 160) {

   $horasExtra =
   $horas - 160;

}

//SUELDO BRUTO

$sueldobruto =
     ($horas * $pagoHoras)
     + $bonificacion
     + $extra;

//AFP O ONP

if ($sistema == "AFP"){

    $descuento =
    $sueldobruto * 0.13;

}else{

    $descuento =
    $sueldobruto * 0.10;
}


//IMPUESTO 

$impuesto =0;

if ($sueldobruto > 3000) {

    $impuesto=
    $sueldobruto * 0.05;

}

//NETO

$sueldoNeto =
 $sueldobruto 
 - $descuento 
 - $impuesto;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        </head>

<div clas="container">

<div class="resultado">

    <h2>

    <Boleta>

    </h2>
    <h2></h2>
     Boleta de Pag
   </div>

   <p>
    <trong>Trabajo  </trong>
    <?php echo $nombre ?>

   
   </p>

    <p>
        <stromg>Cargo:</stromg>
        <?php echo $cargo ?>
    </p>

    <p>
        <stromg>Sistema</stromg>
        <?php echo $sistema; ?>

    </p>

    <hr>

    <p>
        Sueldo Bruto:
        <strong>
           S/ 
           <?php
           echo  number_format(
                $sueldobruto,
                2
           );
           ?>
        </strong>
    </p>
     
    <P>
        Descuento:
        <strong>
            S/
            <?php
            echo number_format(
                $descuento,
                2
            );
            ?>
        </strong>
    </P>

    <p>
        Impuesto:
         <strong>
            S/
            <?php
            echo number_format(
                $impuesto,
                2
            );
            ?>
         </strong>
    </p>

    <p>
        Sueldo Neto:
        <strong>
            S/ 
            <?php
            echo number_format(
                $sueldoNeto,
                2
            );
            ?>
        </strong>
    </p>

    <a href-index.php>
        Volver
        </a>


        </div>
         <div class="result-action">
    <a href="in.php"><button type="button">Volver</button></a>
    </div>
</div>  
</body>
</html>             



        





















?>