<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h3>Pronom + suffixe + terminaison en foreach :</h3>
    <?php
    $pronom = ["Je", "Tu", "Il", "Nous", "Vous", "Ils"] ;

    foreach ($pronom as $pr) {
      echo $pr . " cod" ;

        if ($pr == $pronom[0]) {
          echo "e";
        }
          else if ($pr == $pronom[1]) {
            echo "es";
          }
          else if ($pr == $pronom[2]) {
            echo "e";
          }
          else if ($pr == $pronom[3]) {
            echo "ons";
          }
          else if ($pr == $pronom[4]) {
            echo "ez";
          }
        else {
          echo "ent";
        }
      echo "<br /> ";
    }
    ?>
    <br><br>
    <h3>Table de 1 à 120</h3>
    <table>

  <?php
    $number = 1;

    while($number <= 120) {

        if($number % 12 == 0) {
          echo "<tr>" ;
        }

      echo "<td>" ;
      echo $number ;
      $number++;
      echo "</td>" ;

    }
    ?>
  </table>

  <?php

  for ($number=1; $number <= 120; $number++)
  {
    echo $number." " ;

      if ($number % 10 == 0)
      {
        echo "<br />" ;
      }
  }
   ?>

   
  </body>
</html>
