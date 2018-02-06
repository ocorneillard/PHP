<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $date = date('H:i');
     if (($date >= "05:00") AND ($date <= "09:00")) {
      echo "Bonjour !";
    }
        else if (($date >= "09:01") AND ($date <= "12:00")) {
          echo "Bonne journée !" ;
        }

        else if (($date >= "12:01") AND ($date <= "16:00")) {
          echo "Bon après-midi !" ;
        }

        else if (($date >= "16:01") AND ($date <= "21:00")) {
          echo " Bonne soirée !" ;
        }
      else  {
        echo "Bonne nuit !" ;
      }
    ?>
  </body>
</html>
