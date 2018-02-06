<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Quel est votre âge ?</h3>
    <form class="" action="#" method="get">
      <input type="number" name="age" value=""><br />

    <h3>Homme ou femme ?</h3>
      <label for="him">Homme :</label>
      <input id="him" type="radio" name="sexe" value="H"> <br />
      <label for="her"> Femme :</label>
      <input id="her" type="radio" name="sexe" value="F"> <br />
      <label for="langue"> Parlez-vous la langue de Shakespeare ?</label> <br>
      OUI <input id="langue" type="radio" name="lg" value="en"> <br>
      NON <input id="langue" type="radio" name="lg" value="fr">
    <br>
      <input type="submit" name="a" value="Submit">
    </form>
      <br>
    <?php
if ($_GET["lg"] == "fr") {
    if (!empty($_GET['age']) && isset($_GET['age'])) {
                  if (($_GET['age'] < 0) || ($_GET['age'] == 0)) {
                  echo "Même pas né ! Donnez la bonne valeur !";
                  }

                  else if ($_GET['age'] <= 12) {

                                        if ($_GET['sexe'] == "H"){
                                        echo "Salut petit !";
                                      } else {
                                        echo "Salut petite !";
                                      }

                  }

                  else if ($_GET['age'] <= 18) {
                                        if ($_GET['sexe'] == "H"){
                                        echo "Salut l'adolescent !";
                                      } else {
                                        echo "Salut l'adolescente !";
                                      }

                  }

                  else if ($_GET['age'] <= 115) {
                                        if ($_GET['sexe'] == "H"){
                                        echo "Bonjour monsieur !";
                                      } else {
                                        echo "Bonjour madame !";
                                      }

                  }
                  else if ($_GET['age'] > 115) {
                                      if ($_GET['sexe'] == "H"){
                                      echo "à quoi bon spécifier le sexe, monsieur, vous êtes
                                      trop vieux, on ne le voit plus..";
                                    } else {
                                      echo "Regarde, elle est toute fripée...";
                                    }
                  }
    }
}

else {
  if (!empty($_GET['age']) && isset($_GET['age'])) {
                if (($_GET['age'] < 0) || ($_GET['age'] == 0)) {
                echo "Not even born, please correct the answer !";
                }

                else if ($_GET['age'] <= 12) {

                                      if ($_GET['sexe'] == "H"){
                                      echo "Hi little guy !";
                                    } else {
                                      echo "A bit young for me... Hi princess !";
                                    }

                }

                else if ($_GET['age'] <= 18) {
                                      if ($_GET['sexe'] == "H"){
                                      echo "Little guy, you're almost a big boy !";
                                    } else {
                                      echo "Hi my dear, almost a woman !";
                                    }

                }

                else if ($_GET['age'] <= 115) {
                                      if ($_GET['sexe'] == "H"){
                                      echo "Mister !";
                                    } else {
                                      echo "Miss !";
                                    }

                }
                else if ($_GET['age'] > 115) {
                                    if ($_GET['sexe'] == "H"){
                                    echo "Damn to old to specify your sex...";
                                  } else {
                                    echo "Quick ! You don't have enough time old lady !";
                                  }
                }
  }
}


    ?>
  </body>
</html>
