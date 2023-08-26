<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio1</title>
</head>
<body>

 
<?php
    $numero = $_POST["numero"];

    if ($numero > 0) {
        echo("<h3> O número que você digitou <h3>" .$numero. "<h3> é maior que 0. <h3>");
    }
    elseif ($numero == 0) {
        echo("<h3> O número que você digitou <h3>" .$numero. "<h3> é igual a 0. <h3>");
    }
    elseif ($numero < 0) {
        echo("<h3> O número que você digitou <h3>" .$numero. "<h3> é menor do que 0. <h3>");
    }


?>

    
</body>
</html>