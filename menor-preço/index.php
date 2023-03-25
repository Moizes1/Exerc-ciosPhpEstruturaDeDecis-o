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
    
     <form action="verificar.php" method="post">

        <label>Digite o primeiro preço:</label><br>
        <input type="text" name="primeiroPreco"><br><br>

        <label>Digite o segundo preço:</label><br>
        <input type="text" name="segundoPreco"><br><br>

        <label>Digite o terceiro preço:</label><br>
        <input type="text" name="terceiroPreco"><br><br>

        <button class="btn btn-info">Calcular</button>

     </form>
     
</body>
</html>
