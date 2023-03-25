<?php 
	/*	
		Estrutura de decisão 
		Exercicio 15 - retirado do site python.org.br

		Faça um Programa que peça os 3 lados de um triângulo. O programa deverá informar se os valores podem ser um triângulo. Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.

	    Dicas:
	    Três lados formam um triângulo quando a soma de quaisquer dois lados for maior que o terceiro;
	    Triângulo Equilátero: três lados iguais;
	    Triângulo Isósceles: quaisquer dois lados iguais;
	    Triângulo Escaleno: três lados diferentes

	*/
	
	if(!empty($_POST['primeiroLado']) && !empty($_POST['segundoLado']) && !empty($_POST['terceiroLado'])) {
		$primeiroLado = $_POST['primeiroLado'];
		$segundoLado = $_POST['segundoLado'];
		$terceiroLado = $_POST['terceiroLado'];

		if($primeiroLado + $segundoLado > $terceiroLado) {
			if($primeiroLado == $segundoLado && $primeiroLado == $terceiroLado && $segundoLado == $terceiroLado) {
				$triangulo = ' Triangulo equilátero três lados iguais';
			} else if($primeiroLado == $segundoLado && $primeiroLado != $terceiroLado) {
				$triangulo = ' Triangulo Isóceles quaisquer dois lados iguais';
			} else if($primeiroLado != $segundoLado && $primeiroLado != $terceiroLado && $segundoLado != $terceiroLado) {
				$triangulo = ' Triangulo Escaleno três lados diferentes';
			}
		} else {
			$triangulo = ' Os valores digitados não formam um triangulo';
		}
	} else {
		header('Location: index.php');
	}
 ?>

 <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lados do triagulo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

     <h1>Os lados escolidos são: <?= $triangulo ?></h1>
     <a class="btn btn-primary" href="index.php">Retornar</a>
    
</body>
</html>

Faça um Programa que peça os 3 lados de um triângulo. O programa deverá informar se os valores podem ser um triângulo. Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.

    Dicas:
    Três lados formam um triângulo quando a soma de quaisquer dois lados for maior que o terceiro;
    Triângulo Equilátero: três lados iguais;
    Triângulo Isósceles: quaisquer dois lados iguais;
    Triângulo Escaleno: três lados diferentes