<?php 
	
	/*
		Estrutura de decisão 
		Exercicio 27 - retirado do site python.org.br	

		Uma fruteira está vendendo frutas com a seguinte tabela de preços:
                          Até 5 Kg           Acima de 5 Kg
	    Morango         R$ 2,50 por Kg          R$ 2,20 por Kg
	    Maçã            R$ 1,80 por Kg          R$ 1,50 por Kg

	    Se o cliente comprar mais de 8 Kg em frutas ou o valor total da compra ultrapassar R$ 25,00, receberá ainda um desconto de 10% sobre este total. Escreva um algoritmo para ler a quantidade (em Kg) de morangos e a quantidade (em Kg) de maças adquiridas e escreva o valor a ser pago pelo cliente. 
	*/
		if(!empty($_POST['maca']) && !empty($_POST['morango'])) {
			$macaKg = str_replace(',', '.', $_POST['maca']);
			$morangoKg = str_replace(',', '.', $_POST['morango']);

			$qtdKilos = $macaKg + $morangoKg;

			if($macaKg <= 5) {
				$maca = $macaKg * 1.80;
			} else if($macaKg > 5) {
				$maca = $macaKg * 1.50;
			}

			if($morangoKg <= 5) {
				$morango = $morangoKg * 2.50;
			} else if($morangoKg > 5) {
				$morango = $morangoKg * 2.20;
			}

			$compra = $maca + $morango;

			if($qtdKilos > 8 || $compra > 25) {
				$desconto = $compra * (10 / 100);
				$total = $compra - $desconto;
			} else {
				$total = $compra;
				$desconto = 'Não tem desconto';
			}

		} else {
			header('Location: index.php');
		}	
 ?>
<html>		
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Promoção de frutas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

     <h3>Total em Kg <?= $qtdKilos ?> </h3>
     <h3>Item 1 Morango <?= $macaKg ?> (Kg) </h3>
     <h3>Item 2 Maçã <?= $morangoKg ?> (Kg) </h3>
     <h3>Total da compra: R$ <?= number_format($compra,2) ?> </h3>
     <h3>Desconto: R$ <?= $desconto ?> </h3>
     <h3>Total a pagar: R$ <?= number_format($total,2) ?> </h3>
     <a class="btn btn-primary" href="index.php">Nova compra</a>

</body>
</html>