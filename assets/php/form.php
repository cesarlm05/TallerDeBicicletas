<?php

$destino = "ojo.clinico.bike@gmail.com";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje_body = $_POST['textbody'];
$asunto = "Mensaje desde el sitio web de Ojo Clinico Bike";

$header = "Mensaje desde el sitio web de Ojo Clinico Bike contacto en localhost";
$mensaje = "\n Nombre: " . $nombre . "\n Apellido: " . $apellido . "\n" . "Email: " . $email . "\n" . "Mensaje :" . $mensaje_body;
mail($destino, $asunto, $mensaje, $header);
header('Location: index.html');