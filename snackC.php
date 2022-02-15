<?php
/*
Snack C
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

*/

$array_numeri = [];

while(count($array_numeri) < 15) {
  $random_number = rand(1 , 20);

  if (!in_array($random_number, $array_numeri)) {
    $array_numeri[] = $random_number;
  }
};

var_dump($array_numeri);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack C</title>
</head>
<body>
  
</body>
</html>