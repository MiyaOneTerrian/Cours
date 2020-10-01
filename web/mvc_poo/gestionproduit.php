
<html>
<head>
  <title>Site de gestion de stock </title>
  <meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Gestion de stock</h1>
		<h2>Liste des produits disponibles</h2>
		<?php
		if(isset($_SESSION['login']) && $_SESSION['login']=="admin")
		{
			require_once("Controleur/controlleur.php");
			$unControleur = new Controleur("localhost","base","root","");
			$resultats= $unControleur->selectProduits();
			$lesCate= $unControleur->selectCategorie();
			require_once("Vue/vueInsert.php");
			if(isset($_POST['Valider']))
			{
				$unControleur->insertProduit($_POST);
			}
			require_once("Vue/supp.php");
			if(isset($_POST['Supprimer'])){
				$unControleur->deleteProduit($_POST['idproduit']);
			}

			require_once("Vue/vue.php");
		}else{
			echo"Connectez vous!";
		}
		?>
	</center>
</body>
</html>