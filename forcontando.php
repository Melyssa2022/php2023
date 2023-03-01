<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Lógico</title>
</head>
<body>

<form action="" method="get">
    fazer for até: <input type="number" name="number"/><br>
    <input type="submit" name="submit" value="calcular"/> 
</form>
<?php

if (isset($_GET["number"])) {
    $qtdfors= $_GET["number"];
    for( $i = 1; $i <= $qtdfors; $i++){
        echo " o valor ". $i. '<br /> ';
        if($i % 2 == 0) {
        echo " é par " .'<br />';}
        if($i % 2 == 1) {
        echo " é impar ". '<br />' . PHP_EOL;
    }
    }
}


?>
</body>
</html>





