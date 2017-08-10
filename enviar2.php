<?php 

$para = 'cristhianriano@gmail.com'; 


$nombre = $email = $asunto = $mensaje = $ip ;


$nombre = $_POST['name'];
$mensaje = $_POST['message'];
$email = $_POST['email'];

$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=utf-8\r\n"; 

$MESSAGE_BODY = "Nombre: ".$_POST["name"]."<br>";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";
$MESSAGE_BODY .= "Mensaje: ".$_POST["message"]."<br>"; 
$MESSAGE_BODY .= "ip: ".$_SERVER['REMOTE_ADDR']."<br>"; 

mail($para, $nombre, $MESSAGE_BODY, $mailheader, $ip) or die ("Error al enviar el Formulario !"); 

header("Location:index.html");

$ip = $_SERVER['REMOTE_ADDR'];

?>
