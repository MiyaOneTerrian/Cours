  <?php
  // Appel le model
require_once("model/model.php");

class controler {
    private $unModel;

    public function __construct ($server, $bdd, $user, $mdp) {
      // instantiation de la classe model
      $this->unModel = new Model ($server, $bdd, $user, $mdp);
    }

    public function selectProduits() {
      $result = $this->unModel->selectAll();

      //on peut resaliser des traitements avant affichage

      return $result;
    }

    public function insertProduit($tab) {
      $this->unModel->insertProduit($tab);
    }

    public function deleteProduit($idProduit) {
      $this->unModel->deleteProduit($idProduit);
    }

    public function verifConnexion($login, $mdp) {
      return $this->unModel->verifconnextion($login, $mdp);
    }

  }
 ?>
