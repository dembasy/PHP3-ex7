<?php
// definition de la variable start initialiser a 20
  $start = 1;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex7</title>
  </head>
  <body>
    <p>
      <?php
      // definition de la boucle grace a while,
      // on reprend la variable et on lu indique que tant qu'elle est superieur ou egal a 0 on affiche le message c'est presque bon
      // pour l'incrémentation du résultat, on reprend la variable start plus on l'a décrémente
        while ($start <= 100) {
          echo 'On tient le bon bout';
          $start = $start + 15;

        }
       ?>
    </p>
  </body>
</html>
