<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "Email: " . $email . ",\r\n";
$mensaje = "Telefono:" . $telefono . ",\r\n";
$mensaje = "Asunto: " . $asunto . ",\r\n";
$mensaje = "Mensaje: " . $_POST['mensaje'] . ",\r\n";

$para = 'dinoa.reyes@gmail.com';
$asunto = 'mensaje oswaldC';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:exito.html');
?>