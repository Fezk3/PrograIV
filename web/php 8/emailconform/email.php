<?php

if(isset($_GET['nombre'])){

    $nombre = $_GET['nombre'];

}

if(isset($_GET['email'])){

    $emal = $_GET['email'];

}

if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];
}

$to = 'hola@gmail.com';
$subject = 'Contacto desde la web';
$headers= "From: $nombre <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

mail($to, $subject, $mensaje, $headers);

?>