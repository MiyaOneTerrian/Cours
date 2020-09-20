<?php
	session_start();
?>
<html>
<head>
	<title>Gestion des produit</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Site de gestion destock</h1>
		<h2>Veuillez vous identifier !</h2>

		<?php
			require_once("Controleur/controlleur.php");
			$unControleur = new Controleur("localhost","base","root","");
			require_once("Vue/connexion.php");
			if(isset($_POST['SeConnecter'])){
				$login=$_POST['login'];
				$mdp=$_POST['mdp'];
				$resultat=$unControleur->verifConnexion($login,$mdp);
				//var_dump($resultat);
				if(isset($resultat['nom'])){
					//creation session
					$_SESSION['login']=$resultat['login'];
					$_SESSION['nom']=$resultat['nom'];
					$_SESSION['prenom']=$resultat['prenom'];

					header("location: menu_site.php");
				}else{
					echo"Veuillez verifier vos identifiant";
				}
			}

		?>
	</center>
</body>
</html>