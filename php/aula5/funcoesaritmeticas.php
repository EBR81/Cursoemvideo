<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritmeticas</title>
    <style>
        h2 {
            font: 12pt Arial;
            color: #171559;
        }
    </style>
</head>

<body>
    <?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    echo "<h2>Os Valores recebidos são $n1 e $n2 </h2>";
    echo "<br/> O valor absoluto de $n2 é " . abs($n2);
    echo "<br/> O valor de $n1 <sup> $n2</sup> é " . pow($n1, $n2);
    echo "<br/> A raiz de $n1 é " . sqrt($n1);
    echo "<br/> O valor de $n2 arredondado é " . round($n2);
    echo "<br/> A parte inteira de  $n2 é " . intval($n2);
    echo "<br/> O valor de $n1 em moeda é " . number_format($n1, 2, ",", ".");
    ?>
</body>

</html>