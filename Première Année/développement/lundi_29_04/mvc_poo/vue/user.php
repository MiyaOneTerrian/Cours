<?php
echo '
<table class="table table-dark">
    <thead>
        <tr>
            <th class="scope-col">Id User</th>
            <th class="scope-col">Nom</th>
            <th class="scope-col">Prenom</th>
            <th class="scope-col">Login</th>
        </tr>
    </thead>
';
foreach ($result as $unResultat) {
    echo
        "<tr>
      <td>".$unResultat['iduser']."</td>
      <td>".$unResultat['nom']."</td>
      <td>".$unResultat['prenom']."</td>
      <td>".$unResultat['login']."</td>
    </tr>";
}
echo "</table>";
?>