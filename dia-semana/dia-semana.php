<?php 
	/*
	Faça um Programa que leia um número e exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido.
	*/

	if(isset($_POST['dia']) ) {
		$dia = $_POST['dia'];

		$dia_1 = '1 - Domingo';
		$dia_2 = '2 - Segunda feira';
		$dia_3 = '3 - Terça feira';
		$dia_4 = '4 - Quarta feira';
		$dia_5 = '5 - Quinta feira';
		$dia_6 = '6 - Sexta feira';
		$dia_7 = '7 - Sábado';

		if($dia == 1) {
			$dia = $dia_1;
		} else if($dia == 2) {
			$dia = $dia_2;
		} else if($dia == 3) {
			$dia = $dia_3;
		} else if($dia == 4) {
			$dia = $dia_4;
		} else if($dia == 5) {
			$dia = $dia_5;
		} else if($dia == 6) {
			$dia = $dia_6;
		} else if($dia == 7) {
			$dia = $dia_7;
		} else {
			header("Location: index.php");
		}
	}

 ?>
<!DOCTYPE html>
<html>
</body>
</html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reajuste de salario</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	 <h1>Dia escolido: <?= $dia ?> </h1><br>
	 <a class="btn btn-info" href="index.php">Retronar</a>

	 
</body>
</html>
 

