<?php
include 'category.php';
include 'connexion.php';
class categoryDAO{
    private $db;
      
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_category(){
        $category = "SELECT * from categories";
        $stmt = $this->db->query($category);
        $stmt->execute();
        $categoryData = $stmt->fetchAll();
        $category = array();

        foreach ($categoryData as $c) {
            `id_categorie`, `nom_categorie`
            $category[] = new categry($c["id_categorie"],$c["nom_categorie"]);
        }
        return $category; 
    }

    public function get_category_by_id($id){
      $selected_category = "SELECT * from categories where id_categorie =  $id";
      $stmt  = $this->db->query($selected_category);
        $stmt->execute();
        $category_by_id = $stmt->fetch();
        $category = new categry($category_by_id["id_categorie"],$category_by_id["nom_categorie"]);
        return $category;
    }

    public function update_category($id,$category){
         $update = "UPDATE  categories  SET  nom_categorie='$category' WHERE id_categorie = $id"
    }
}
?>