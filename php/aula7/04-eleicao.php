<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula7 - Exercicio 04 - Eleicao</title>
</head>

<body>
    <?php
    $ano = $_GET["an"];
    $idade = 2024 - $ano;
    echo "Quem nesceu em $ano tem idade de $idade anos. <br/>";
    $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NAO OBRIGATORIO";
    echo "E dessa forma seu voto e $tipo";
    ?>
</body>

</html>