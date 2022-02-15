<?php
/*
Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

*/

$partite= [
  [
    'team_casa' => 'New Basket Brindisi',
    'team_ospiti' => 'Olimpia Milano',
    'punti_casa' => 80,
    'punti_ospiti' => 75,

  ],
  [
    'team_casa' => 'Pallacanestro Varese',
    'team_ospiti' => 'Dinamo Sassari',
    'punti_casa' => 75,
    'punti_ospiti' => 85,

  ],
  [
    'team_casa' => 'reyer',
    'team_ospiti' => 'Fortitudo Bologna',
    'punti_casa' => 90,
    'punti_ospiti' => 59,

  ],
  [
    'team_casa' => 'Allianz Pallacanestro Trieste',
    'team_ospiti' => 'Treviso Basket',
    'punti_casa' => 86,
    'punti_ospiti' => 60,

  ],
  [
    'team_casa' => 'Vanoli Cremona',
    'team_ospiti' => 'Aquila Basket Trento',
    'punti_casa' => 79,
    'punti_ospiti' => 85,

  ],
];


for ($i = 0; $i < count($partite); $i++) {
   $casa = $partite[$i]['team_casa'];
   $ospiti = $partite[$i]['team_ospiti'];
   $puntiCasa = $partite[$i]['punti_casa'];
   $puntiOspiti = $partite[$i]['punti_ospiti'];
    echo "$casa - $ospiti | $puntiCasa - $puntiOspiti <br><br>"; 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack A</title>
</head>
<body>
  
</body>
</html>