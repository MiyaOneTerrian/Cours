<!DOCTYPE html>
<?php
  require_once("function.php");
?>
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
    $lesEtudiants = select_all_etudiants();
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
