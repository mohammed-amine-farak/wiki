<?php
include 'modèle\tagDAO.php';
class tagcontroller{
    function get_tags(){
        
        $tagDAO = new tagDAO();
        $tag = $tagDAO->get_tag();
        include 'vue\listtag.php';
      }
     function get_tag_by_id(){
          if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tagDAO = new tagDAO();
                $tags = $tagDAO->get_tag_by_id($id);
                include 'vue\updateTAG.php';
          }
         
    }

    function update_tag(){
       
        if(isset($_GET['submit'])){
          $id = $_GET['submit'];
          $new_tag = $_GET['tag_name'];
          $tagDAO = new tagDAO();
          $tagDAO->update_tag($id,$new_tag);
          include 'vue\updateTAG.php';
        }
        
    }
    function deletetag(){
        if(isset($_GET['delete'])){
         $delete_id = $_GET['delete'];
         $tagDAO = new tagDAO();
         $tagDAO->delete_tag($delete_id);
         include 'vue\listtag.php';
         echo '<script>
                window.location.replace("adminelistTAG.php")
                </script>
                ';
        }
        
    }

    function add_tag(){
        if(isset($_POST['submit'])){
            $tag_names = $_POST['tag_name'];
            $tagDAO = new tagDAO();
             $tagDAO->add_tag($tag_names);
             header('Location:adminelistTAG.php');
        }
        include 'vue\addTAgs.php';
    }
    
}
?>