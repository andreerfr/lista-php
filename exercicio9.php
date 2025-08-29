<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>

         <label for="numero">Digite um número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="tabuada2">Calcular</button>
</form>
<?php

$soma = 0;

    if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        if(isset($_POST['tabuada'])) {
            $numero = $_POST['numero'];

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        if(isset($_POST['tabuada2'])) {
            $numero2 = $_POST['numero2'];

            if ($numero < $numero2){ 
            for ($i = $numero; $i = $numero2; $i++) {
             $soma = $soma + $i;
                }
            }else {
for ($i = $numero2; $i = $numero; $i++) {
             $soma = $soma + $i;
                }
            }
 }
}
        }
    }
echo "$soma";

?>
</body>
</html>