<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula6 - Operadores Atribuição</title>
</head>

<body>
    <?php
    
    $preco = $_GET["p"];
    echo "O preco do produto e R$" . number_format($preco, 2);
    $preco += ($preco * 10 / 100);
    echo "<br/> O novo preço do produto com 10% é R$" . number_format($preco, 2);
    ?>
</body>

</html>