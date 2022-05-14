<?php
//==============================================================================
//$name = "Da Duder"; //senders name
//$email = "email@adress.com"; //senders e-mail adress
//$recipient = "PersonWhoGetsIt@emailadress.com"; //recipient
//$mail_body = "The text for the mail..."; //mail body
//$subject = "Subject for reviever"; //subject
//$header = "From: ". $name . " <" . $email . ">\r\n"; //optional headerfields
//
//mail($recipient, $subject, $mail_body, $header); //mail command :)
//==============================================================================

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
//$socio = $_POST['form__option'];
$mensaje = $_POST['textarea'];

// Headers texto/html
$header.= "content-type: text/html\n";

// Cuerpo del mensaje
$mensaje = "Este mensaje fue enviado por: " . $nombre . "\nApellido: " . $apellido . ",\r\n";
$mensaje .=  "Email: " . $email . ",\r\n";
//$mensaje .= "Es socio/a: " . $socio . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());
// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");


$mailto = 'ojo.clinico.bike@gmail.com';
$subject = 'Mensaje desde el sitio web de Ojo Clinico Bike';

// Enviar el mensaje
mail($mailto, $subject, utf8_decode($mensaje), $header);

header('Location:../index.html');

?>