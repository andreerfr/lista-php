<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15 - IMC </title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero1">Digite seu peso em kilogramas, sem as gramas:</label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero2">Digite sua altura em centimetros:</label>
        <input type="number" id="numero2" name="numero2" required>

        <button type="submit" name="imc">Ver</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['imc'])) {

            $peso = $_POST['numero1'];
            $altura = $_POST['numero2'];
            $IMC = 0;

            $IMC = $peso / (($altura * $altura) / 10000); //pontuações: fiz /10000 pra transformar os centimetros em metros, vou tentar arrumar depois vendo uma forma de mudar isso

            if ($IMC < 18.5) {
                echo "Você está abaixo do seu peso, seu IMC é $IMC";
            } else if ($IMC > 18.5 and $IMC < 25) {
                echo "Você está com peso está normal, teu IMC é $IMC";
            } else if ($IMC > 25 and $IMC < 30) {
                echo "Você está com sobrepeso, seu IMC é $IMC";
            } else if ($IMC > 30 and $IMC < 35) {
                echo "Você está com obesidade, seu IMC é $IMC";
            } else if ($IMC > 35 and $IMC < 40) {
                echo "Você está com obesidade grau II, seu IMC é $IMC";
            } else if ($IMC > 40) {
                echo "Você está com obesidade grau III, seu IMC é $IMC";
            }
        }
    }
    ?>
</body>

</html>