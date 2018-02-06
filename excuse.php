<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Montserrat:400,700">
    <title>Excuse prédéfinie</title>
    <link rel="stylesheet" href="excuse.css">
  </head>
  <body>
    <section class="header">
      <h2>Le générateur d'excuses </h2>
      <form action="#" method="post">
      <h3> Quel est le nom de votre enfant ? </h3>
        <input type="text" name="nom" value="" />
      <h3> Le nom de votre institutrice ?</h3>
        <input type="text" name="instit" value="" />

    </section>

    <section class="absence">
      <h3> La raison de son absence : </h3>
      <ul>
        <li>
          <input type="radio" name="absence" value="0" /> Vomissements
        </li>

        <li>
          <input type="radio" name="absence" value="1" /> Décès de mon chien
        </li>

        <li>
          <input type="radio" name="absence" value="2" /> Je courais après mon chien,
          qui courait après mon chat
        </li>

        <li>
          <input type="radio" name="absence" value="3" /> Je me suis cogné contre la cuvette
          de mes toilettes
        </li>
      </ul>
      </section>
      <input class="btn" type="submit" value="Mon excuse à cp" />
    </form>

    <div class="réponse">

    <p> Chère Madame <?= $_POST['instit'] ?>, nous sommes dans le regret de vous annoncer
      que notre enfant, <?= $_POST['nom'] ?>, sera absent aujourd'hui. En effet, il a
      malheureusement
      <?php
      if ($_POST['absence'] == "0") {
        echo "vomi toute la nuit, sans jamais pouvoir relever la tête.";
      }
           else if ($_POST['absence'] == "1") {
            echo "perdu son chien, Rex. Il est décédé durant cette nuit, après
            que notre enfant l'ait confondu avec son doudou.";
          }
          else if ($_POST['absence'] == "2") {
            echo "couru après son chien, qui lui, courait après son chat... ça a duré longtemps.";
          }
      else {
        echo " cogné sa tête contre la cuvette des WCs. Depuis, il s'imagine dans
        une dimension parallèle. <br />";
      }
      echo "Fait le " . date("d-M-Y"); ?>
    </div>
  </body>
</html>
