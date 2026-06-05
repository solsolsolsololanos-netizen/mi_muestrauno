<?php
//Crear una función que indique si un estudiante aprobó.
function estado($nota){

if($nota >= 11){
return "Aprobado";
}
else{
return "Desaprobado";
}

}

echo estado(15);

?>