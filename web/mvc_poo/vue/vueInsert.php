<form method="post" action="">
	<table border=0>
		<tr><td>Designation</td>
			<td><input type="text" name="designation"></td>
		</tr>
		<tr><td>Prix</td>
			<td><input type="text" name="prix"></td>
		</tr>
		<tr><td>Quantite</td>
			<td><input type="text" name="quantite"></td>
		</tr>
		<tr><td>Categorie</td>
			<td>
				<select name="idcategorie">
					<?php
						foreach($lesCate as $uneCate){
							echo"<option value='".$uneCate['idcategorie']."'>"
							.$uneCate['libelle']."</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr><td><input type="reset" name="Annuler" value="Annuler"></td>
			<td><input type="submit" name="Valider" value="Valider"></td>
		</tr>
	</table>
</form>