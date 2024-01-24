<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
codepile.netcodepile.net
CodePile | Easily Share Piles of Code
CodePile is a simple, powerful, collaborative code sharing hub, designed to make sharing and working on code together easy, beautiful, and interactive. -->


<?php

$cards = [
     '10/02/2019' => [
          [
               'title' => 'fiore',
               'author' => 'giorgio Papagni',
               'text' => 'is a simple, powerful, collaborative'
          ]
     ],
     '15/05/2019' => [
          [
               'title' => 'albero',
               'author' => 'basile Papagni',
               'text' => 'is a simple, powerful, collaborative'
          ],
          [
               'title' => 'alga',
               'author' => 'enrico Papagni',
               'text' => 'is a simple, powerful, collaborative'
          ],
          [
               'title' => 'cactus',
               'author' => 'pasquale Papagni',
               'text' => 'is a simple, powerful, collaborative'
          ]
     ],
]
     ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


     <?php foreach ($cards as $key => $card) { ?>


          <h3>
               <?php echo $key ?>
          </h3>

          <div class="d-flex">
               <?php foreach ($card as $items) { ?>
                    <div class="card d-flex p-2 m-2" style="width: 18rem;">
                         <div class="card-body">
                              <h5 class="card-title">
                                   <?php echo $items['author'] ?>
                              </h5>
                              <h6 class="card-subtitle mb-2 text-body-secondary">
                                   <?php echo $items['title'] ?>
                              </h6>
                              <p class="card-text">
                                   <?php echo $items['text'] ?>.
                              </p>
                         </div>
                    </div>
               <?php } ?>
          </div>
     <?php } ?>

</body>

</html>