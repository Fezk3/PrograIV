<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="index.php" method="POST">
		<label>Email</label><input type="email" name="email"><br><br>
		<label>Clave</label><input type="password" name="clave"><br><br>
		<input type="submit" value="Ingresar">
	</form>
	<?php
		if(isset($_POST['email']) && isset($_POST['clave'])){
			require_once "php/connect.php";
			require_once "procesos/login.php";
		}
	?>
</body>
</html>