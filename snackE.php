<?php
/*
Snack E
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/


$alunni = [
  [
    'nome' => 'Hamza',
    'cognome' => 'Bouzid',
    'voto' => [8,7,7,8,9,8]
  ],
  [
    'nome' => 'Giovanni',
    'cognome' => 'Cavasin',
    'voto' => [10,9,9,8,9,8]
  ],
  [
    'nome' => 'Anna',
    'cognome' => 'Perin',
    'voto' => [8,7,7,10,9,7]
  ],
  [
    'nome' => 'Andrea',
    'cognome' => 'Ballan',
    'voto' => [6,7,8,6,5,7]
  ],
  [
    'nome' => 'Giulia',
    'cognome' => 'Bulla',
    'voto' => [8,7,7,8,9,8]
  ],
  [
    'nome' => 'Marco',
    'cognome' => 'Torre',
    'voto' => [10,9,10,10,9,8]
  ],
];

for ($i = 0; $i < count($alunni); $i++) {
  echo $alunni[$i]['nome']. '  ';
  echo $alunni[$i]['cognome']. ' | media voti: ';
  echo round(array_sum($alunni[$i]['voto']) / count($alunni[$i]['voto']), 1). '<br><br>';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack E</title>
</head>
<body>
  
</body>
</html>