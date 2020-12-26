<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$direccion = $_POST['asunto'];
$comentarios = $_POST['mensaje'];
$mascota = $_POST['mascota'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " .$nombre.  " \r\n";
$mensaje.= "Su mascota se llama: " . $mascota . " \r\n";
$mensaje.= "Su e-mail es: " . $mail . " \r\n";
$mensaje.=  "Asusnto:". $direccion. " \r\n";
$mensaje .= "Mensaje: " . $comentarios . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'rafaelgarcia@hospitalveterinariopeninsular.com';
//$para = 'link_139majoramaks@hotmail.com';
$asunto = 'Contacto desde Hospitalveterinariopeninsular.com';

mail($para, $asunto, utf8_decode($mensaje ), $header);

?>
				  <script lenguaje="javascript"> 
				  
location.href = "contacto.html"; 
alert('Su mensaje ha sido enviado, en breve nos comunicaremos con usted al correo que nos ha proporcionado');
</script> 

?>