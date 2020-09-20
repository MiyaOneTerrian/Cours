<?php
class Modele {
  private $pdo;
  public function __construct () {
    $this->pdo = null;
    try {
      $this->pdo = new PDO ("mysql:host=localhost; dbname=alternance", "root", "");
    }
    catch (PDOException $exp) {
      echo "Erreur de connexion à la base de donnée !";
    }
  }

  public function select_all_etudiants() {
    if ($this->pdo == null) {
      return null;
    } else {
      $requete = "SELECT * FROM etudiant;";
      // préparation de la requête avant execution
      $select = $this->pdo->prepare($requete);
      //execution de la $requete
      $select->execute();
      // récup;eration de tous les enregistrements de la table
      $lesEtudiants = $select->fetchAll();
      return $lesEtudiants;
    }
  }

  public function insert_etudiant($tab) {
    if($this->pdo == null) {
      return null;
    } else {
      $requete = "INSERT INTO etudiant VALUES(NULL, :nom, :prenom, :email, :addresse);";
      $donnees = array(":nom" => $tab['nom'],
                       ":prenom" => $tab['prenom'],
                       ":email" => $tab['email'],
                       ":addresse" => $tab['addresse']
                     );
      $insert = $this->pdo->prepare($requete);
      $insert->execute($donnees);
    }
  }

  public function delete_etudiant($id) {
    if($this->pdo == null) {
      return null;
    } else {
      $requete = "delete from etudiant where idetudiant = :idetudiant;";
      $donnees = array(":idetudiant"=>$id);
      $delete=$this->pdo->prepare($requete);
      $delete->execute($donnees);
    }
  }

  public function select_etat() {
    if($this->pdo == null) {
      return null;
    } else {
      $requete = "select * from contrats;";
      $select = $this->pdo->prepare($requete);
      $select->execute();
      return $select->fetchAll();
    }
  }
}
?>
