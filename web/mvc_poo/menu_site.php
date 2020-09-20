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
	</center>
<a href="menu_site.php?page=1">Gestion Produits</a><br>
<a href="menu_site.php?page=2">Gestion Categorie</a><br>
<a href="menu_site.php?page=3">Gestion Utilitaires</a><br>
<a href="menu_site.php?page=4">Se Deconnecter</a><br>

<center>
	<?php
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else{
		$page=0;
	}
	switch($page){
		case 1 : require_once("gestionproduit.php");break;
		case 2 : require_once("gestioncategorie.php");break;
		case 3 : require_once("gestionutilisateur.php");break;
		case 4 : session_destroy();
					header("location: index.php");
					break;
	}

	?>
</center>
</body>
</html>