<?php

//verificar sesion
session_start();
if (isset($_SESSION['valida']) && $_SESSION['valida'] == true){

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
			<th>Borrado</th>
		</tr>
		<?php
			while($row = pg_fetch_assoc($ejecucion)){
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['nombre']."</td>";
				echo "<td>".$row['apaterno']."</td>";
				echo "<td>".$row['amaterno']."</td>";
				echo "<td>".$row['correo']."</td>";
				echo "<td><a href='formularioEd.php?id=".$row['id']."'>Editar</a></td>";
				echo "<td><a href='formularioEl.php?id=".$row['id']."'>Borrar</a></td>";
				echo "</tr>";
			}
		?>	
	</table>
	<input type="submit" onclick="location='salir.php'" value="Salir">


<?php }  	else {
		header('Location: index.php?error=1');
	
	}
?>



