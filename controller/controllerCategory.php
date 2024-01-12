<?php
include 'modèle\categoryDAO.php';
class controller{
     function add_category(){
        if(isset($_POST['submit'])){
            $category_name = $_POST['category_name'];
            $categoryDAO = new categoryDAO();
            $categoryDAO->add_tag($category_name);
            header('Location:adminelistcategory.php');
        }
        include 'vue\addCategory.php';
     }
function get_category(){
        $categoryDAO = new categoryDAO();
        $category = $categoryDAO->get_category();
        include 'vue\listCategory.php';
     }

     function get_category_by_id()
     {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $categoryDAO = new categoryDAO();
            $category = $categoryDAO->get_category_by_id($id);
            include 'vue\updateCategory.php';
           }
        
     }
    
    function update_category(){
        if(isset($_GET['submit'])){
            $id = $_GET['submit'];
            $category_name = $_GET['category_name'];
            $categoryDAO = new categoryDAO();
            $categoryDAO->update_category($id,$category_name);
            include 'vue\updateCategory.php';
        }
       
    }
    function delete_category(){
        if(isset($_GET['delete'])){
              $id = $_GET['delete'];
              $categoryDAO = new categoryDAO();
              $categoryDAO->delete_category($id);
              include 'vue\listCategory.php';
              
        }
    }
}

?>