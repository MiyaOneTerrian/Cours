<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestion de l'alternance</title>
  </head>
  <body>
  <center>
    <h1>Gestion de l'alternance</h1>
    <br />
    <h2>Liste des étudiants en alternance</h2>
    <?php
      try {
        $pdo = new PDO ("mysql:host=localhost; dbname=alternance", "root", "Zvxkmf312");
      }
      catch (PDOException $exp) {
        echo "Erreur de connexion à la base de donnée !";
      }
      $requete = "SELECT * FROM etudiant;";
      // préparation de la requête avant execution
      $select = $pdo->prepare($requete);
      //execution de la $requete
      $select->execute();
      // récup;eration de tous les enregistrements de la table
      $lesEtudiants = $select->fetchAll();
      // affichage des resultats en table html
      echo "<table border=1>
              <tr>
                <td>id Etudiant</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Email</td>
                <td>Addresse</td>
              </tr>";
      foreach($lesEtudiants as $unEtudiant) {
        echo "<tr>
                <td>".$unEtudiant['idetudiant']."</td>
                <td>".$unEtudiant['nom']."</td>
                <td>".$unEtudiant['prenom']."</td>
                <td>".$unEtudiant['email']."</td>
                <td>".$unEtudiant['addresse']."</td>
              </tr>";
      }
        echo "</table>"
    ?>
  </center>
  </body>
</html>
