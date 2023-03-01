<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF aninhado</title>
</head>
<body>
    <form action="" method="get">
        If aninhado valor1 para testar: <input type="number" name="number1" /></br>
        If aninhado valor2 para testar: <input type="number" name="number2" /></br>
        <input type="submit" name="submit" value="calcular"/>
</form>
<?php
if (isset($_GET["number1"]) and (isset($_GET["number2"]))) {
    $numero1 = $_GET["number1"];
    $numero2 = $_GET["number2"];
     if ($numero1>10){
       if ($numero2<5){
            echo 'o codigo passou na parte1 quando o numero1 e igual ou maior a 10  e o numero2 e igual a numeros pares ';
        } else {
            echo 'o codigo passou na parte2 quando o numero1 e maior que 0  e o numero2 e perto a 5 ';
        }
} else
    if ($numero2<5){
        echo 'o codigo passou na parte3 quando o numero1 sao maiores que 15  e o numero2 maior que 0';
} else {
    echo 'o codigo passou na parte4 quando o numero1 e maior que 20  e o numero2 maior que 20';
}


}

?>
</body>
</html>