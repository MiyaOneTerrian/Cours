<?php
  //var_dump($result);

  // affichage
  echo
  "<table class ='table table-dark'>
  <thead>
    <tr>
      <th scope='col'>id Produit</th>
      <th scope='col'>Designation</th>
      <th scope='col'>Prix</th>
      <th scope='col'>Quantite</th>
      <th scope='col'>Catégorie</th>
    </tr>
  </thead>
  ";

  foreach ($result as $unResultat) {
    echo
    "<tr>
      <td>".$unResultat['idproduit']."</td>
      <td>".$unResultat['designation']."</td>
      <td>".$unResultat['prix']."</td>
      <td>".$unResultat['quantite']."</td>
      <td>".$unResultat['libelle']."</td>
    </tr>";
  }
  echo "</table>";
?>
