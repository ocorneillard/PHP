<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $note = $_GET["note"] ;

    if (($note > 0) AND ($note <= 4)) {
      echo "Ce travail est nul" ;
    }

    else if (($note >= 5) AND ($note <= 9)) {
      echo "Ce travail n'est pas terrible" ;
    }

    else if ($note == 10) {
      echo "Tout juste !" ;
    }

    else if (($note >= 11) AND ($note <= 14)) {
      echo "C'est pas mal." ;
    }

    else if (($note >= 15) AND ($note <= 18)) {
      echo "Très bien" ;
    }
    else {
      echo "t'as triché ou quoi ?";
    }

    echo  "<br> Version switch : <br>";

    switch($note) {
        case 0:
        echo "Ce travail est nul" ;
        break;
        case 1:
        echo "Ce travail est nul" ;
        break;
        case 2:
        echo "Ce travail est nul" ;
        break;
        case 3:
        echo "Ce travail est nul" ;
        break;
        case 4:
        echo "Ce travail est nul" ;
        break;
        case 5:
        echo "Ce travail n'est pas terrible" ;
        break;
        case 6:
        echo "Ce travail n'est pas terrible" ;
        break;
        case 7:
        echo "Ce travail n'est pas terrible" ;
        break;
        case 8:
        echo "Ce travail n'est pas terrible" ;
        break;
        case 9:
        echo "Ce travail n'est pas terrible";
        break;
        case 10:
        echo "Tout juste" ;
        break;
        case 11:
        echo "C'est pas mal." ;
        break;
        case 12:
        echo "C'est pas mal." ;
        break;
        case 13:
        echo "C'est pas mal." ;
        break;
        case 14:
        echo "C'est pas mal." ;
        break;
        case 15:
        echo "Très bien" ;
        break;
        case 16:
        echo "Très bien" ;
        break;
        case 17:
        echo "Très bien" ;
        break;
        case 18:
        echo "Très bien";
        break;
        case 19:
        echo "t'as triché ou quoi ?";
        break;
        case 20:
        echo "t'as triché ou quoi ?";
        break;

    }
    ?>
  </body>
</html>
