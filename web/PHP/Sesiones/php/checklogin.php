<?php
session_start();
?>

<?php

$host_db = "progra4db.cmzh0m6dfbbz.us-east-1.rds.amazonaws.com"; // puerto de enlace de la base de datos aws
$user_db = "root"; // usuario de la base de datos aws
$pass_db = "lain*-330*"; // contraseña de la base de datos aws
$db_name = "sesiones"; // nombre del schema de la base de datos aws
$tbl_name = "Usuario"; // nombre de la tabla de la base de datos aws

// establece la conexión con la base de datos
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
  die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
// encripta la contraseña 
$password = md5($_POST['password']);

// realiza la consulta a la base de datos
$sql = "SELECT * FROM $tbl_name WHERE Username = '$username'";

// ejecuta la consulta y almacena el resultado
$result = $conexion->query($sql);


if ($result->num_rows > 0) {
}
$row = $result->fetch_array(MYSQLI_ASSOC);

// si las credenciales son correctas
if ($password = $row['password']) {

  // inicia la sesión del usuario
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  $_SESSION['start'] = time();
  // limita el tiempo de la sesión
  $_SESSION['expire'] = $_SESSION['start'] + (15 * 60);

  echo "Bienvenido al sistema de plantillas de Progra IV" . $_SESSION['username'];
  echo "<h3>Opciones</h3>";
  echo "<br><br><a href=html5.php>HTML5</a><br>";
  echo "<br><br><a href=joomla.php>Joomla</a><br>";
  echo "<br><br><a href=drupal.php>Drupal</a><br>";
  echo "<br><br><a href=wordpress.php>Wordpress</a><br>";
  echo "<br><br><a href=prestashop.php>PrestaShop</a><br>";

  // si las credenciales no son correctas
} else {
  echo "Username o Password estan incorrectos.";

  echo "<br><a href='../index.html'>Volver a Intentarlo</a>";
}
mysqli_close($conexion);
?>