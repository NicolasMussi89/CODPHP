<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou Negativo</title>
</head>
<body>
<?php
 
 function verificarNumero($numero) {
     if ($numero > 0) {
         echo "$numero número positivo.";
     } elseif ($numero < 0) {
         echo "$numero número negativo.";
     } else {
         echo "O número é neutro (zero).";
     }
 }
  
 
 verificarNumero(10);
 echo "<br>";
 verificarNumero(-5); 
 echo "<br>";
 verificarNumero(0); 
  
 ?>
</body>
</html>