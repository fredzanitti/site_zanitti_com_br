<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title>VICAF HYDRO :: Projetos e Consultoria</title>
		<link rel="stylesheet"
		 href="cssgeral.css"
		 type="text/css">
		<meta name="name" content="vicaf hydro">
		<meta name="author" content="vicaf hydro">
		<meta name="description" content="VICAF HYDRO Projetos e Consultoria">
		<meta name="keywords" content="vicaf, hydro, consultoria, projetos, projeto, cristóvão, cristovao, ferreira, belo, horizonte, mg, minas gerais">
	</head>
	<body>
	<div id="centro">
		<div id="fundo1">
					<?php
						$empresa = $_POST['empresa'];
						$nome = $_POST['nome'];
						$cidade = $_POST['cidade'];
						$email = $_POST['email'];
						$tel = $_POST['tel'];
						$cel = $_POST['cel'];
						$motivo = nl2br($_POST['motivo']);
						$mensagem = nl2br($_POST['mensagem']);

						$msg = "<font face='Verdana' size='1'><b>Empresa:</b> \t$empresa</font><br>";
						$msg = "<font face='Verdana' size='1'><b>Nome:</b> \t$nome</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Cidade:</b> \t$cidade</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>E-mail:</b> \t$email</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Telefone:</b> \t$tel</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Celular:</b> \t$cel</font><br><br>";
						$msg .= "<font face='Verdana' size='1'><b>Motivo da visita:</b><br> \t$motivo</font><br>";
						$msg .= "<font face='Verdana' size='1'><b>Mensagem:</b><br> \t$mensagem</font>";

						$mensagem = "$msg";
						$remetente = "$email";
						$destinatario = "vicaf.hydro@gmail.com";
						$assunto = "SOLICITAÇÃO DE VISITA - VICAF HIDRO";
						$headers = "From: ".$remetente."\nContent-type: text/html"; # o 'text/html' é o tipo mime da mensagem
						if(!mail($destinatario,$assunto,$mensagem,$headers)){
							print "falha no envio da mensagem";
						} else {
							echo "<script>window.location.href='obrigado.html'</script>";
						}
					?>	
				
		</div>
	</div>	
	</body>
</html>