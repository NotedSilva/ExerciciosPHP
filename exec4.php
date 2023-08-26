<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>

<?php

        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $lado3 = $_POST["lado3"];

        if (($lado1 + $lado2 > $lado3) && ($lado2 + $lado3 > $lado1) && ($lado3 + $lado1 > $lado2)) {
            echo "<p> Os lados informados formam um triângulo. </p>";

            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo '<img src="img/equilátero.png" alt="Triângulo Equilátero">';
            } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado3 == $lado1) {
                echo '<img src="img/isóceles.png" alt="Triângulo Isósceles">';
            } else {
                echo '<img src="img/escaleno.png" alt="Triângulo Escaleno">';
            }
        } else {
            echo "<p>Os lados informados não podem formar um triângulo.</p>";
        }
    
    ?>
    
</body>
</html>