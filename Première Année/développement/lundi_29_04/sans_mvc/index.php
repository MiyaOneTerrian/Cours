<html>
<head>
  <title>Site gestion stock</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
</head>

<header>
  <nav class="navbar navbar-dark bg-dark">
    <h1 class="navbar-brand">Gestion de stock</h1>
  </nav>
</div>
</header>

<body class="bg-dark">
  <center>
    <h2 class="text-white"><ins>Liste des produits disponibles</ins></h2>
    <br>
  </br>
    <?php
      // connection a la base de donnee en utilisant PDO
      $pdo = new PDO ("mysql:host=localhost;dbname=base","root","");
      $requete = "select * from produit;";

      // preparation de la requete avant execution
      $select = $pdo->prepare($requete);

      // exection de la requete
      $select->execute();

      // extraction des données
      $result = $select->fetchAll();

      //var_dump($result);

      // affichage
      echo
      "<table class ='table table-dark'>
      <thead>
        <tr>
          <th scope='col'>id Produit</td>
          <th scope='col'>Designation</td>
          <th scope='col'>Prix</td>
          <th scope='col'>Quantite</td>
        </tr>
      </thead>
      ";

      foreach ($result as $unResultat) {
        echo
        "<tr>
          <td>".$unResultat['idproduit']."</td>
          <td>".$unResultat['designation']."</td>
          <td>".$unResultat['prix']."</td>
          <td>".$unResultat['quantite']."</td>
        </tr>";
      }
      echo "</table>";
    ?>
  </center>
</body>
</hml>
