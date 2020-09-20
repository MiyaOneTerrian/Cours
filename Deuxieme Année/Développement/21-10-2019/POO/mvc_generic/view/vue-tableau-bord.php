<h2>Tableau de bord</h2>
<table border = 1>
  <tr>
    <td>Nom</td>
    <td>Prenom</td>
    <td>Date-début</td>
    <td>Date-fin</td>
    <td>Type contrat</td>
    <td>Entreprise</td>
  </tr>
  <?php
    foreach($lesEtats as $unEtat) {
      echo"
        <tr>
          <td>".$unEtat["nom"]."</td>
          <td>".$unEtat["prenom"]."</td>
          <td>".$unEtat["datedebut"]."</td>
          <td>".$unEtat["datefin"]."</td>
          <td>".$unEtat["typecontrat"]."</td>
          <td>".$unEtat["entreprise"]."</td>
        </tr>
      ";
    }
   ?>
</table>
