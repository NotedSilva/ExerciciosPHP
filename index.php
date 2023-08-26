<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista nova</title>
</head>
<body>

    <h1>Exercicio 1</h1>

    <form method="post" action="exec1.php">

    <label for="numero">Insira um número:</label>
    <input type="text" id="numero" name="numero"  required> <br><br>

    <input type="submit" value="Enviar">

    </form>
<hr>

    <h1>Exercicio 2</h1>

<form method="post" action="exec2.php">

<label for="numero">Insira um número:</label>
<input type="text" id="numero" name="numero"  required> <br><br>

<input type="submit" value="Enviar">

</form>
<hr>

    <h1>Exercicio 3</h1>

<form method="post" action="exec3.php">

<label for="varA">Insira um valor na variavel A:</label>
<input type="text" id="varA" name="varA"  required> <br><br>

<label for="varB">Insira um valor na variavel B:</label>
<input type="text" id="varB" name="varB"  required> <br><br>

<input type="submit" value="Enviar">

</form>
<hr> 

    <h1>Exercicio 4</h1>

<form method="post" action="exec4.php">
        <label for="lado1">Lado 1:</label>
        <input type="text" name="lado1" required><br> <br>

        <label for="lado2">Lado 2:</label>
        <input type="text" name="lado2" required><br> <br>

        <label for="lado3">Lado 3:</label>
        <input type="text" name="lado3" required><br> <br>

        <input type="submit" value="Enviar">
    </form>
    <hr> 

    <h1>Exercicio 5</h1>

    <form method="post" action='exec5.php'>
        <label for="nome">Seu Nome: </label>
        <input type="text" name="nome" required><br> <br> 

        <label for="escolha">Escolha: </label>
        <select name="escolha" required>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select><br> <br> 

        <input type="submit" value="Jogar">
    </form>
    <hr> 
</body>
</html>