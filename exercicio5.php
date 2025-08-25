<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Números gays "amigos"</title>
</head>
<body>
   <label for="numeroa">Digite um número:</label>
        <input type="number" id="numeroa" name="numeroa" required>
        <button type="submit" name="numeros">Calcular</button>
        <br>
        
       <label for="numerob">Digite um número:</label>
        <input type="number" id="numerob" name="numerob" required>
        <button type="submit" name="numeros">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['numeros'])) {
            $numeroa = $_POST['numeroa'];
            $numerob = $_POST['numerob'];

            $divisor1 = [];
            
                for ($i = 1; $i < $numeroa; $i++) {
                    if ($numeroa % $i == 0) {
                        $divisor1[] = $i;
                    }
                }

            $soma1 = array_sum($divisor1);

            $divisor2 = [];
            
                for ($i = 1; $i < $numerob; $i++) {
                    if ($numerob % $i == 0) {
                        $divisor2[] = $i;
                    }
                }
            $soma2 = array_sum($divisor2);
        }

        if ($numeroa == $soma2 and $numerob == $soma1){
            echo "Os números <strong>são</strong> numeros! <br>";
        } else {
            echo "Os números <strong>não são</strong> numeros! <br>";
        }

    }
    ?>
</body>
</html>