<?php
	$destinatario = 'marketing-advertising@hotmail.com';
	// esto es al correo  al que se enviara el mensaje
	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$edad = $_POST['edad'];

	$header = "Enviado desde Marketing & Advertising Web";
	$mensaje = $mensaje . "\n\n\n\n\nDatos de Contacto:" . "\n\nNombre: " . $nombre . "\nEdad: " . $edad . "\nEmail: " . $email . "\nTelefono: " . $telefono;

	mail($destinatario, $asunto, $mensaje, $header);
	echo "<script>alert('Mensaje enviado correctamente!')</script>";
	echo "<script>setTimeout(\"location.href='http://www.marketingadvertisingco.com'\",1000)</script>";

?>
