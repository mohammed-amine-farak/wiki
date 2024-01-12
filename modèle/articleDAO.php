<?php
  require_once 'article.php';
  require_once 'connexion.php';
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


    public function add_article($titre,$contenu,$date_creation,$id_auteur,$id_category,$id_tags){
      $add_article = "INSERT INTO wikis (`titre`, `contenu`, `date_creation`, `id_auteur`, `id_categorie`, `statu`) VALUES (:titre, :contenu, :date_creation, :id_auteur, :id_category, :statu)";
      $stmt = $this->db->prepare($add_article);
      $stmt->bindParam(':titre', $titre);
      $stmt->bindParam(':contenu', $contenu);
      $stmt->bindParam(':date_creation', $date_creation);
      $stmt->bindParam(':id_auteur', $id_auteur);
      $stmt->bindParam(':id_category', $id_category);
      $stmt->bindValue(':statu', 'true');
      $stmt->execute();
      $idwiki = $this->db->lastInsertId();
      foreach ($id_tags as $tag) {
          $query = $this->db->prepare("INSERT INTO wiki_tags(id_wiki, id_tag) VALUES (:idWiki,:idTag)");
          $query->bindParam(':idWiki', $idwiki);
          $query->bindParam(':idTag', $tag);
          $query->execute();
    }
  }
  }
?>