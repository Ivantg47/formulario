<?php
include 'conexion.php';
$id = $_GET['id'];
$query = "SELECT id, nombre, apaterno, amaterno, correo FROM usuario where id=".$id;
$ejecucion = pg_query($con, $query);
$resultado = pg_fetch_assoc($ejecucion);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<p>Favor de ingresar los siguientes datos:</p>
		<form name="alta" action="editar.php" method="post">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $resultado['nombre'];?>"><br />
			<label for="apaterno">Apellido paterno:</label>
			<input type="text" name="apaterno" value="<?php echo $resultado['apaterno'];?>"><br />
			<label for="amaterno">Apellido materno:</label>
			<input type="text" name="amaterno" value="<?php echo $resultado['amaterno'];?>"><br />
			<label for="email">Correo electrónico:</label>
			<input type="email" name="correo" value="<?php echo $resultado['correo'];?>"><br />
			<input type="submit" name="Submit">
		</form>
	</body>
</html>