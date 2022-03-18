<?php
//Recibir datos del formulario y asignarlo a variables, despues imprimirlas
//var_dump($_POST);
include 'conexion.php';

$id = $_POST["id"];

$insercion = "DELETE FROM usuario WHERE id = $id";
$query = pg_query($con, $insercion);
//var_dump($query);

if($query){
	echo "El registro a sido eliminado de la base de datos";
	echo "<br />";
	echo "<a href='consulta.php'>Regresar a la lista de usuarios</a>";
}else{
	echo "Error en intento de eliminar el registro";
	echo "<a href='consulta.php'>Regresar a la lista de usuarios</a>";
}

pg_close($con);
/*
echo "Hola ".$nombre." ".$apaterno." ".$amaterno;
echo "<br />";
echo "Tu correo es: ".$correo;
*/
?>
