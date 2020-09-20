<?php
  function connexion() {
    $pdo = null;
    try {
      $pdo = new PDO ("mysql:host=localhost; dbname=alternance", "root", "Zvxkmf312");
    }
    catch (PDOException $exp) {
      echo "Erreur de connexion à la base de donnée !";
    }
    return $pdo;
  }

  function select_all_etudiants() {
    $pdo = connexion();
    if ($pdo == null) {
      return null;
    } else {
      $requete = "SELECT * FROM etudiant;";
      // préparation de la requête avant execution
      $select = $pdo->prepare($requete);
      //execution de la $requete
      $select->execute();
      // récup;eration de tous les enregistrements de la table
      $lesEtudiants = $select->fetchAll();
      return $lesEtudiants;
    }
  }
?>
