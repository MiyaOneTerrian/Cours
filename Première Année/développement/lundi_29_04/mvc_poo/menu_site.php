<head>
    <?php
    require("vue/header.php")
    ?>
</head>
<header>
  <nav class="navbar navbar-dark bg-dark">
    <h1 class="navbar-brand">Gestion de stock</h1>
    <a href='menu_site.php?page=1'>Gestion des produits</a>
    <a href='menu_site.php?page=2'>Gestion des catégories</a>
    <a href='menu_site.php?page=3'>Gestion des utilisateurs</a>
      <button class="btn btn-dark"><a style="color: #ecf0f1;" href="menu_site.php?page=4">Déconnexion</a></button>
<br>
      <br>
      <?php
        if(isset($_GET['page'])) {
          $page = $_GET['page'];
        }
        else {
          $page = 0;
        }
        switch($page) {
          case 1 : require_once("gestionproduit.php");
          break;
          case 2 : require_once ("gestioncategorie.php");
          break;
          case 3 : require_once ("gestionutilisateur.php");
          break;
          case 4 : require_once("model/deconnexion.php");
          break;
        }
       ?>

  </nav>
</header>
