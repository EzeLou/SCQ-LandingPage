<?php

// get the post records
$name = $_POST['name'];
$phone = $_POST['phone'];

//send email
$email_to = 'deftflamink@gmail.com'.'saludconquiropraxia@gmail.com';
$email_subject = "Nueva Consulta WEB";
$email_body = '<table><tr><th>Nombre: </th><th>'.$name.'</th></tr><tr><th>Telefono: </th><th>'.$phone.'</th></tr></table>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: Contacto-Pagina@deftflamink.com' . "\r\n" . 'Reply-To: info@deftflamink.com.ar' . "\r\n";

mail($email_to,$email_subject,$email_body,$headers);
header( 'Location: https://saludconquiropraxia.com/?#contact');

//header( 'Location: https://deftflamink.com/');

?>