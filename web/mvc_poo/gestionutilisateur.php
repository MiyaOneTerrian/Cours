
<html>
<head>
  <title>Site de gestion de Utilisateur </title>
  <meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Gestion des User</h1>
		<h2>Liste des User disponibles</h2>
		<?php
		if(isset($_SESSION['login']) && $_SESSION['login']=="admin")
		{
			require_once("Controleur/controlleur.php");
			$unControleur = new Controleur("localhost","base","root","");
			$resultats= $unControleur->selectUtilisateur();
			require_once("Vue/vueInsertUser.php");
			if(isset($_POST['Valider']))
			{
				$unControleur->insertUtilisateur($_POST);
			}
			require_once("Vue/vueSuppUser.php");
			if(isset($_POST['Supprimer'])){
				$unControleur->deleteUtilisateur($_POST['iduser']);
			}

			require_once("Vue/vueUser.php");
		}else{
			echo"Connectez vous!";
		}
		?>
	</center>
</body>
</html>