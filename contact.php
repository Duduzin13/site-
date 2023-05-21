<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Configurar o destinatário do email
  $to = "eduardoogabrielloliveiraa@gmail.com"; // Substitua pelo email do vendedor

  // Configurar o cabeçalho do email
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

  // Montar o corpo do email
  $subject = "Mensagem do formulário de contato";
  $body = "<h3>Dados do formulário de contato:</h3>";
  $body .= "<p><strong>Nome:</strong> $name</p>";
  $body .= "<p><strong>Email:</strong> $email</p>";
  $body .= "<p><strong>Mensagem:</strong><br>$message</p>";

  // Enviar o email
  if (mail($to, $subject, $body, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Ocorreu um erro ao enviar a mensagem.";
  }
}
?>
