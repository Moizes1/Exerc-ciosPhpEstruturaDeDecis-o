<?php 
	/*
		Estrutura de decisão 
		Exercicio 26 - retirado do site python.org.br

		Um posto está vendendo combustíveis com a seguinte tabela de descontos:
	    Álcool:
	    até 20 litros, desconto de 3% por litro
	    acima de 20 litros, desconto de 5% por litro
	    Gasolina:
	    até 20 litros, desconto de 4% por litro
	    acima de 20 litros, desconto de 6% por litro Escreva um algoritmo que leia o número de litros vendidos, o tipo de combustível (codificado da seguinte forma: A-álcool, G-gasolina), calcule e imprima o valor a ser pago pelo cliente sabendo-se que o preço do litro da gasolina é R$ 2,50 o preço do litro do álcool é R$ 1,90. 

	*/

	if(!empty($_POST['alcool'])) {
		$litros = $_POST['alcool'];

		$valor = $litros * 1.90;

		if($litros < 20) {
			$desconto = $valor * (3 / 100);
			$pagamento = $valor - $desconto;
			$combustivel = 'Álcool';

		} else if($litros > 20) {
			$desconto = $valor * (5 / 100);
			$pagamento = $valor - $desconto;
			$combustivel = 'Álcool';
		}	

	} else if(!empty($_POST['gasolina'])) {
		$litros = $_POST['gasolina'];

		$valor = $litros * 2.50;

		if($litros < 20) {
			$desconto = $valor * (4 / 100);
			$pagamento = $valor - $desconto;
			$combustivel = 'Gasolina';

		} else if($litros > 20) {
			$desconto = $valor * (6 / 100);
			$pagamento = $valor - $desconto;
			$combustivel = 'Gasolina';
		}
	} else {
		header('Location: index.php');
	}	
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Preços de combustivel</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	 <h1>Tabela de preços dos combustiveis </h1>

	 <h3>Combustivel escolido: <?= $combustivel ?></h3>
	 <h3>Quantidade de combustivel: <?= $litros ?></h3>
	 <h3>Total: <?= number_format($valor,2) ?></h3>
	 <h3>Desconto: <?= number_format($desconto,2) ?></h3>
	 <h3>Valor a pagar: <?= number_format($pagamento,2) ?></h3>

	 <a class="btn btn-primary" href="index.php">Retornar</a>
	
</html>

