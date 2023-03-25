<?php 

    if(!empty($_POST['primeiroPreco']) && !empty($_POST['segundoPreco']) && !empty($_POST['terceiroPreco'])) {

        $primeiroPreco = str_replace(',', '.', $_POST['primeiroPreco']);
        $segundoPreco = str_replace(',', '.', $_POST['segundoPreco']);
        $terceiroPreco = str_replace(',', '.', $_POST['terceiroPreco']);

        if($primeiroPreco < $segundoPreco && $primeiroPreco < $terceiroPreco ) {
            $menorPreco = $primeiroPreco;
        } else if($primeiroPreco > $segundoPreco && $segundoPreco < $terceiroPreco) {
            $menorPreco = $segundoPreco;
        } else if($primeiroPreco > $segundoPreco && $segundoPreco > $terceiroPreco) {
            $menorPreco = $terceiroPreco;
        }
    }
 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produto com menor preço</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

     <h1>Produto com menor preço:</h1>
     <h3>O produto com menor preço foi <?= str_replace('.', ',', $menorPreco) ?> :</h3>
     <a class="btn btn-info" href="index.php">Retornar</a>
     
</body>
</html>