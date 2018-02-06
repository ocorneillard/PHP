<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $hide = "" ;
    $age = "25" ;
    $sexe = true ;

    if ((($age >= 21) AND ($age <= 40) AND ($sexe=true))) {
      echo "Bonjour, bienvenue parmi nous !";
    } else {
      echo "Désolé, vous ne remplissez pas les critères de sélection.";
    }

    echo "<br> test sans ELSE : <br>";
    if ((($age >= 21) AND ($age <= 40) AND ($sexe=true))) {
      echo "Bonjour, bienvenue parmi nous !";
    }
    ?>


  </body>
</html>
