

   <?php
   include 'controller\controllerTag.php';
   $controllerTAG = new tagcontroller();
   $controllerTAG->get_tag_by_id();
   if(isset($_GET['action']))
   $controllerTAG->update_tag()
   ?>
    
    