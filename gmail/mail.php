<?php


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  // Validar la entrada
  if (empty($name) || empty($email) || empty($message)) {
    echo "Todos los campos son requeridos.";
    exit;
  }
  // Enviar el correo electrónico
  $to = "ferchitomonroy@gmail.com";
  $subject = "Nuevo mensaje de $name";
  $body = "Nombre: $name\nEmail: $email\nMensaje: $message";
  $headers = "From: $email\nReply-To: $email";
  if (mail($to, $subject, $body, $headers)) {
    echo "Tu mensaje ha sido enviado.";
  } else {
    echo "Hubo un error al enviar tu mensaje.";
  }
}
?>
