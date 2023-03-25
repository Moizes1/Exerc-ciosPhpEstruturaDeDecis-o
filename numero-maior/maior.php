<?php 
	
	if(!empty($_POST['numero1']) && !empty($_POST['numero2'])) {
		$num1 = $_POST['numero1'];
		$num2 = $_POST['numero2'];

		if($num1 > $num2) {
			$numero = $num1;
		} else if($num2 > $num1) {
			$numero = $num2;
		}
	} else {
		header("Location: numero-maior.php");
	}

 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Numero maior</title>
</head>
<body>

	 <h1>O maior numero escolido foi:<?= $numero ?> </h1>
</body>
</html>