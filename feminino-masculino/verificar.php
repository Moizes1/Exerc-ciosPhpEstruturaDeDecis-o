<?php 
	/*
		Estrutura de decisão 
		Exercicio 2 - retirado do site python.org.br

		Faça um Programa que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido.
	*/
	if(!empty($_POST['letra'])) {
		$letra = $_POST['letra'];

		if($letra != 'f' && $letra != 'm') {
			$verificar = ' Sexo invalido';
		}

		if($letra == 'f' || $letra == 'F') {
			$verificar = ' F - feminino';
		} else if($letra == 'm' || $letra == 'M') {
			$verificar = ' M masculino';
		}

	} else {
		header('Location: index.php');
}

 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feminino - Masculino</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	 <h1>A letra escolhida foi:<?= $verificar ?> </h1>
	 <a class="btn btn-info" href="index.php">Voltar</a>

	 
</body>
</html>
