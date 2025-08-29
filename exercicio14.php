<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Par ou Impar</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um ano:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_par_impar">Verificar</button> 
</form>

        <?php
            if ($_SERVER['REQUEST_METHOD']=== 'POST') {
                if(isset($_POST['verificar_par_impar'])) {
                    $numero = $_POST['numero']; //reciclagem do outro codigo :D

                    if($numero % 4 == 0) {
                        echo "$numero é bissexto";
                    }
                    else {
                        echo "$numero is not bissexto";
                    }
                }
            }
            ?>
</body>
</html>