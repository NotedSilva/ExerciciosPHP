<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>

<?php
        $nome = $_POST["nome"];
        $player1 = $_POST["escolha"];
        
        $escolha = ["pedra", "papel", "tesoura"];
        $player2 = $escolha[array_rand($escolha)];

        echo "<p>$nome escolheu $player1</p>";
        echo "<p>Computador escolheu $player2</p>";

        if ($player1 == $player2) {
            echo "<p>Empate!</p>";
        } elseif (
            ($player1 == "pedra" && $player2 == "tesoura") ||
            ($player1 == "papel" && $player2 == "pedra") ||
            ($player1 == "tesoura" && $player2 == "papel")
        ) {
            echo "<p>Você venceu!</p>";
        } else {
            echo "<p>Computador venceu!</p>";
        }
?>
</body>
</html>