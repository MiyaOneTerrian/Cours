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
    <br>
    <?php
      require_once ("controler/controler.php");
      $result = selectProduits();

      require_once ("vue/vue.php");
     ?>
  </center>
</body>
</hml>
