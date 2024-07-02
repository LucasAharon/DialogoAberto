<?php
// Verifica se os dados foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Captura os dados do formulário
	$nome = htmlspecialchars($_POST['nome']);
	$setor = htmlspecialchars($_POST['setor']);
	$email = htmlspecialchars($_POST['email']);
	$mensagem = htmlspecialchars($_POST['mensagem']);
  
  // Endereço de e-mail para onde você deseja enviar o formulário
  $destinatario = 'haiana.holz@kimpaes.com.br';
  
  // Assunto do e-mail
  $assunto = 'Canal de Dialogo Aberto';
  
  // Monta o corpo da mensagem
	$mensagem_email = "Nome: $nome\n";
	$mesagem_email= "Setor: $setor\n";
	$mensagem_email .= "Email: $email\n";
	$mensagem_email .= "Mensagem:\n$mensagem\n";
  
  // Cabeçalhos do e-mail
  $headers = "From: $email\r\nReply-To: $email\r\n";
  
  // Envia o e-mail usando a função mail() do PHP
  if (mail($destinatario, $assunto, $mensagem_email, $headers)) {
    echo '<p>Obrigado! Sua mensagem foi enviada com sucesso.</p>';
  } else {
    echo '<p>Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.</p>';
  }
  
} else {
  // Redireciona para a página de formulário se os dados não foram enviados via POST
  header("Location: index.html");
  exit();
}
?>