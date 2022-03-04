<?php
//Consultar los registros y mostrar los en una tabla
	include 'conexion.php';
	$query = "SELECT id, nombre, apaterno, amaterno, correo FROM usuario";
	$ejecucion = pg_query($con, $query);
//	var_dump($ejecucion);
?>
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido paterno</th>
		<th>Apellido materno</th>
		<th>Correo electronico</th>
		<th>Edición</th>
	</tr>
	<?php
/*		while($row = pg_fetch_row($ejecucion)){
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "</tr>";
		}
*/
		while($row = pg_fetch_assoc($ejecucion)){
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['apaterno']."</td>";
			echo "<td>".$row['amaterno']."</td>";
			echo "<td>".$row['correo']."</td>";
			echo "<td><a href='formularioEd.php?id=".$row['id']."'>Editar</a></td>";
			echo "</tr>";
		}
	?>
</table>
