<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$emaildestinatario 	= 'frederico@zanitti.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$assunto			= 'CONTATADO PELO SITE';
$usuario          	= $_POST['usuario'];
$email          	= $_POST['email'];
$celular      	   	= $_POST['celular'];
$mensagem          	= $_POST['mensagem'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>FORMULARIO PREENCHIDO NO SITE WWW.ZANITTI.COM.BR</P>
<p><b>Nome:</b> '.$usuario.'
<p><b>E-Mail:</b> '.$email.'
<p><b>Celular:</b> '.$celular.'
<p><b>Assunto:</b> '.$assunto.'
<p><b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
 if($envio)
echo "<script>location.href='obrigado.html'</script>"; // Página que será redirecionada

?>
