<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 3 - + - ou 0</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="tabuada">+ - ou 0</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        if(isset($_POST['tabuada'])) {
            $numero = $_POST['numero'];

        }
    }
if ($numero == 0){
    echo "É zero man";
}

else if ($numero < 1){
echo "É maior que 1, então é positivo man";
}

else {
    echo "Tem que ser negativo né cara";
}

?>
</body>
</html>