<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Palíndromos (ainda não entendi 100% o que é palindromo) </title>
</head>
<body>
    <form method="POST" action="">
        <label for="texto">Digite una palavra:</label>
        <input type="text" id="texto" name="texto" required>
        <button type="submit" name="palindromo">Ver</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['palindromo'])) {
            $texto = $_POST['texto'];

            $texto_docontra = strrev($texto);

                if ($texto == $texto_docontra) {
                    echo "$texto <strong>caraio, é um palíndromo</strong>";

                } else {
                    echo "$texto <strong>aff, não é um palíndromo!</strong>";;
                }
            }
        }
    ?>
</body>
</html>