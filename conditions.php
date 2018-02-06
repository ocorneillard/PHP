<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $chambre_est_sale = 4;
    if ($chambre_est_sale == 1) {
      echo "Ta chambre n'est pas très bien nettoyée !";
    }

        elseif($chambre_est_sale == 2) {
          echo "Elle est vraiment sale...";
        }
        elseif ($chambre_est_sale == 3) {
          echo "Elle est hideuse..";
        }

        elseif ($chambre_est_sale == 0) {
          echo "RAS, ta chambre est propre :)." ;
        }
        elseif ($chambre_est_sale < 0) {
          echo "La valeur rentrée n'est pas correcte.";
        }
        elseif ($chambre_est_sale > 3) {
          echo "La valeur rentrée n'est pas correcte.";
        }
    else {
      echo "Impossible de faire pire.." ;
    } ?>


  </body>
</html>
