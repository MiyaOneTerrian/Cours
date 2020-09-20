<?php
  // Appel le model
  require_once("model/model.php");

  function selectProduits() {
    $result = selectAll();

    //on peut resaliser des traitements avant affichage

    return $result;
  }
 ?>
