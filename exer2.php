<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Redondo ou Quebrado</title>
</head>
<body>
    <h1>Redondo ou Quebrado</h1>
 
    <form method="post" action="">
        <label for="numero">Insira um número:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit">Concluido</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $numero = $_POST["numero"];
 
        if (is_numeric($numero)) {
            if (strpos($numero, '.') !== false) {
                echo "<p>É um número $numero quebrado (não redondo).</p>";
            } else {
                echo "<p>É um número $numero redondo (inteiro).</p>";
            }
        } else {
            echo "<p> Você inseriu um número válido.</p>";
        }
    }
    ?>
    
</body>
</html>