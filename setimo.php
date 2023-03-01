<html>
    <head>
        <title>Funções</title>
        <meta charset="UTF-8">
</meta>

</head>

<body>

<h1>Funções</h1>


<?php

function soma($i, $j) {
$k = $i + $j;
return $k;
}


function sub($a, $b) {
    $retorno = $a - $b;
    return $retorno;
    }
    echo "Teste de função"."<br>";

$ressoma = soma(4, 5);

echo "O resultado da soma é ". $ressoma . "<br>";

$ressub = sub(10, 8);

echo "O resultado da subtração é ". $ressub . "<br>";


function mult ($i,$j){

    $resultado = $i * $j;

    return $resultado;
}

$valor1 =25;
$valor2 =5;

$resmult = mult ($valor1 , $valor2);
echo $valor1. " multiplicado por " . $valor2 . " é ". $resmult . "<br>";


function divisao ($x,$w){

    $div = $x / $w;

    return $div;
}

$valor3 =100;
$valor4 =40;

$resdivisao = divisao ($valor3 , $valor4);
echo $valor3. " dividido por " . $valor4 . " é ". $resdivisao ."<br>";



?>

</body>

</html>






