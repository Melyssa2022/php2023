<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oitava atividade</title>
</head>
<body>
<?php

date_default_timezone_set (
    'America/Sao_Paulo');
    $hoje = date("d/m/Y");
    $agora = date("H:i");
    $hora = date("H");
    if ($hora < 5 or $hora > 18)
    echo "<img src='imagens/lua.jpg' height='50%' width='50%'>";
    else
    echo "<img src='imagens/sol.jpg' height='50%' width='50%'>";
    echo "hoje é dia ". $hoje. "e agora sao ".$agora. "horas.";


?>
</body>
</html>