<?php
include 'modèle\tag.php';
include 'connexion.php';
class tagDAO{
    private $db;
      
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    function get_tag(){
        $select = "SELECT * FROM tags";
        $stmt = $this->db->query($select);
        $stmt->execute();
        $tagData = $stmt->fetchAll();
        $tag = array();

        foreach ($tagData as $t) {
            $tag[] = new tag($t["id_tag"],$t["nom_tag"]);
        }
        return $tag;
    }

    function get_tag_by_id($id){
        $select = "SELECT * from tags WHERE id_tag = $id";
        $stmt  = $this->db->query($select);
        $stmt->execute();
        $tag_by_id = $stmt->fetch();
        $tag = new tag($tag_by_id["id_tag"],$tag_by_id["nom_tag"]);
        return $tag;
    }
    function update_tag($id,$tag_name){
      $update = "UPDATE tags SET  nom_tag ='$tag_name' WHERE id_tag = $id";
      $stmt  = $this->db->query($update);
      $stmt->execute();
      header('Location:adminelistTAG.php');
    }
    }

?>