<?php
//Recibir datos del formulario y asignarlo a variables, despues imprimirlas
//var_dump($_POST);
$nombre = $_POST["nombre"];
$apaterno = $_POST["apaterno"];
$amaterno = $_POST["amaterno"];
$correo = $_POST["correo"];

echo "Hola ".$nombre." ".$apaterno." ".$amaterno;
echo "<br />";
echo "Tu correo es: ".$correo;
?>