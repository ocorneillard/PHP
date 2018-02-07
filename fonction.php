<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $str = "this is a test" ;
    $first = $str[0] ;
    echo $first ;
    ?>
   <h2>Rajouter une majuscule :</h2>
   <?php
    $name = "emilie" ;
    $name = ucfirst($name);
    echo $name;
    ?>
    <h3>Date :</h3>
    <?php
    echo date("D, d M Y H:i  s");

    ?>
    <h2>
      Résultat d'addition sans fonction :
    </h2>
    <form class="" action="#" method="post">
      <input type="number" name="argument1" value="">
      <input type="number" name="argument2" value="">
      <input type="submit" name="a" value="Envoyer">
    </form>
    <?php
    $argument1 = $_POST["argument1"] ;
    $argument2 = $_POST['argument2'] ;
    $resultat = $argument1 + $argument2 ;
    echo "<br>" . $resultat ;
     ?>
     <h2>Avec fonction :</h2>
     <form class="" action="#" method="post">
       <input type="number" name="argument3" value="">
       <input type="number" name="argument4" value="">
       <input type="submit" name="b" value="Envoyer">
     </form>

     <?php
     $argument3 = $_POST["argument3"];
     $argument4 = $_POST["argument4"];
      function addition($argument3,$argument4) {
        if (is_numeric($argument3) AND is_numeric($argument4)) {
        $argument5 = ($argument3 + $argument4) ;
        return $argument5 ;
      } else {
        echo "Erreur, argument non numérique";
      }
      }

      echo addition($argument3,$argument4) ;
     ?>

     <h2>Fonction mettant chaque lettre en début de mot en majuscule</h2>

     <?php
     $p1 = "belle et concentrée, ombre dormante, éclairée." ;
     $m = explode(" ", $p1);
     echo $p1 ;
     ?>
     <span><strong>Phrase de base</strong></span>
     <?php
     function splitInit($m1) {
       $initial = substr($m[0], 0) ;
       return $initial;
     }
     echo splitInit($m1);

     // Exemple 1
     $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
     $pieces = explode(" ", $pizza);
     echo $pieces[0]; // piece1
     echo $pieces[1];
     ?>
  </body>
</html>
