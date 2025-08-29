<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Célcius para Fahrenheit </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite seu peso</label>
        <input type="number" id="numero" name="numero" required>
         <label for="numero">Digite sua altura</label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="peso">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['IMC'])) {
            $peso = $_POST['numero'];
             if (isset($_POST['IMC'])) {
            $altura = $_POST['numero2'];
            $IMC = 0;

            $IMC = $peso / ($altura * $altura);

        
            }

            
        }
        }

        echo ("Seu IMC é $IMC");
    ?>
</body>
</html>