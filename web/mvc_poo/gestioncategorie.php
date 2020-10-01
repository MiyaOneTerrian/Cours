
<html>
<head>
  <title>Site de gestion de stock </title>
  <meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Gestion des categorie</h1>
		<h2>Liste des Categorie disponibles</h2>
		<?php
		if(isset($_SESSION['login']) && $_SESSION['login']=="admin")
		{
			require_once("Controleur/controlleur.php");
			$unControleur = new Controleur("localhost","base","root","");
			$resultats= $unControleur->selectCategorie();
			require_once("Vue/vueInsertCat.php");
			if(isset($_POST['Valider']))
			{
				$unControleur->insertCategorie($_POST);
			}
			require_once("Vue/vueSuppCat.php");
			if(isset($_POST['Supprimer'])){
				$unControleur->deleteCategorie($_POST['idcategorie']);
			}

			require_once("Vue/vueCat.php");
		}else{
			echo"Connectez vous!";
		}
		?>
	</center>
</body>
</html>