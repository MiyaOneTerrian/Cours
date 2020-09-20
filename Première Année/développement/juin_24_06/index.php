  <?php
    require_once("controller/controleur.php");
    $unControleur = new Controleur ("localhost", "juin", "root", "");
   ?>

   <html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <title>Site de Juin</title>
      <meta charset="utf-8" />
    </head>
    <body class="bg-dark">
      <nav class="navbar navbar-dark bg-dark mx-auto" style="-webkit-box-shadow: 0 4px 3px -3px #000; -moz-box-shadow: 0 4px 3px -3px #000; box-shadow: 0 4px 3px -3px #000; text-align:center;">
    <h1 class="navbar-brand mx-auto" href="#">Tp du site de Juin</h1>
    </nav>
      <center style="color:white;">
        <?php
          require_once ("view/viewConnexion.php");
          if (isset($_POST['Valider'])) {
            $resGrain = $unControleur -> getGrainSel();
            $nb = $resGrain['nb'];
            $mdp = md5 ($_POST['mdp'].$nb);
            $email = $_POST['email'];
            $resultat = $unControleur->verifConnexion($email,$mdp);
            if (isset($resultat['nom'])) {
              echo "<p style='color:white;'>vous êtes connectés M. ".$resultat['nom']."</p>";
            }
            else {
              echo "<p style='color:white;'>Veuillez Vérifier vos identifiants</p>";
            }
          }
         ?>
      </center>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
   </html>
