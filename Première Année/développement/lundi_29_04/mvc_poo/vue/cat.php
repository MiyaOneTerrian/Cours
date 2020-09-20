<?php
echo '
<table class="table table-dark">
    <thead>
        <tr>
            <th class="scope-col">Id Categorie</th>
            <th class="scope-col">Libelle</th>
        </tr>
    </thead>
';
  foreach ($result as $unResultat) {
      echo
          "<tr>
      <td>".$unResultat['idcategorie']."</td>
      <td>".$unResultat['libelle']."</td>
    </tr>";
  }
  echo "</table>";
?>