<?php

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

    $safadeza = somatorio($mes) + somaDigitos($ano) * (50 - $dia) / 10;
    print "Nível de safadeza: $safadeza <br>";

    $anjo = 100 - $safadeza;
    print "Nível de anjeza: $anjo";
    
}

print safadao($dia, $mes, $ano);