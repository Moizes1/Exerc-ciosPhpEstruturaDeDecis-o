<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Folha de pagamento</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

     <h1>Calculo da folha de pagamento </h1>
    
     <form action="calculo.php" method="post">

        <label>Digite o valor da hora trabalhada:</label><br>
        <input type="text" name="valor"><br><br>

        <label>Digite as horas trabalhadas no mês:</label><br>
        <input type="text" name="quantidade"><br><br>

        <button class="btn btn-info">Calcular</button>

     </form>
     
</body>
</html>
