<?php
	require_once("Model/model.php");
	class Controleur {
		public function __construct($serveur,$bdd,$user,$mdp){
			$this->unModele = new Modele($serveur,$bdd,$user,$mdp);
		}

		public function verifConnexion($email,$mdp) {
			return $this->unModele->verifConnexion($email,$mdp);
		}

		public function getGrainSel() {
			return $this->unModele->getGrainSel();
		}
	}

?>
