<?php


class Gallery {
    //variable de notre classe
    private $_avatar;
    private $_alt;
    private $_category;


    //création du constructeur
    public function __construct($avatar, $alt, $category) {
      $this->_avatar = $avatar;
      $this->_alt = $alt;
      $this->_category = $category;

    }

    //listing des getters
    public function getAvatar(){
     return $this->_avatar;
    }
    public function getAlt(){
        return $this->_alt;
       }

    public function getCategory(){
        return $this->_category;
       }

    //listing des setters
    public function setAvatar($avatar){
     $this->_avatar = $avatar;
    }
     public function setAlt($alt){
        $this->_alt = $alt;
    }
    public function setCategory($category){
        $this->_category = $category;
    }

}


class Partners {
    //variable de notre classe
    private $_avatar;
    private $_alt;
    private $_website_link;


    //création du constructeur
    public function __construct($avatar, $alt, $website_link) {
      $this->_avatar = $avatar;
      $this->_alt = $alt;
      $this->_website_link = $website_link;

    }

    //listing des getters
    public function getAvatar(){
     return $this->_avatar;
    }
    public function getAlt(){
        return $this->_alt;
       }

    public function getWebsite_link(){
        return $this->_website_link;
       }

    //listing des setters
    public function setavatar($avatar){
     $this->_avatar = $avatar;
    }
     public function setalt($alt){
        $this->_alt = $alt;
    }
    public function setWebsite_link($website_link){
        $this->_website_link = $website_link;
    }

}

class Testimonials {
    //variable de notre classe
    private $_first_name;
    private $_age;
    private $_establishment;
    private $text;


    //création du constructeur
    public function __construct($first_name, $age, $establishment, $text) {
      $this->_first_name = $first_name;
      $this->_age = $age;
      $this->_establishment = $establishment;
      $this->_text = $text;

    }

    //listing des getters
    public function getFirst_name(){
     return $this->_first_name;
    }
    public function getAge(){
        return $this->_age;
       }

    public function getEstablishment(){
        return $this->_establishment;
       }

    public function getText(){
        return $this->_text;
       }


    //listing des setters
    public function setFirst_name($first_name){
     $this->_first_name = $first_name;
    }
     public function setAge($age){
        $this->_age = $age;
    }
    public function setEstablishment($establishment){
        $this->_establishment = $establishment;
    }
    public function setText($text){
        $this->_text = $text;
    }

}


?>