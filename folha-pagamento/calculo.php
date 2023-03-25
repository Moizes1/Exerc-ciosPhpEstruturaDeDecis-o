<?php 
	/*
		Estrutura de decisão 
		Exercicio 12 - retirado do site python.org.br

		Faça um programa para o cálculo de uma folha de pagamento, sabendo que os descontos são do Imposto de Renda, que depende do salário bruto (conforme tabela abaixo) e 3% para o Sindicato e que o FGTS corresponde a 11% do Salário Bruto, mas não é descontado (é a empresa que deposita). O Salário Líquido corresponde ao Salário Bruto menos os descontos. O programa deverá pedir ao usuário o valor da sua hora e a quantidade de horas trabalhadas no mês.

		Desconto do IR:
		Salário Bruto até 900 (inclusive) - isento
		Salário Bruto até 1500 (inclusive) - desconto de 5%
		Salário Bruto até 2500 (inclusive) - desconto de 10%
		Salário Bruto acima de 2500 - desconto de 20% Imprima na tela as informações, dispostas conforme o exemplo abaixo. No exemplo o valor da hora é 5 e a quantidade de hora é 220.

		   Salário Bruto: (5 * 220)        : R$ 1100,00
		   (-) IR (5%)                     : R$   55,00  
		   (-) INSS ( 10%)                 : R$  110,00
		   FGTS (11%)                      : R$  121,00
		   Total de descontos              : R$  165,00
		   Salário Liquido                 : R$  935,00
	*/

	if(!empty($_POST['valor']) && !empty($_POST['quantidade'])) {
		$valorHora = str_replace(',', '.', $_POST['valor']);
		$qtdHora =  str_replace(',', '.', $_POST['quantidade']);
		$salarioBruto = $valorHora * $qtdHora;

		if($salarioBruto < 900) {
			$ir = 'Isento';
			$inss = $salarioBruto * (10 /100);
			$sindicato = $salarioBruto * (3 /100);
			$fgts = $salarioBruto * (11 /100);
			$totalDesconto = $inss;
			$salarioLiquido = $salarioBruto - $totalDesconto;

		} else if($salarioBruto >= 900 && $salarioBruto < 1500) {
			$ir = $salarioBruto * (5 /100);
			$inss = $salarioBruto * (10 /100);
			$sindicato = $salarioBruto * (3 /100);
			$fgts = $salarioBruto * (11 /100);
			$totalDesconto = $inss + $ir;
			$salarioLiquido = $salarioBruto - $totalDesconto;

		} else if($salarioBruto >= 1500 && $salarioBruto < 2500) {
			$ir = $salarioBruto * (10 /100);
			$inss = $salarioBruto * (10 /100);
			$sindicato = $salarioBruto * (3 /100);
			$fgts = $salarioBruto * (11 /100);
			$totalDesconto = $inss + $ir;
			$salarioLiquido = $salarioBruto - $totalDesconto;

		} else if($salarioBruto >= 2500) {
			$ir = $salarioBruto * (20 /100);
			$inss = $salarioBruto * (10 /100);
			$sindicato = $salarioBruto * (3 /100);
			$fgts = $salarioBruto * (11 /100);
			$totalDesconto = $inss + $ir;
			$salarioLiquido = $salarioBruto - $totalDesconto;
		}

	} else {
		header('Location: index.php');
	}

 ?>
 <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Folha de pagamento</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

     <h2>Calculo da folha de pagamento</h2>
     <h2>Desconto de sindicato e fgts não são descontados do salario </h2>
    
     <h3>Salario do mês:</h3>

     <p>Salario bruto: <?= number_format($salarioBruto,2) ?> </p>
     <p>Ir: <?= number_format($ir,2) ?> </p>
     <p>Inss: <?= number_format($inss,2) ?> </p>
     <p>Sindicato: <?= number_format($sindicato,2) ?> </p>
     <p>Fgts: <?= number_format($fgts,2) ?> </p>
     <p>Total de descontos: <?= number_format($totalDesconto,2) ?> </p>
     <p>Salario liquido: <?= number_format($salarioLiquido,2) ?> </p>
     
</body>
</html>