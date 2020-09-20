  <?php
    require_once("model/model.class.php");

  class Controler {
    private $unModel;
    public function __construct() {
      $this->unModel = new Modele();
    }
    public function select_all_etudiants() {
      // appel du model
      $lesEtudiants = $this->unModel->select_all_etudiants();
      // on réalise les controles sur les données
      // ........
      return $lesEtudiants;
    }

    public function insert_etudiant($tab) {
      // control les donnees avant insertion
      // ....
      $this->unModel->insert_etudiant($tab);
    }

    public function delete_etudiant($id) {
      $this->unModel->delete_etudiant($id);
    }

    public function select_etat() {
      return $this->unModel->select_etat();
    }
  }
   ?>
