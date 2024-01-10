<?php
class tag{
    private $id_tag
    private $nameTag;
    public function __construct($id_tag,$nameTag){
        $this->id_tag = $id_tag;
        $this->nameTag = $nameTag;
        
   }

    /**
     * Get the value of id_tag
     */ 
    public function getId_tag()
    {
        return $this->id_tag;
    }

    /**
     * Get the value of nameTag
     */ 
    public function getNameTag()
    {
        return $this->nameTag;
    }
}
?>