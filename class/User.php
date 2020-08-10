<?php

class User {
    //variable de notre classe
    private $_teamname;
    private $_password;


    //création du constructeur
    public function __construct($teamname, $password) {
      $this->_teamname = $teamname;
      $this->_password = $password;

    }

    //listing des getters
    public function getTeamname(){
     return $this->_teamname;
    }
    public function getPassword(){
        return $this->_password;
       }

    //listing des setters
    public function setTeamname($teamname){
     $this->_teamname = $teamname;
    }
     public function setPassword($password){
        $this->_password = $password;
    }

}
?>