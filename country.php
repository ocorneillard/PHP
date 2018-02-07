<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="#" method="post">

      <select class="" name="cy">
          <?php
      $monde = ['BE' => "Belgique", 'FR' => "France", "DE" =>"Allemagne", "CHN" => "Chine", "RUS" => "Russie", "ZAF" => "Afrique du Sud", "IND" => "Inde", "EN" =>"Angleterre", "ISL" => "Islande", "SE" => "Suède"] ;

      foreach ($monde as $index => $n) {
        echo '<option name="pays" value="'. $index .'">' . $n . "</option>" ;
      }
      ?>
      </select>
      <input type="submit" name="btn" value="Envoyer">
   </form>
   <?php echo $_POST["cy"] ; ?>

  </body>
</html>
