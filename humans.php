<html>
  <head><title>Hi!</title></head>
  <body>
    <?php
      $name="Dorian";
      $age="23";
      $faim="j'ai faim";
      $eyecolor="brun";
      $famille= array(0=>"Maman", 2=>"Aude",3=>"grand-mère");
    ?>
    <h1>Bonjour, je m'appelle <?php echo $name; ?>, j'ai <?php echo $age; ?>, j'ai <?php echo $faim ?></h1>
    <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
  </body>
</html>
