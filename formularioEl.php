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
		<p>El siguiente registro sera eliminado:</p>
		<table>
			<tr>
				<!--<th>Id</th>-->
				<th>Nombre</th>
				<th>Apellido paterno</th>
				<th>Apellido materno</th>
				<th>Correo electronico</th>
			</tr>

			<tr>
				<!--<td><?php echo $resultado['id'];?></td>-->
				<td><?= $resultado['nombre'];?></td>
				<td><?= $resultado['apaterno'];?></td>
				<td><?= $resultado['amaterno'];?></td>
				<td><?= $resultado['correo'];?></td>
			</tr>
		</table>

		<form name="eliminar" action="borrar.php" method="post">
			<input type="hidden" name="id" value="<?= $resultado['id'];?>">
			<input type="submit" name="Eliminar">
		</form>
	</body>
</html>