<?php
include 'controller\controllerCategory.php';

$categoryDAO = new controller();
 $categoryDAO->get_category_by_id();
 $categoryDAO->update_category();
?>