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

		<div id="fundo2">

				<div id="mensagem">

					

					<?

						$msg = "Mensagem enviada em ".date("d/m/Y")." \n"; 

						while(list($campo, $valor) = each($HTTP_POST_VARS)) {

						$msg .= ucwords($campo).": ".$valor."\n";

						}

						mail("frederico@zanitti.com.br", "CONTATO SITE",$msg,"From: $email");

						echo "<script>alert('Mensagem enviada com sucesso. Aguarde nosso contato!')

						location.href='index.html'</script>";					

					?>					

				</div>				

		</div>

	</div>	

	</body>

</html>

