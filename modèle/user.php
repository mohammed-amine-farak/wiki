<?php
class person{
    private $id;
    private $username;
    private $email;
    private $password;
    private $type;

    public function __construct($id,$username,$email,$password,$type){
          $this->id = $id;
          $this->username = $username;
          $this->email = $email;
          $this->password = $password;
          $this->type = $type;
 }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }
}
?>