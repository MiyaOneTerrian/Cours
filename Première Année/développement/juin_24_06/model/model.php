<?php
	class Modele {
		private $pdo;
		public function __construct($serveur,$bdd,$user,$mdp) {
			try {
				$this->pdo = New Pdo("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
			}
			catch(PDOException $exp) {
				echo "Erreur de connexion";
				$this->pdo=null;
			}
		}

		public function verifConnexion($email,$mdp) {
			if($this->pdo!=null) {
				$requete="select * from utilisateur where email= :email and mdp = :mdp;";
				$donnee=array(":email"=>$email,":mdp"=>$mdp);
				$select= $this->pdo->prepare($requete);
				$select->execute($donnee);
				$resultat=$select->fetch();
				return $resultat;
			}
		}

		public function getGrainSel () {
			if($this->pdo!=null) {
				$requete="select nb from grainSel;";
				$select= $this->pdo->prepare($requete);
				$select->execute();
				$resultat=$select->fetch();
				return $resultat;
		}
	}
}

?>
