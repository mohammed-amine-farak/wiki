<?php


class article{
    private $id;
    private $title;
    private $contenu;
    private $date;
    private $category;
    private $user;
    private $statu;

    
    public function __construct($id,$title,$contenu,$date,$category,$tag,$user,$statu){
      $this->id = $id;
      $this->title = $title;
      $this->contenu = $contenu;
      $this->date = $date;
      $this->category = $category;
      $this->tag = $tag;
      $this->user = $user;
      $this->statu = $statu;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Get the value of tag
     */ 
    

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of statu
     */ 
    public function getStatu()
    {
        return $this->statu;
    }
}
?>