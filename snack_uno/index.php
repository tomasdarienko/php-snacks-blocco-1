<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->



<?php

$teams = [
     [
          "nome_casa" => "milano",
          "nome_ospite" => "agrigento",
          "punti_casa" => "34",
          "punti_ospite" => "28",
     ],
     [
          "nome_casa" => "magliano",
          "nome_ospite" => "napoli",
          "punti_casa" => "134",
          "punti_ospite" => "234",
     ],
     [
          "nome_casa" => "corneda",
          "nome_ospite" => "fosso",
          "punti_casa" => "23",
          "punti_ospite" => "56",
     ],
     [
          "nome_casa" => "bola",
          "nome_ospite" => "bologna",
          "punti_casa" => "95",
          "punti_ospite" => "12",
     ],
     [
          "nome_casa" => "caserta",
          "nome_ospite" => "palermo",
          "punti_casa" => "69",
          "punti_ospite" => "96",
     ],
     [
          "nome_casa" => "campoli",
          "nome_ospite" => "barbarasco",
          "punti_casa" => "400",
          "punti_ospite" => "0",
     ],
]
     ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>


     <?php foreach ($teams as $team) { ?>

          <li>
               <?php echo $team['nome_casa'] . " - " . $team['nome_ospite'] . " |  " . $team['punti_casa'] . "-" . $team['punti_ospite']; ?>
          </li>
     <?php } ?>

</body>

</html>