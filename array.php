<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $famille = [ "Soeur", "Mère", "Grand-mère", "Tonton", "tata", "titi" ] ;
    print_r($famille);
    ?>
    <br>


    <?php
    $film = ["Cloud Atlas", "Matrix", "Kill Bill", "Tree of Life", "Gladiator", "Voyage de Chihiro"];
    echo $film[3] ;

    $moi = [
      "prénom" => "Dorian",
      "nom" => "Collier",
      "age" => 23,
      "motivé?" => true,
      "nombre de doigts" => 10,
      "aime la vie" => true,
    ] ;
    ?>
    <br> <br>
    <?php
    $pronoms_personnels = array ('Je ', 'Tu ', 'Il/Elle ','Nous ', 'Vous ', 'Elles/Ils ');
    foreach ($pronoms_personnels as $index => $n) {
      echo $n ;
      if ($index == 0) {
        echo "code " ;
      }
      else if ($index == 1) {
        echo "codes " ;
      }
      else if ($index == 2) {
        echo "code " ;
      }
      else if ($index == 3) {
        echo "codons " ;
      }
      else if ($index == 4) {
        echo "codez " ;
      }
      else {
        echo "codent " ;
      }
    }

    $nombre_de_lignes = 1;
echo "<br />";

while($number <= 120)
{
  echo $number. " ";
  $number++;
  if ($number % 10 == 0) {
    echo "<br />";
  }

}


echo "<br> <br> <br> <br>";

for($number = 1; $number <= 120;$number++) {
  echo $number." ";
  if ($number % 12 == 0) {
    echo "<br />" ;
  }

}

$classe = ['', 'Arnaud Duchemin', 'Bourloo Michael', 'Bryan Mootosami', 'Canivet Geoffrey', 'Claude Jenssen', 'Sébastien Dacruz Mathias', 'Damien Bernard', 'Daniel Muyshond', 'David Thewissen', 'Félicien Manzi', 'Félix Namêche', 'Frédéric Binon', 'Haulin Daphné', 'Jacques Bernard', 'Jennifer Van Kelst', 'Jérome Greitzer', 'Jordan Flament', 'Kévin Charlier', 'Kévin Dubreuq', 'Ludovic Cecotti', 'Mathieu Leers', 'Mignot Morgan', 'Philippe Hernaux', 'Romain Grotard', 'Sarah Klewiec', 'Steve Van Essche' ] ;

foreach($classe as $index => $n) {
  echo $n. "<br> " ;
  if ($index % 3 == 0) {
    echo "<br>";
  }
} ?>




  </body>
</html>
