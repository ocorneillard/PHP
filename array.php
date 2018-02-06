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

while ($nombre_de_lignes <= 100)
{
    echo $nombre_de_lignes . ": Je ne dois pas regarder les mouches voler quand j'apprends le PHP.<br />";
    $nombre_de_lignes++;
}
while ($number <= 120)
{
  echo $number. " ";
  $number++;
}

for($number)

    ?>
  </body>
</html>
