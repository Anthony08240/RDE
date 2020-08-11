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


class UserExpress {

  private $_establishment;
  private $_teamname;
  private $_password;
  private $_verifpassword;
  private $_name1;
  private $_firstname1;
  private $_tel1;
  private $_mail1;
  private $_verifmail1;
  private $_name2;
  private $_firstname2;
  private $_tel2;
  private $_mail2;
  private $_verifmail2;
  private $_name3;
  private $_firstname3;
  private $_tel3;
  private $_mail3;
  private $_verifmail3;
  private $_name4;
  private $_firstname4;
  private $_tel4;
  private $_mail4;
  private $_verifmail4;
  private $_name5;
  private $_firstname5;
  private $_tel5;
  private $_mail5;
  private $_verifmail5;


  public function __construct($establishment, $teamname, $password, $verifpassword, $name1, $firstname1, $tel1, $mail1, $verifmail1, 
  $name2, $firstname2, $tel2, $mail2, $verifmail2, $name3, $firstname3, $tel3, $mail3, $verifmail3, 
  $name4, $firstname4, $tel4, $mail4, $verifmail4, $name5, $firstname5, $tel5, $mail5, $verifmail5){

      $this->_establishment = $establishment;
      $this->_teamname = $teamname;
      $this->_password = $password;
      $this->_verifpassword = $verifpassword;
      $this->_name1 = $name1;
      $this->_firstname1 = $firstname1;
      $this->_tel1 = $tel1;
      $this->_mail1 = $mail1;
      $this->_verifmail1 = $verifmail1;
      $this->_name2 = $name2;
      $this->_firstname2 = $firstname2;
      $this->_tel2 = $tel2;
      $this->_mail2 = $mail2;
      $this->_verifmail2 = $verifmail2;
      $this->_name3 = $name3;
      $this->_firstname3 = $firstname3;
      $this->_tel3 = $tel3;
      $this->_mail3 = $mail3;
      $this->_verifmail3 = $verifmail3;
      $this->_name4 = $name4;
      $this->_firstname4 = $firstname4;
      $this->_tel4 = $tel4;
      $this->_mail4 = $mail4;
      $this->_verifmail4 = $verifmail4;
      $this->_name5 = $name5;
      $this->_firstname5 = $firstname5;
      $this->_tel5 = $tel5;
      $this->_mail5 = $mail5;
      $this->_verifmail5 = $verifmail5;
  }


  //listing des getters
  public function getEstablishment(){
    return $this->_establishment;
   }
   public function getTeamname(){
    return $this->_teamname;
   }
   public function getPassword(){
    return $this->_password;
   }
   public function getVerifpassword(){
    return $this->_verifpassword;
   }
   public function getName1(){
    return $this->_name1;
   }
   public function getFirstname1(){
    return $this->_firstname1;
   }
   public function getTel1(){
    return $this->_tel1;
   }
   public function getMail1(){
    return $this->_mail1;
   }
   public function getVerifmail1(){
    return $this->_verifmail1;
   }
   public function getName2(){
    return $this->_name2;
   }
   public function getFirstname2(){
    return $this->_firstname2;
   }
   public function getTel2(){
    return $this->_tel2;
   }
   public function getMail2(){
    return $this->_mail2;
   }
   public function getVerifmail2(){
    return $this->_verifmail2;
   }
   public function getName3(){
    return $this->_name3;
   }
   public function getFirstname3(){
    return $this->_firstname3;
   }
   public function getTel3(){
    return $this->_tel3;
   }
   public function getMail3(){
    return $this->_mail3;
   }
   public function getVerifmail3(){
    return $this->_verifmail3;
   }
   public function getName4(){
    return $this->_name4;
   }
   public function getFirstname4(){
    return $this->_firstname4;
   }
   public function getTel4(){
    return $this->_tel4;
   }
   public function getMail4(){
    return $this->_mail4;
   }
   public function getVerifmail4(){
    return $this->_verifmail4;
   }
   public function getName5(){
    return $this->_name5;
   }
   public function getFirstname5(){
    return $this->_firstname5;
   }
   public function getTel5(){
    return $this->_tel5;
   }
   public function getMail5(){
    return $this->_mail5;
   }
   public function getVerifmail5(){
    return $this->_verifmail5;
   }

}
?>