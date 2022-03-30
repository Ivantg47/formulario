<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Bienvenido</title>
</head>
<body>
	<?php
		if (isset($_GET['error']) && $_GET['error'] == 1) {
			echo "<p>Error al ingresar usuario y contraseña, favor de verificar</p>";
		} elseif (isset($_GET['error']) && $_GET['error'] == 2) {
			echo "<p>No a ingresado el usuario y contraseña para autentificarse</p>";
		}
	?>
	<p>Ingrese su nombre de usuario y contraseña:</p>
	<form name="login" action="login.php" method="post">
		<label form="usuario">Nombre de usuario:</label>
		<input type="text" id="usuario" name="usuario">
		<br />
		<label form="contrasena">Contraseña:</label>
		<input type="password" id="contrasena" name="contrasena">
		<br />
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>