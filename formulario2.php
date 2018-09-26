<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title>FREDERICO ZANITTI</title>
		<link rel="stylesheet"
		 href="cssgeral.css"
		 type="text/css">
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
                        $mensagem = $_POST['mensagem'];

						$msg = "<font face='Verdana' size='1'><b>Nome:</b> \t$nome</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>E-mail:</b> \t$email</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Telefone:</b> \t$tel</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Celular:</b> \t$cel</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Mensagem:</b> \t$mensagem</font>";
						
						$mensagem = "$msg";
						$remetente = "$email";
						$destinatario = "frederico@zanitti.com.br";
						$assunto = "CONTATO SITE";
						$headers = "From: ".$remetente."\nContent-type: text/html"; # o 'text/html' é o tipo mime da mensagem
						if(!mail($destinatario,$assunto,$mensagem,$headers)){
							print "<script>window.location.href='falha.html'</script>";
						} else {
							echo "<script>window.location.href='obrigado.html'</script>";
						}
						?>

				</div>				
		</div>
	</div>	
	</body>
</html>