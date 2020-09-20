<?php
class Model {
  private $unPdo;
  public function __construct($server, $bdd, $user, $mdp) {
    $this->unPdo = null;
      try {
      // connection a la base de donnee en utilisant PDO
      $this->unPdo = new PDO ("mysql:host=".$server.";dbname=".$bdd,$user,$mdp);
    }
    catch(PDOExeption $exp) {
      echo "Erreur de connection à la base de données.";

      // afficher le message d'erreur php
      echo $exp->getMessage();
    }
  }

  public function selectAll() {
      if($this->unPdo != null) {
      // selection de toutes les données
      $requete = "select * from produit;";
      // preparation de la requete avant execution
      $select = $this->unPdo->prepare($requete);

      // exection de la requete
      $select->execute();

      // extraction des données
      $result = $select->fetchAll();
      return $result;
    }
  }
  public function insertProduit($tab) {
    if ($this->unPdo != null) {
      $requete = "insert into produit values (null, :designation, :prix, :quantite)";
      $donnees = array(":designation"=>$tab['designation'],
                       ":prix"=>$tab['prix'],
                       ":quantite"=>$tab['quantite']);
      $insert = $this->unPdo->prepare($requete);
      $insert->execute($donnees);
    }
  }

  // supprimer données
  public function deleteProduit ($idProduit) {
    if ($this->unPdo != null) {
      $requete = "delete from produit where idProduit = ".$idProduit.";";
      $donnees = array(":idProduit"=>$idProduit);
      $delete = $this->unPdo->prepare($requete);
      $delete->execute($donnees);
    }
  }

  public function verifconnextion ($login, $mdp) {
    if ($this->unPdo != null) {
      $requete = "select * from utilisateur where login = :login and mdp = :mdp;";
      $donnees = array(":login"=>$login, ":mdp"=>$mdp);
      $select = $this->unPdo->prepare($requete);
      $select->execute($donnees);
      $result = $select->fetch();
      return $resultat;
    }
  }

  
/*********************** Categorie **********************/
public function insertCategorie ($tab)
{
  if ($this->unPdo != null) {
      $requete = "insert into categorie values (null, :libelle)";
      $donnees = array(":libelle"=>$tab['libelle'],
                       ":prix"=>$tab['prix'],
                       ":quantite"=>$tab['quantite']);
      $insert = $this->unPdo->prepare($requete);
      $insert->execute($donnees);
    }
  }


 public function deleteCategorie ($idcategorie)
 {
    if ($this->unPdo != null) {
      $requete = "delete from categorie where idcategorie = ".$idcategorie.";";
      $donnees = array(":idcategorie"=>$idcategorie);
      $delete = $this->unPdo->prepare($requete);
      $delete->execute($donnees);
    }
 }
 public function selectCategorie ()
 {
      if($this->unPdo != null) {
      // selection de toutes les données
      $requete = "select * from categorie;";
      // preparation de la requete avant execution
      $select = $this->unPdo->prepare($requete);

      // exection de la requete
      $select->execute();

      // extraction des données
      $result = $select->fetchAll();
      return $result;
    }
 } 

 /****************** Utilisateurs ********************/
public function insertUtilisateurs ($tab)
{
  if ($this->unPdo != null) {
      $requete = "insert into utilisateur values (null, :login, :mdp, :nom, :prenom)";
      $donnees = array(":login"=>$tab['login'],
                       ":mdp"=>$tab['mdp'],
                       ":nom"=>$tab['nom']);
                       ":prenom"=>$tab['prenom']);
      $insert = $this->unPdo->prepare($requete);
      $insert->execute($donnees);
    }
  }


 public function deleteUtilisateurs ($iduser)
 {
    if ($this->unPdo != null) {
      $requete = "delete from utilisateur where iduser = ".$iduser.";";
      $donnees = array(":iduser"=>$iduser);
      $delete = $this->unPdo->prepare($requete);
      $delete->execute($donnees);
    }
 }
 public function selectUtilisateur ()
 {
      if($this->unPdo != null) {
      // selection de toutes les données
      $requete = "select * from utilisateur;";
      // preparation de la requete avant execution
      $select = $this->unPdo->prepare($requete);

      // exection de la requete
      $select->execute();

      // extraction des données
      $result = $select->fetchAll();
      return $result;
    }
 } 
}// fin de la classe
?>
