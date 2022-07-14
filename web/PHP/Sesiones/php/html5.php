<?php

session_start();

// si existe una session iniciada
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
	echo "Esta pagina es solo para usuarios registrados.<br>";
	echo "<br><a href='../index.html'>Login</a>";
	// redirect to index.html using header() function
	// header('Location: ../index.html');


	exit;
}

// check el tiepo de la session
$now = time();

if ($now > $_SESSION['expire']) {
	session_destroy();

	echo "Su sesion a terminado,
<a href='../index.html'>Necesita Hacer Login</a>";
	exit;
}
?>
<!-- en caso que la session este sin problemas -->
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Progra IV</title>
</head>

<body>
	<h1>Plantillas HTML5</h1>
	<p>Sistema de plantillas HTML5</p>
	<table class="plantillashtml5">

		<tr>
			<th>&nbsp &nbsp Nombre Plantilla &nbsp &nbsp</th>
			<th> &nbsp &nbsp Categoría &nbsp &nbsp</th>
			<th> &nbsp &nbsp Visualizar &nbsp &nbsp</th>
		</tr>


		<?php
		$mysqli = new mysqli("localhost", "root", "root", "sesiones");
		if (mysqli_connect_errno()) {
			echo "Este sitio esta presentando problemas";
		}
		$mysqli->set_charset("utf8");
		$query = "SELECT * FROM plantillashtml5";
		$consulta1 = $mysqli->query($query);
		while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
			echo "<tr>
						<td>" . $fila['Nombre'] . "</td>
						<td>" . $fila['Categoria'] . "</td>
						<td><a href=" . $fila['Enlace'] . " target='_blank' class='btn btn-primary' role='button'>Visualizar</a></td>
				</tr>";
			//		<td><a href='actualizar.php?nombre=".$fila['Nombre']."'>Actualizar</a></td>
			//		<td><a href='eliminar.php?nombre=".$fila['Nombre']."'>Eliminar</a></td>

		}
		?>

	</table>





	<br><br>
	<a href=logout.php>Cerrar Sesion</a>
</body>

</html>