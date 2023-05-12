<?php
$servername = "localhost"; //nombre del servidor
$username = "Aleinx"; //nombre de usuario de la base de datos
$password = "Aleinx22@"; //contraseña de la base de datos
$dbname = "BitaDB"; //nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
  die("La conexión a la base de datos falló: " . $conn->connect_error);
}

$from = $_POST["emailAddress"];
$to      = 'aagonzalespolicio@gmail.com';
$subject = 'Mejoras Bita';
$message = $_POST["emailText"];
$headers = 'From: '. $_POST["emailAddress"]  . "\r\n" .
    'Reply-To: '. $_POST["emailAddress"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
