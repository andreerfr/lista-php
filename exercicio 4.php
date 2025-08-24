<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="fatorial">fatorialzado</button>
</form>

<?php
  if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        if(isset($_POST['fatorial'])) {
            $numero = $_POST['numero'];
            for ($i = $numero; $i <= $numero; $i--) {
                $resultado = $i *  $resultado;
                $resultadofinal = $resultadofinal + $resultado;
            }
 echo "$resultadofinal";
                }

 }


?>
</body>
</html>