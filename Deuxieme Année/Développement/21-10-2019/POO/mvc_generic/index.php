<!DOCTYPE html>
<?php
  require_once("controler/controler.class.php");
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
    <hr />
    <h2>Insertion d'un Etudiant</h2>
    <?php
      $unControler = new Controler();

      require_once("view/vue-insert-etudiant.php");
      if(isset($_POST['Valider'])) {
        $unControler->insert_etudiant($_POST);
      }

       echo "<hr />";

       require_once("view/vue-delete-etudiant.php");
       if(isset($_POST['Supprimer'])) {
         $unControler->delete_etudiant($_POST['idetudiant']);
       }

       echo "<hr />";

       $lesEtudiants = $unControler->select_all_etudiants();
       require_once("view/vue-select-all-etudiant.php");

       echo "<hr />";

       $lesEtats = $unControler->select_etat();
       require_once("view/vue-tableau-bord.php")
      ?>
  </center>
  </body>
</html>
