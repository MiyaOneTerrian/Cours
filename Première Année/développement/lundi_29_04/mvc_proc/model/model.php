<?php
function connection() {
    try {
    // connection a la base de donnee en utilisant PDO
    $pdo = new PDO ("mysql:host=localhost;dbname=base","root","");
  }
  catch(PDOExeption $exp) {
    echo "Erreur de connection à la base de données.";

    // afficher le message d'erreur php
    echo $exp->getMessage();
  }
  return $pdo;
}

function selectAll() {
    // connection à la base de données
    $pdo = connection ();
    if($pdo != null) {

    // selection de toutes les données
    $requete = "select * from produit;";
    // preparation de la requete avant execution
    $select = $pdo->prepare($requete);

    // exection de la requete
    $select->execute();

    // extraction des données
    $result = $select->fetchAll();
  }
  return $result;
}
?>
