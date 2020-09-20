<?php
  class Produit {

    // attributs
    private $ref, $des, $prix, $qte;

    // constructeurs
    public function __construct() {
      $this->ref = "";
      $this->des = "";
      $this->prix = 0;
      $this->qte = 0;
    }

    //methodes
    public function renseigner($tab) { //$_POST du formulaire
      $this->ref = $tab['ref'];
      $this->des = $tab['des'];
      $this->prix = $tab['prix'];
      $this->qte = $tab['qte'];
    }

    public function afficher() {
      return "<table border=0>
                <tr>
                  <td>Référence</td>
                  <td>Désignation</td>
                  <td>Prix</td>
                  <td>Quantitié</td>
                </tr>
                <tr>
                  <td>".$this->ref ."</td>
                  <td>".$this->des ."</td>
                  <td>".$this->prix ."</td>
                  <td>".$this->qte ."</td>
                </tr>
              </table>";
    }
      
    public function calculer () {
        return $this->prix * $this->qte;
    }

    //getters and setters
    // pour ref
    public function getRef() {
      return $this->ref;
    }

    public function setRef($ref) {
      $this->ref = $ref;
    }

    //pour desigation
    public function getDes() {
      return $this->des;
    }

    public function setDes($des) {
      $this->des = $des;
    }

    // pour le prix
    public function getPrix() {
      return $this->prix;
    }

    public function setPrix($prix) {
      $this->prix = $prix;
    }

    // pour la Quantitié
    public function getQte() {
      return $this->qte;
    }

    public function setQte($qte) {
      $this->qte = $qte;
    }
  }
?>