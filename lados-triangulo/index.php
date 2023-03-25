<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lados do triagulo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

     <h1>Digite os lados do triangulo </h1>
    
     <form action="calculo.php" method="post">

        <label>Digite o primeiro lado</label><br>
        <input type="text" name="primeiroLado"><br><br>

        <label>Digite o segundo lado</label><br>
        <input type="text" name="segundoLado"><br><br>

        <label>Digite o terceiro lado:</label><br>
        <input type="text" name="terceiroLado"><br><br>

        <button class="btn btn-info">Calcular</button>

     </form>
     
</body>
</html>
