<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Buscador</title>
</head>
<body>
	<form action="buscador.php" method="POST" autocomplete="off">
		<input type="text" name="palabra" placeholder="¿Qué esta buscando?">
		<input type="submit" value="Buscar">
	</form>
	<?php
		if(isset($_POST['palabra'])){
			require_once "php/connect.php";
			require_once "procesos/buscar.php";
		}
	?>
</body>
</html>