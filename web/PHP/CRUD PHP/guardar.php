<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Guardar datos</title>
</head>
<body>
	<form action="./procesos/guardarDatos.php" method="POST">
		<label>Nombre</label><input type="text" name="nombre"><br><br>
		<label>Apellido</label><input type="text" name="apellido"><br><br>
		<label>Email</label><input type="email" name="email"><br><br>
		<label>Clave</label><input type="password" name="clave"><br><br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>