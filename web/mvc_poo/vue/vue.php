<?php

			//var_dump($resultats);
			echo "<table border = 1>
					<tr><td>IdProduit</td><td>Designation</td><td>Prix</td><td>Quantite</td><td>Id Categorie</td></tr>";

					foreach ($resultats as $unResultat) {
						echo"<tr> <td>".$unResultat['idproduit']."</td>
								<td>".$unResultat['designation']."</td>
								<td>".$unResultat['prix']."</td>
								<td>".$unResultat['quantite']."</td>
								<td>".$unResultat['libelle']."</td>
							</tr>";
					}

			echo "</table>";

?>
