<?php
//Recibir datos del formulario y asignarlo a variables, despues imprimirlas
//var_dump($_POST);
include 'conexion.php';

$nombre = $_POST["nombre"];
$apaterno = $_POST["apaterno"];
$amaterno = $_POST["amaterno"];
$correo = $_POST["correo"];

$insercion = "INSERT INTO usuario (nombre, apaterno, amaterno, correo) VALUES ('$nombre', '$apaterno', '$amaterno', '$correo')";
$query = pg_query($con, $insercion);
//var_dump($query);

if($query){
	echo "El registro a sido guardado en la base de datos";
	echo "<br />";
	echo "<a href='formulario.html'>Regresar al formulario</a>";
}else{
	echo "Error en intento de registro";
	echo "<a href='formulario.html'>Regresar al formulario</a>";
}

pg_close($con);
/*
echo "Hola ".$nombre." ".$apaterno." ".$amaterno;
echo "<br />";
echo "Tu correo es: ".$correo;
*/
?>
