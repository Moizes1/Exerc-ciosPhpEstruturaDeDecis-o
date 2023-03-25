<?php 
	/*	
		Estrutura de decisão 
		Exercicio 9 - retirado do site python.org.br
		Faça um Programa que leia três números e mostre-os em ordem decrescente. 
	*/
	 
	if(!empty($_POST['numero1']) && !empty($_POST['numero2']) && !empty($_POST['numero3'])) {
		$num1 = $_POST['numero1'];
		$num2 = $_POST['numero2'];
		$num3 = $_POST['numero3'];

		if($num1 > $num2 && $num1 > $num3 && $num2 > $num3) {
			$numeros = $num1 . $num2 . $num3;
		} else if($num1 > $num2 && $num1 > $num3 && $num3 > $num2) {
			$numeros = $num1 . $num3 . $num2;
		} else if($num2 > $num3 && $num2 > $num1 && $num3 > $num1) {
			$numeros = $num2 . $num3 . $num1;
		} else if($num2 > $num3 && $num2 > $num1 && $num1 > $num3) {
			$numeros = $num2 . $num1 . $num3;
		} else if($num3 > $num1 && $num3 > $num2 && $num2 > $num1) {
			$numeros = $num3 . $num2 . $num1;
		} else if($num3 > $num1 && $num3 > $num2 && $num1 > $num2) {
			$numeros = $num3 . $num1 . $num2;
		}
		} else {
		header("Location: index.php");
	}		
 ?>

<html>
</body>
</html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Numeros Ordem Crescente</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<h1>Numeros em ordem crescente:<?= $numeros ?> </h1>
	<a class="btn btn-info" href="index.php">Retornar</a>

	 
</body>
</html>

