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

    <h2>Résultat d'addition sans fonction :</h2>

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
          }else{
            echo "Erreur, argument non numérique";
          }
      }

      if ($argument3 + $argument4 == "") {
          echo "" ;
      }else{
        echo addition($argument3,$argument4) ;
      }
    ?>

     <h2>Fonction mettant chaque lettre en début de mot en majuscule</h2>

     <div><strong>Phrase de base</strong></div>
     <?php
       $p1 = "belle et concentrée, ombre dormante, eclairée." ;
       echo $p1 ;
     ?>

     <div class="">
       <strong>Retourne les initiales de chaque mot en majuscule :</strong>
     </div>

     <?php
      $mots = explode(" ", $p1);

      function initial($a)
      {
          foreach ($a as $i => $m)
          {
             $a[$i] = ucfirst($m[0]);
          }

        return implode("", $a) ;
      }

    echo initial($mots);

     ?>
     <div class="">
       <strong>Remplacement de AE : </strong>
     </div>

     <?php
     // Première manière : input, ajouter +1 à $ow / $un, s'arrêter à length , faire un tableau avec les données. Changer les ae en "æ", remettre les données ensemble. Afficher le résultat.
      $caeco = "cæcotrophie" ;
      $chaeni = "chænichthys";
      $micro = "microsphæra" ;
      $sphaer = "sphærotheca";
      $ow = 0 ;
      $un = 1 ;
      $length = strlen($caeco);
      echo $length ;
      echo substr($caeco, $ow, $un);

      // Deuxieme manière = exploser, boucle, changer , imploser.
      $aexploser = [ "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" ] ;
      $a = explode("ae", $aexploser) ;
     ?>
  </body>
</html>
