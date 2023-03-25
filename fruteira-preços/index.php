<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Promoção de frutas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

     <h2>Tabela de preços das frutas:</h2>
    
      <table>
        <tr>
        <td>Tabela de frutas</td>
        <td>Até 5 Kg</td>
        <td>Acima de 5Kg</td>
      </tr>

       <tr>
        <td>Maçã</td>
        <td>R$ 1,80 por Kg</td>
        <td>R$ 1,50 por Kg</td>
      </tr>

      <tr>
        <td>Morango</td>
        <td>R$ 2,5 por Kg</td>
        <td>R$ 2,20 por Kg</td>
      </tr>
      </table>
     <hr> 

     <h3>Promoção se sua compra for maior que 8kg ou o valor ultrapassar R$ 25,00 seu desconto é de 10% no tatal</h3>

     <form action="calcular.php" method="post">
        <label>Digite a quantidade de Maçã(Kg)</label><br>
        <input type="text" name="maca"><br><br>

        <label>Digite a quantidade de Morango(Kg)</label><br>
        <input type="text" name="morango"><br><br>

        <button class="btn btn-info">Efetuar compra</button>
     </form>
</body>
</html>
