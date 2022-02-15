<?php
/*
Snack D
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

*/

$paragrafo = 'Sono salito sulla cattedra per ricordare a me stesso che dobbiamo sempre guardare le cose da angolazioni diverse. E il mondo appare diverso da quassù. Non vi ho convinti? Venite a vedere voi stessi. Coraggio! È proprio quando credete di sapere qualcosa che dovete guardarla da un’altra prospettiva.';

$paragrafo = str_replace('.', '<p>', $paragrafo);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack D</title>
</head>
<body>
  <p><?php echo $paragrafo ?></p>
</body>
</html>