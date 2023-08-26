<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>

<?php

    $varA = $_POST["varA"];
    $varB = $_POST["varB"];

    if ($varA > $varB) {
        echo("A variavel A $varA é maior do que a variavel B $varB");
    }
    else {
        echo("A variavel B $varB é maior do que a variavel A $varA");
    }
    

?>
    
</body>
</html>