<?php
  session_start();
 ?>
<html>
<head>
  <title>Site gestion stock</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
</head>

<header>
  <nav class="navbar navbar-dark bg-dark">
    <h1 style="color: #ecf0f1;" class="navbar-brand">Gestion de stock</h1>
  </nav>
</div>
</header>
<body class="bg-dark">
  <center>
    <h2 style="color: #ecf0f1;">Veuillez vous identifier</h2>
    <?php
        require_once ("controler/controler.php");
        $unControler = new Controler ("localhost", "base", "root", "");
        require_once ("vue/connexion.php");
        if(isset($_POST['SeConnecter'])) {
          $login = $_POST['login'];
          $mdp = $_POST['mdp'];
          $result = $unControler->verifConnexion($login, $mdp);          // var_dump($result);
        if (isset($result['nom'])) {
          // creation session
          $_SESSiON['login'] = $result['login'];
          $_SESSION['nom'] = $result['nom'];
          $_SESSION['prenom'] = $result['prenom'];

          header('Location: menu_site.php?page=1');
        }
        else {
          echo "veuillez vérifier vos identifiants";
        }
      }
     ?>
</center>
</body>
</html>
