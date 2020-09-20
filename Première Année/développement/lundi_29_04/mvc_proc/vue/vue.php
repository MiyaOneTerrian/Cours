<?php
  //var_dump($result);

  // affichage
  echo
  "<table class ='table table-dark'>
  <thead>
    <tr>
      <th scope='col'>id Produit</td>
      <th scope='col'>Designation</td>
      <th scope='col'>Prix</td>
      <th scope='col'>Quantite</td>
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
    </tr>";
  }
  echo "</table>";
?>
