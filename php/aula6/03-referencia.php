<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Referencia</title>
</head>

<body>
    <?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br/> A variavel B vale $b";
    ?>
</body>

</html>