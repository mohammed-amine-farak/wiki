<?php
class categry{
    private $id_category;
    private $category_name;




    public function __construct($id_category,$category_name){
        $this->id_category = $id_category
         $this->category_name = $category_name;
    }
     /**
     * Get the value of id_category
     */ 
    public function getId_category()
    {
        return $this->id_category;
    }

    /**
     * Get the value of category_name
     */ 
    public function getCategory_name()
    {
        return $this->category_name;
    }

   
}
?>