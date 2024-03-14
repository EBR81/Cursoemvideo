<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - Operadores Matematicos </title>
</head>

<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $S = ($n1 + $n2);
    $media = ($n1 + $n2) / 2;
    echo "Os valores recebidos são $n1 e $n2";
    echo "<br/> A soma dos Números é " . ($n1 + $n2);
    echo "<br/> A subtracao vale " . ($n1 - $n2);
    echo "<br/> A Multiplicação vale " . ($n1 * $n2);
    echo "<br/> A Divisão vale " . ($n1 / $n2);
    echo "<br/> O Modulo vale " . ($n1 % $n2);
    echo "<br/> A Media Vale " . ($media);
    ?>
</body>

</html>