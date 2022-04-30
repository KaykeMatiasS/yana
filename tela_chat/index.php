<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="script.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>Chat</title>

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body onload="ajax();">
	

    <!-- Telas -->
	<div id="bloco">
		
		<div id=lista_pessoas></div>

	
		<div id="chat" style="overflow:hidden; height:200px;"></div>

	</div>

	
	<!-- Teclado -->
	<form id="form-chat" action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12">
			<div class="input-group">
				<input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control" />
				<span class="input-group-btn">
					<input type="submit" value="&rang;&rang;" class="btn btn-success">
					<input type="hidden" name="env" value="envMsg"/>
				</span>
			</div>
		</div>


	<!-- envio das mensagens para o banco simples -->
	<?php
		include("bd_conect.php");
		$mensagem = $_POST['mensagem'];
		$sql = $pdo->query("INSERT INTO chat1 SET mensagem= '$mensagem'");


	?>

</body>
</html>