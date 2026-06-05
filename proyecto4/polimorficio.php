<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polimorfismo</title>
</head>
<body>


<h2>Ejemplo de polimorfismo</h2>
  <?php

class Animal {

    public function sonido(){
        return "Hace un sonido";
    }
}

class Perro extends Animal{

    public function sonido(){
    return "Guau Guau"; 
    }   
}

class Gato extends Animal{

    public function sonido(){
    return "Miau"; 
    }   
}

class Leon extends Animal{

    public function sonido(){
    return "Roar Roar";
    }
}

$perro =  new Perro();
$gato = new Gato();
$leon = new Leon();
    
echo "Perro: " . $perro -> sonido();
echo "<br>";

echo "Gato: " . $gato -> sonido();
echo "<br>";

echo "Leon: " . $leon -> sonido();



 ?>



</body>
</html>