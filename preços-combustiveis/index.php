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

	 <h3>A-Álcool - R$ 1,90 litro</h3>
	 <p>Na compra de álcool até 20 litros desconto de 3%, acima de 20 litros desconto de 5%</p>

	 <form action="calculo.php" method="post">
	 	<label>Digite a quantidade de combustivel:</label><br>
	 	<input type="text" name="alcool"><br><br>

	 	<button class="btn btn-info">Calcular</button>
	 </form>

	 <h3>G-Gasolina - R$ 2,50 litro</h3>
	 <p>Na compra de álcool até 20 litros desconto de 4%, acima de 20 litros desconto de 6%</p>

	 <form action="calculo.php" method="post">
	 	<label>Digite a quantidade de combustivel:</label><br>
	 	<input type="text" name="gasolina"><br><br>

	 	<button class="btn btn-info">Calcular</button>
	 </form>
</body>
</html>
