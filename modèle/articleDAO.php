<?php
  include 'article.php';
  include 'connexion.php';
  class articleDAO{
    private $db;
      
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    public function get_article(){
        $query = "SELECT * FROM wikis";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $articleData = $stmt->fetchAll();
        $article = array();
        // SELECT `id_wiki`, `titre`, `contenu`, `date_creation`, `id_auteur`, `id_categorie` FROM `wikis` WHERE 1 
        foreach ($articleData as $E) {
            $article[] = new bus($E["id_wiki"], $E["titre"],$E["contenu"], $E["date_creation"], $E["id_auteur"], $E["id_categorie"]);
        }
        return $article;
    }
    public function add_artivle($titre,$contenu,$date_creation,$){

    }

  }
?>