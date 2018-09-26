<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title>CGS ENGENHARIA DE CONSTRU&Ccedil;&Otilde;ES E MONTAGENS</title>
		<link rel="stylesheet"
		 href="cssgeral.css"
		 type="text/css">
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="lightbox.js"></script>	
		<meta name="name" content="CGS">
		<meta name="author" content="CGS">
		<meta name="description" content="CGS Engenharia de Constru&ccedil;&otilde;es e Montagens">
		<meta name="keywords" content="cgs, engenharia, construcao, construcoes, montagem, montagens, mario, campos, caldeiraria, silo, estruturas, solda">
	</head>
	<body>

	<div id="centro">
		<div id="fundo">
				<div id="mensagem">
				
<?php
		$nome = $_POST['usuario'];
		$email = $_POST['email'];
		$tel = $_POST['telefone'];
		$cel = $_POST['celular'];
		$mensagem = nl2br($_POST['mensagem']);
		
		$msg = "<font face='Verdana' size='1'><b>Nome:</b> \t$nome</font><br>";
		$msg .= "<font face='Verdana' size='1'><b>E-mail:</b> \t$email</font><br>";
		$msg .= "<font face='Verdana' size='1'><b>Telefone:</b> \t$tel</font><br>";
		$msg .= "<font face='Verdana' size='1'><b>Celular:</b> \t$cel</font><br>";
		$msg .= "<font face='Verdana' size='1'><b>Mensagem:</b> \t$mensagem</font>";
		
		$mensagem = "$msg";
		$remetente = "$email";
		$destinatario = "fredzanitti@yahoo.com.br";
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: $email \r\n";
		$assunto = "CONTATO SITE";
		
		$enviar = mail($assunto, $headers);
		
		if($enviar){
			echo "<script>window.location.href='obrigado.html'</script>";
		else
			echo "<script>window.location.href='falha.html'</script>";
		}
?>				





				</div>				
		</div>
	</div>	
	</body>
</html>