<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:"1900";
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tera $i anos";
    ?>
</div>
</body>
</html>
 