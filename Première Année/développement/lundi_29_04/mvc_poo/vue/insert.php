<center>
  <form method="post" action="">
    <div class="form-group">
      <label style="color: #ecf0f1;" for="insert">Designation</label>
        <input class="form-control" type="text" name="designation">
    </div>
    <div class="form-group">
      <label style="color: #ecf0f1;" for="insert">Prix</label>
        <input class="form-control" type="text" name="prix">
    </div>
    <div class="form-group">
      <label style="color: #ecf0f1;" for="insert">Quantite</label>
        <input class="form-control" type="text" name="quantite"></td>
    </div>

      <div class="form-group">
          <label style="color: #ecf0f1;" for="insert">Categorie</label>
          <select name="idcategorie" class="form-control">
              <?php
              foreach($lescategs as $uneCate){
                  echo"<option value='".$uneCate['idcategorie']."'>"
                      .$uneCate['libelle']."</option>";
              }
              ?>
          </select>

      </div>
      <button class="btn btn-primary" type="reset" name="Annuler" value="Annuler">Annuler</button>
      <button class="btn btn-primary" type="submit" name="Valider" value="Valider">Valider</button>
  </form>
</center>
