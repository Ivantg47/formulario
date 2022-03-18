<?php
//Recibir datos del formulario y asignarlo a variables, despues imprimirlas
//var_dump($_POST);
include 'conexion.php';

$nombre = strip_tags($_POST["nombre"]);
$apaterno = strip_tags($_POST["apaterno"]);
$amaterno = strip_tags($_POST["amaterno"]);
$correo = strip_tags($_POST["correo"]);

//validacion
if (preg_match('/[a-z áéíóúñü]{2,50}/ig', $nombre)) {
	echo "Es un nombre valido";
}else{
	header('Location: formulario.php?error=1');
}
if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
	echo "es un correo valido";
}else{
	//echo "no es un correo valido";
	header('Location: formulario.php?error=1');
}

//incercion en base de datos
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
