<?php
	//appel de la methode 
	require_once("Modele/modele.php");
	class Controleur{

		private $unModele;

		public function __construct($serveur,$bdd,$user,$mdp)
		{
			//instanciation de la class modele
			$this->unModele = new Modele($serveur,$bdd,$user,$mdp);
		}

		function selectProduits()
	{
		$resultats = $this->unModele->selectAll();
		//on peut realiser des traitements avant l'affichage
		return $resultats;
	}
	public function insertProduit($tab){
		$this->unModele->insertProduit($tab);
	}
	public function deleteProduit($idProduit){
		$this->unModele->deleteProduit($idProduit);
	}
	public function verifConnexion($login,$mdp){
		return $this->unModele->verifConnexion($login,$mdp);
	}
	public function insertCategorie($tab){
		$this->unModele->insertCategorie($tab);
	}
	public function deleteCategorie($idcategorie){
		$this->unModele->deleteCategorie($idcategorie);
	}
	public function selectCategorie(){
		$resultats = $this->unModele->selectCategorie();
		//on peut realiser des traitements avant l'affichage
		return $resultats;
	}
	public function insertUtilisateur($tab){
		$this->unModele->insertUtilisateur($tab);
	}
	public function deleteUtilisateur($iduser){
		$this->unModele->deleteUtilisateur($iduser);
	}
	public function selectUtilisateur(){
		$resultats = $this->unModele->selectUtilisateur();
		//on peut realiser des traitements avant l'affichage
		return $resultats;
	}

}
?>