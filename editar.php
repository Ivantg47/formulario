<?php
//Recibir datos del formulario y asignarlo a variables, despues imprimirlas
//var_dump($_POST);
include 'conexion.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apaterno = $_POST["apaterno"];
$amaterno = $_POST["amaterno"];
$correo = $_POST["correo"];

$insercion = "UPDATE usuario SET nombre = '$nombre', apaterno = '$apaterno', amaterno = '$amaterno', correo = '$correo' WHERE id = $id";
$query = pg_query($con, $insercion);
//var_dump($query);

if($query){
	echo "El registro a sido actualizado en la base de datos";
	echo "<br />";
	echo "<a href='consulta.php'>Regresar a la lista de usuarios</a>";
}else{
	echo "Error en intento de actualizar registro";
	echo "<a href='consulta.php'>Regresar a la lista de usuarios</a>";
}

pg_close($con);
/*
echo "Hola ".$nombre." ".$apaterno." ".$amaterno;
echo "<br />";
echo "Tu correo es: ".$correo;
*/
?>
