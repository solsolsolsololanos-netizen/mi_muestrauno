<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> POO en PHP</title>
</head>
<body>

<h2>  ejemplo de programacion orientado a objeto   </h2>

<?php

class Estudiante {
    
//atributo
    public $nombre;
    public $carrera;
    
//METODO
    public function mostrarDatos () {
    return "Nombre:" . $this-> nombre .
        "<br> Carrera:" . $this-> carrera;
    } 
    
    
    }
    
    //Crear objecto

   $alumno = new Estudiante();
    
   
   $alumno->nombre = "Alexia";
   $alumno->carrera = "Ingenieria de Sistemas";
    
    echo $alumno -> mostrarDatos();
    
    
    





?>
    
</body>
</html>