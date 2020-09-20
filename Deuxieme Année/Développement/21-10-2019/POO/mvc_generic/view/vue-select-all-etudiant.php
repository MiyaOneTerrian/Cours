<table border=1>
  <tr>
    <td>id Etudiant</td>
    <td>Nom</td>
    <td>Prenom</td>
    <td>Email</td>
    <td>Addresse</td>
  </tr>
<?php
foreach($lesEtudiants as $unEtudiant) {
  echo "<tr>
          <td>".$unEtudiant['idetudiant']."</td>
          <td>".$unEtudiant['nom']."</td>
          <td>".$unEtudiant['prenom']."</td>
          <td>".$unEtudiant['email']."</td>
          <td>".$unEtudiant['addresse']."</td>
        </tr>";
}
?>
</table>
