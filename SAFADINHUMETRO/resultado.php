<?php

$anjo = 0;
$safadeza = 0;

$dia = $_REQUEST['campo_dia'];
$mes = $_REQUEST['campo_mes'];
$ano = $_REQUEST['campo_ano'];

function somatorio(int $n){

    $somatorio = 0;

    for ($i=1; $i <= $n; $i++) { 
        $somatorio += $i;
    }

    return $somatorio;
}

function somaDigitos(int $numero){

    $soma = 0;

    while  ($numero > 0){
        $digito = $numero % 10; //pega o ultimo digito
        $soma += $digito; //soma o digito
        $numero = $numero / 10; //remove o ultimo digito
    }

    return $soma;
}

function safadao(int $dia, int $mes, int $ano){

    global $anjo;
    global $safadeza;

    $safadeza = somatorio($mes) + somaDigitos($ano) * (50 - $dia) / 10;
    //print "Nível de safadeza: $safadeza <br>";

    $anjo = 100 - $safadeza;
    //print "Nível de anjeza: $anjo";
    
}

print safadao($dia, $mes, $ano);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WESLEI</title>
</head>
<body>
    
    <h2><?php print "Nível de safadeza: $safadeza, ai tem o nível de anejza: $anjo"; ?></h2>
    <a href="index.hmtl">RECALCULAR</a>

    <img src="https://i.ytimg.com/vi/tnQzkODdKQ8/sddefault.jpg">
    <img src="https://conteudo.imguol.com.br/c/entretenimento/44/2016/10/13/nao-tem-um-acontecimento-que-nao-vire-meme-com-wesley-safadao-na-epoca-da-copa-quando-comecou-a-ganhar-projecao-nacional-o-cearense-virou-figurinha-do-album-da-selecao-so-na-internet-claro-o-1476400940841_142x200.jpg.webp">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYRcevKJpsksRmNw8h-_8mwZ1Ry1vD-O6Vsw&s">

</body>
</html>
