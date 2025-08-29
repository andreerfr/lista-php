<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Célcius para Fahrenheit </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite uma temperatura em celsius (sim, no normal)</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="celsius">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['celsius'])) {
            $celsius = $_POST['numero'];
            $fafa = 0;

            $fafa = $celsius * 1.8 + 32; //não usei () por que nas regras matematicas * vai primeiro, e na prog ele vai seguir esses passos por que coloquei * na frente >:)

            echo "isso ai $fafa faren [não sei escrever o nome]";
        
            }

            
        }
    ?>
</body>
</html>