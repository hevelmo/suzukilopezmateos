<?php
	$nombre = $_POST['name'];
	$movil = $_POST['tel'];
	$mail = $_POST['email'];

// El mensaje
$from = $mail;

$mensaje = "Asunto: Agendar prueba de manejo de Nuevo S-Cross\n\n";
	$mensaje .= "Nombre : " .$nombre. "\n";
	$mensaje .= "N�mero Celular: " .$movil. "\n";
	$mensaje .= "Correo Electr�nico: " .$mail. "\n";


$header = "From:".$nombre."<" . $from. ">\r\n" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=iso-8859-1" ; //optional headerfields

// En caso de que cualquier l�nea tenga m�s de 70 caracteres, habr�a
// que usar wordwrap()
$mensaje = wordwrap($mensaje, 70);
//$correos = $mail."tianar1@hotmail.com";

// Enviar
mail("webmaster@medigraf.com.mx, mercadotecnia@suzuki-lm.com.mx", 'Agendar prueba de manejo de Nuevo S-Cross', $mensaje, $header) or die("�Error!");
header ("location: index.html");
?>
