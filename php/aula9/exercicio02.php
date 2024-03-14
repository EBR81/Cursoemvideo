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
        echo "Você nasceu em $a e tera $i anos <br/>";
        if ($i < 16) {
        $tipoVoto = "Não Vota";
        }
        elseif (($i >=16 && $i < 18) || ($i>65)) {
                $tipoVoto = "Voto Opcional";
            }
            else {
                $tipoVoto = "Voto Obrigatorio";
            }
        echo "Para essa idade, $tipoVoto";
    ?>
</div>
</body>
</html>
 