<?php 
	/*
		Estrutura de decisão 
		Exercicio 2 - retirado do site python.org.br
		Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo.
	*/
	if(!empty($_POST['numero'])) {
		$numero = $_POST['numero'];
		$positivo = ' Positivo ';
		$negativo = ' Negativo ';

		if($numero > 0) {
			$verificado = $numero . $positivo;
		} else if($numero < 0) {
			$verificado = $numero . $negativo;
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

	 <h1>Numero verificado: <?= $verificado ?> </h1><br>
	 <a class="btn btn-info" href="index.php">Voltar</a>

	 
</body>
</html>
 
