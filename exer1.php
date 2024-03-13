<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>
    <h1>verifica se é par ou ímpar</h1>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num = $_POST["numero"];

        if (is_numeric($num)) {

            if ($num % 2 == 0) {
                echo "O número é PAR";
            } else {
                echo "O número  é IMPAR";
            }
        } else {
            echo "Insira um número válido.";
        }
    }
    ?>
 
    <form method="post" action="">
        <label for="numero">DIgite um número:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit">Concluido</button>
    </form>
</body>
</html>