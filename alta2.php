<?php
//Recibir datos del formulario y asignarlo a variables, despues imprimirlas
//var_dump($_GET);
$nombre = $_GET["nombre"];
$apaterno = $_GET["apaterno"];
$amaterno = $_GET["amaterno"];
$correo = $_GET["correo"];

echo "Hola ".$nombre." ".$apaterno." ".$amaterno;
echo "<br />";
echo "Tu correo es: ".$correo;
?>