<?php
  include ("produit.class.php")
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Produits</title>
  </head>
  <body class="bg-dark">
    <h1 class="text-light">Gestion de produits</h1>
      <form>
  <div class="form-group">
    <label class="text-light" for="ref">Référence</label>
    <input type="text" class="form-control" id="ref" placeholder="Référence", name="ref">
  </div>
            <div class="form-group">
    <label class="text-light" for="des">Désignation</label>
    <input type="text" class="form-control" id="des" placeholder="Désignation", name="des">
  </div>
            <div class="form-group">
    <label class="text-light" for="prix">Prix</label>
    <input type="text" class="form-control" id="prix" placeholder="prix", name="prix">
  </div>
            <div class="form-group">
    <label for="qte" class="text-light">Quantité</label>
    <input type="text" class="form-control" id="qte" placeholder="Quantité", name="qte">
  </div>
          <button type="submit" class="btn btn-primary mb-2" name="Valider" value="Valider">Valider</button>
          <button type="reset" class="btn btn-primary mb-2" name="Annuler" value="Annuler">Annuler</button>
      </form>
      
    <?php
                if (isset($_POST['Valider'])) {
                    // instanciation de la classe produit
                    $unProduit = new Produit();

                    // renseigner les attributs
                    $unProduit->renseigner($_POST);

                    // afficher tous les attributs
                    echo $unProduit->afficher();
                    
                    // calcul du chifre d'affaires
                    echo "<h5 class='text-light'>Chiffre d'affaires :".$unProduit->caculer();"</h5>";
                    
                    // augmenter la qte de 5 :
                    $unProduit->setQte($unProduit->getQte() + 5);
                    
                    //On afficher la nouvelle Qte :
                    echo $unProduit->afficher();

                }
            ?>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>