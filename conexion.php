<?php 
	//conexion al manejador de base de datos
//echo "Intentar la conexion";
	$con = pg_connect("dbname=formulario user=usuario1 password=hola123 port=5432") or die (pg_last_error());
//var_dump($con);
//echo "hola";
 ?>
