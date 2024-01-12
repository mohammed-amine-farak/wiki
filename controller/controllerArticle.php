<?php
    include 'modèle\articleDAO.php';
    include 'modèle\categoryDAO.php';
    include 'modèle\tagDAO.php';
    class controllerArticle{

      public function add_article(){
              $categoryDAO = new categoryDAO();
              $category = $categoryDAO->get_category();
              $tagDAO = new tagDAO();
              $tags = $tagDAO->get_tag();
               
              if(isset($_POST['addArticle'])){
                $titre = $_POST['title'];
                $contenu = $_POST['description'];
                $date_creation =date("Y-m-d H:i:s");
                $id_auteur = 1;
                $id_category = $_POST['category'];
                $id_tags = $_POST['tag'];
                // title description tag[] category
                $articleDAO = new articleDAO();
                $articleDAO->add_article($titre,$contenu,$date_creation,$id_auteur,$id_category,$id_tags);
              }

              include 'vue\addArticle.php';
              
        }
        
    }
   
?>