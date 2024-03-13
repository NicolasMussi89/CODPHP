<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 
 function verificarNumero($numero) {
     if ($numero > 0) {
         echo "$numero é positivo.";
     } elseif ($numero < 0) {
         echo "$numero é negativo.";
     } else {
         echo "O número é neutro (zero).";
     }
 }
  
 // Teste com diferentes números
 verificarNumero(10); // Saída: 10 é positivo.
 echo "<br>";
 verificarNumero(-5); // Saída: -5 é negativo.
 echo "<br>";
 verificarNumero(0); // Saída: O número é neutro (zero).
  
 ?>
</body>
</html>