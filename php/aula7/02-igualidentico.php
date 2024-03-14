<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais - Aula7</title>
</head>

<body>
    <?php
    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "SIM" : "NAO";
    echo "As Variaveis A e B sao identicas? $r <br/>";

    $c = 3;
    $d = "3";
    $v = ($c === $d) ? "SIM" : "NAO";
    echo "As Variaveis C e D sao identicas? $v";



    ?>
</body>

</html>