<html>


	<head>
		<title>ARTE COM BARBANTE</title>
		<link rel="stylesheet"
		 href="cssgeral.css"
		 type="text/css">
	</head>


	<body>
	<div id="centro">
		<div id="fundo2">
				<div id="mensagem">
					<?php
						$nome = $_POST['nomeped'];
						$cidade = $_POST['cidadeped'];
						$email = $_POST['emailped'];
						$tel = $_POST['telefoneped'];
						$cel = $_POST['celularped'];
						$mensagem = nl2br($_POST['msgpedido']);

						$msg = "<font face='Verdana' size='1'><b>Nome:</b> \t$nome</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Cidade:</b> \t$cidade</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>E-mail:</b> \t$email</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Telefone:</b> \t$tel</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Celular:</b> \t$cel</font><br><br>";
						$msg .= "<font face='Verdana' size='1'><b>Pedido:</b><br> \t$mensagem</font>";

						$mensagem = "$msg";
						$remetente = "$email";
						$destinatario = "atendimento@artecombarbante.com.br";
						$assunto = "PEDIDO SITE - ARTE COM BARBANTE";
						$headers = "From: ".$remetente."\nContent-type: text/html"; # o 'text/html' é o tipo mime da mensagem
						if(!mail($destinatario,$assunto,$mensagem,$headers)){
							print "falha no envio da mensagem";
						} else {
							echo "<script>window.location.href='obrigado2.html'</script>";
						}
					?>				
				</div>				
		</div>
	</div>	
	</body>
</html>