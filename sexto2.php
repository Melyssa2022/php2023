<html>
    <head>
        <title>Estrutura de Controle</title>
        <meta charset="UTF-8">
</meta>
</head>
<body>

<h1>Foreach</h1>

<?php


$n = array("1"=>"Aislany","2"=>"Davi","3"=>"Higor M","4"=>"Hygor S","5"=>"Marcus","6"=>"Melyssa","7"=>"Vinicius");
echo "<br>";
foreach ($n as $key => $value) {
    echo $key . "=". $value . "<br>";
if ($key <6) {
    echo "menor" . "<br>";}
elseif ($key >=6){
    echo "maior" . "<br>";}
echo "<br>";
}

?>

</body>

</html>