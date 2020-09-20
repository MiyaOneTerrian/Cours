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
        $requete="select p.idproduit, p.designation, p.prix, . p.quantite, c.libelle from produit p, categorie c where p.idcategorie = c.idcategorie;";
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
      $requete = "insert into produit values (null, :designation, :prix, :quantite :idcategorie)";
      $donnees = array(":designation"=>$tab['designation'],
                       ":prix"=>$tab['prix'],
                       ":quantite"=>$tab['quantite'],
                       ":idcategorie"=>$tab['idcategorie']);
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
      return $result;
    }
  }

  public function redirect() {
    header('../gestionproduit.php');
  }

  public function insertCategorie($tab){
    if($this->unPdo!=null){
      $requete="insert into categorie values(null,:libelle)";
      $donnees=array(":libelle"=>$tab['libelle']);
      $insert=$this->unPdo->prepare($requete);
      $insert->execute($donnees);
    }
  }


  public function deleteCategorie($idcategorie){
    if($this->unPdo!= null){
      $requete="delete from categorie where idcategorie = :idcategorie;";
      $donnees=array(":idcategorie"=>$idcategorie);
      $delete=$this->unPdo->prepare($requete);
      $delete->execute($donnees);

    }
  }

  public function selectCategorie(){
    $requete="select * from categorie;";
    //preparation de la requete avant execution
    $select= $this->unPdo->prepare($requete);
    //execution de la requete
    $select->execute();
    //extraction des données
    $resultats = $select->fetchAll();
    return $resultats;
  }


  public function selectUtilisateur() {
    $requete="select * from utilisateur;";
    // preparation de la requete avant execution
    $select=$this->unPdo->prepare($requete);
    // execution de la requete
    $select->execute();
    //extraction des données
    $resultats = $select->fetchAll();
    return $resultats;
  }

  public function insertUtilisateur($tab){
    if($this->unPdo!=null){
      $requete="insert into utilisateur values(null,:login :mdp :nom :prenom)";
      $donnees=array(":login"=>$tab['login'], ":mdp"=>$tab['mdp'], ":nom"=>$tab['nom'], ":prenom"=>$tab['prenom']);
      $insert=$this->unPdo->prepare($requete);
      $insert->execute($donnees);
    }
  }

  public function deleteUtilisateur($iduser){
    if($this->unPdo!= null){
      $requete="delete from utilisateur where iduser = :iduser;";
      $donnees=array(":iduser"=>$iduser);
      $delete=$this->unPdo->prepare($requete);
      $delete->execute($donnees);

    }
  }


  // fin de la classe
}
?>
