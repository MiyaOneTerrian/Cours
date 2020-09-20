<br>
<br>
<body class="bg-dark">
<div class="container" style="width: 50%; margin: auto; padding-top: 2%;">
     <h2 class="text-white"><ins>Liste des produits disponibles</ins></h2>
    <br>
    <br>
    <?php
    if(isset($_SESSION['nom']) == null) {
      header('Location: index.php');
    }
        echo "<div class='container'";
                echo "<div class='row'>";
      require_once ("controler/controler.php");
      // instanciation de la classe controler
      $unControler = new Controler("localhost", "base", "root", "");
      $lescategs = $unControler->selectCategories();
              echo "<div class ='col-4' >";
            require_once ("vue/insert.php");
            if(isset($_POST['Valider'])){
              $unControler->insertProduit($_POST);
            }
            echo "</br>";
            echo "</div>";
            echo "<div class='col-4'";
            require_once ("vue/supprimer.php");
            if(isset($_POST['Supprimer'])) {
              $unControler->deleteProduit($_POST['idproduit']);
            }
            echo "</div>";
            echo "</br>";

      // Appel de la methode du controler
      echo "<div class='col-4'>";
      $result = $unControler->selectProduits();
      require_once ("vue/vue.php");
      echo "</div>";
      echo "</div>";
      echo "</div>";
     ?>
</div>
</body>
</html>
