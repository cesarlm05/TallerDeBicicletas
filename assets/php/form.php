<?php

$destino = "ojo.clinico.bike@gmail.com";
$asunto = "Mensaje desde el sitio web de Ojo Clinico Bike";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
//$mensaje = $_POST['mensaje'];

$header = "Mensaje desde el sitio web de Ojo Clinico Bike contacto en localhost";

$cuerpomensaje = "\n Nombre: " . $nombre . "\n Apellido: " . $apellido . "\n" . "Email: " . $email /*. "\n" . "Mensaje: " . $mensaje*/;
mail($destino, $asunto, $cuerpomensaje, $header);
header('Location: success.php');

?>