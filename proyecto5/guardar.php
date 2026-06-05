
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar</title>
</head>
<body>
    <?php

$servidor = "localhost";
$bd = "colegio";
$usuario = "root";
$password = "";

try {

    $conexion = new PDO(
        "mysql:host-$servidor;dbname=$bd",
        $usuario,
        $password

    );

    $nombre = $_POST['nombre'];
    $carrera = $_POST[ 'carrera'];

    $sql = "INSERT INTO estudiantes
           (nombre, carrera)
            VALUES (?, ?) ";
    
  
    $stmt = $conexion->prepare($sql);
    
    $stmt->execute([
        $nombre,
        $carrera
    ]);

    echo "Registro guardado corrrectamente";

} 

catch(PDOException $e) {

  echo "Erro: ".
     $e->getMessage();

}


?>
</body>
</html>
