<!-- ## Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

     if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["date"])) {

          // var_dump($_GET);
          $nameLen = strlen($_GET['name']);

          if ($nameLen > 3) {
               $name_succ = "";
          } else {
               $name_succ = "il nome deve essere lungo minimo 3 lettere";
          };

          
          $nan = is_nan(acos($_GET["date"]));
          if ($nan == 1) {
               $data_succ = "";
          } else {
               $data_succ = "la data deve essere una cifra";
          };

          if (str_contains(($_GET["email"]), '@')) {
               $email_succ = '';
           } else {
               $email_succ = 'l email deve contenere una @';
           };

           if(str_contains(($_GET["email"]), '@') && $nan == 1 && $nameLen > 3){
               $accesso = "Accesso riuscito";
           }
           else{
               $accesso = "Accesso negato"; 
           }
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>snack 2</title>
</head>

<body>

     <div>
          <form action="index.php" method="GET ">
               <input type="text" id="email" name="email" placeholder="email">
               <input type="text" id="name" name="name" placeholder="name">
               <input type="text" id="date" name="date" placeholder="anno di nascita">
               <button type="submit">invia</button>
          </form>

          <?php if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["date"])) { ?>
          <div>
               <?php echo $name_succ ?>
          </div>
          <div>
               <?php echo $data_succ ?>
          </div>
          <div>
               <?php echo $email_succ ?>
          </div>
          <h2>
               <?php echo $accesso ?>
          </h2>
          <?php } ?>
     </div>
</body>

</html>