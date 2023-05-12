<?php


$to      = 'aagonzalespolicio@gmail.com';
$subject = 'Mejoras Bita';
$message = $_POST["emailText"];
$headers = 'From: '. $_POST["emailAddress"]  . "\r\n" .
    'Reply-To: '. $_POST["emailAddress"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
