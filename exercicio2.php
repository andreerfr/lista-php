<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Par ou Impar</title>
</head>
<body>
<form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="tabuada">Calcular</button>
</form>

<?php

    if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        if(isset($_POST['tabuada'])) {
            $numero = $_POST['numero'];
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $i * $numero;
                echo $numero;

            }

                }

 }
?>

</body>
</html>