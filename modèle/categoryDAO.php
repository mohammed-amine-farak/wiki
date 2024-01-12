<?php
require_once 'category.php';
require_once 'connexion.php';
class categoryDAO{
    private $db;
      
    public function __construct() {
        $this->db= Database::getInstance()->getConnection();
    }
   


    public function get_category(){
        $category = "SELECT * from categories";
        $stmt = $this->db->query($category);
        $stmt->execute();
        $categoryData = $stmt->fetchAll();
        $category = array();
       
        foreach ($categoryData as $c) {
        
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
         $update = "UPDATE  categories  SET  nom_categorie='$category' WHERE id_categorie = $id";
         $stmt = $this->db->query($update);
         $stmt->execute();
         header('Location:adminelistcategory.php');
    }



    public function delete_category($id){
         $delete = "DELETE FROM categories WHERE id_categorie =  $id";
         $stmt = $this->db->query($delete);
         $stmt->execute();
        //  header('Location:adminecategory.php');
        echo '<script>
                    window.location.replace("adminelistcategory.php")
                   </script>
              ';
    }
    
    function add_tag($category_name){
       
        $category_name = filter_var($category_name, FILTER_SANITIZE_STRING);
        $create_category = "INSERT INTO categories (nom_categorie) VALUES (:category)";
        $stmt = $this->db->prepare($create_category);
        $stmt->bindParam(':category', $category_name, PDO::PARAM_STR);
        $stmt->execute();
     
    }
}
?>