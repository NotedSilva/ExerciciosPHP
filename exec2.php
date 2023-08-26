<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
<?php

$numero = $_POST["numero"];

if ($numero % 2 == 0) {
    echo "<h3> O número $numero é par. <h3>";
} else {
    echo "<h3> O número $numero é ímpar. <h3>";
}

?>
    
</body>
</html>