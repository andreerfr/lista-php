<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 12</title>
</head>
<body>
    <form method="POST" action="">
        <label for="texto">Digite uma palavra:</label>
        <input type="text" id="texto" name="texto" required> //nota: usar text no type quando for texto, pra mudar o tipo da variavel d:
        <button type="submit" name="vogais">Olhar [oiar]</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['vogais'])) {
            $texto = $_POST['texto'];
            $contar = 0;

            if (preg_match_all("/[aeiouAEIOU]/", $texto, $matches)) {
            $contar = count($matches[0]);
            }
            }

            echo "Isso ai tem, o seu'$texto' tem $contar de vogais";
        }
    ?>
</body>
</html>