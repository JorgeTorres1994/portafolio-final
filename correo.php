<?php
 //Llamando a los campos
 $nombre = $_POST['nombre'];
 $correo = $_POST['correo'];
 $motivo = $_POST['motivo'];
 $mensaje = $_POST['mensaje'];
 
//Datos para el correo
$destinatario = "tonyblakes1000@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Motivo: $motivo \n";
$carta .= "Mensaje: $mensaje \n";

//Enviando Mensaje
if(mail($destinatario, $asunto, $carta)){
    echo "<p>Gracias por contactarse conmigo, $nombre. Le enviaré una respuesta en el lapso de 24 horas</p>";
}else{
    echo '<p>Lo sentimos, no se pudo enviar tu mensaje</p>';
}


?>