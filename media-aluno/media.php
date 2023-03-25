<?php 
    /*
        Estrutura de decisão 
        Exercicio 14 - retirado do site python.org.br

        Faça um programa que lê as duas notas parciais obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média. A atribuição de conceitos obedece à tabela abaixo:

        Média de Aproveitamento  Conceito
        Entre 9.0 e 10.0        A
        Entre 7.5 e 9.0         B
        Entre 6.0 e 7.5         C
        Entre 4.0 e 6.0         D
        Entre 4.0 e zero        E

        O algoritmo deve mostrar na tela as notas, a média, o conceito correspondente e a mensagem “APROVADO” se o conceito for A, B ou C ou “REPROVADO” se o conceito for D ou E. 
    */


    if(!empty($_POST['primeiraNota']) && !empty($_POST['segundaNota'])) {
        $primeiraNota = str_replace(',', '.', $_POST['primeiraNota']);
        $segundaNota = str_replace(',', '.', $_POST['segundaNota']);;

        $nota = $primeiraNota + $segundaNota;
        $media = $nota / 2;

        if($media > 9 && $media <= 10) {
            $conceito = ' Aprovado conceito A sua média foi '.$media;
        } else if($media >= 7.5 && $media <= 9) {
            $conceito = ' Aprovado conceito B sua média foi '.$media;
        } else if($media >= 6 && $media < 7.5) {
            $conceito = ' Aprovado conceito C sua média foi '.$media;
        } else if($media > 4 && $media < 6) {
            $conceito = ' Reprovado conceito D sua média foi '.$media;
        } else if($media < 4) {
            $conceito = ' reprovado conceito E sua média foi '.$media;
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

     <h2>Média do aluno(a)</h2>
     <p>Primeira nota: <?= $primeiraNota ?></p>
     <p>Primeira nota: <?= $segundaNota ?></p>
     <p>Situação: <?= $conceito ?></p>
     <a class="btn btn-info" href="index.php">Retornar</a>
    
</body>
</html>
