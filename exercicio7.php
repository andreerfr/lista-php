<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 6</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="divisores">Divisores</button>
    </form>

    <?php
    $numerofinal = 0;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['divisores'])) {
            $numero = $_POST['numero'];

            for ($i = 1; $i <= $numero; $i++) {
                if ($numero % $i == 0) {
                    $numerofinal = $numerofinal + $i;
                }
            }
            if ($numerofinal === $numero) {
                    echo"NUMERO PERFEITO";
                } else{
                    echo "fds";
                }
        }
    }
    ?>
</body>

</html>