<?php
$destino = "4life788@protonmail.com"
$nombre = $_POST ["nombre"]
$apellido = $_POST ["apellido"]
$correo = $_POST ["correo"]
$cometarios = $_POST ["comentarios"]

$contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $correo . "\nComentarios: " . $cometarios;

mail($destino,"Formulario de Contacto",$contenido);
header("location:gracias.html");
?>