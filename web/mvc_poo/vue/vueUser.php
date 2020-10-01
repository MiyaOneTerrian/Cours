<?php

			//var_dump($resultats);
			echo "<table border = 1>
					<tr><td>IdUser</td><td>Login</td><td>Mdp</td><td>Nom</td><td>Prenom</td></tr>";

					foreach ($resultats as $unResultat) {
						echo"<tr> <td>".$unResultat['iduser']."</td>
								<td>".$unResultat['login']."</td>
								<td>".$unResultat['mdp']."</td>
								<td>".$unResultat['nom']."</td>
								<td>".$unResultat['prenom']."</td>
							</tr>";
					}

			echo "</table>";

?>