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


// inscription basket

class UserBasket {

  private $_establishment;
  private $_teamname;
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
  private $_name6;
  private $_firstname6;
  private $_tel6;
  private $_mail6;
  private $_verifmail6;
  private $_name7;
  private $_firstname7;
  private $_tel7;
  private $_mail7;
  private $_verifmail7;


  public function __construct($establishment, $teamname, $name1, $firstname1, $tel1, $mail1, $verifmail1, 
  $name2, $firstname2, $tel2, $mail2, $verifmail2, $name3, $firstname3, $tel3, $mail3, $verifmail3, 
  $name4, $firstname4, $tel4, $mail4, $verifmail4, $name5, $firstname5, $tel5, $mail5, $verifmail5, 
  $name6, $firstname6, $tel6, $mail6, $verifmail6, $name7, $firstname7, $tel7, $mail7, $verifmail7){

      $this->_establishment = $establishment;
      $this->_teamname = $teamname;
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
      $this->_name6 = $name6;
      $this->_firstname6 = $firstname6;
      $this->_tel6 = $tel6;
      $this->_mail6 = $mail6;
      $this->_verifmail6 = $verifmail6;
      $this->_name7 = $name7;
      $this->_firstname7 = $firstname7;
      $this->_tel7 = $tel7;
      $this->_mail7 = $mail7;
      $this->_verifmail7 = $verifmail7;
  }


  //listing des getters
  public function getEstablishment(){
    return $this->_establishment;
   }
   public function getTeamname(){
    return $this->_teamname;
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
   public function getName6(){
    return $this->_name6;
   }
   public function getFirstname6(){
    return $this->_firstname6;
   }
   public function getTel6(){
    return $this->_tel6;
   }
   public function getMail6(){
    return $this->_mail6;
   }
   public function getVerifmail6(){
    return $this->_verifmail6;
   }
   public function getName7(){
    return $this->_name7;
   }
   public function getFirstname7(){
    return $this->_firstname7;
   }
   public function getTel7(){
    return $this->_tel7;
   }
   public function getMail7(){
    return $this->_mail7;
   }
   public function getVerifmail7(){
    return $this->_verifmail7;
   }

}




// inscription warrior

class UserWarrior {

  private $_establishment;
  private $_teamname;
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
  private $_name6;
  private $_firstname6;
  private $_tel6;
  private $_mail6;
  private $_verifmail6;
  private $_name7;
  private $_firstname7;
  private $_tel7;
  private $_mail7;
  private $_verifmail7;
  private $_name8;
  private $_firstname8;
  private $_tel8;
  private $_mail8;
  private $_verifmail8;


  public function __construct($establishment, $teamname, $name1, $firstname1, $tel1, $mail1, $verifmail1, 
  $name2, $firstname2, $tel2, $mail2, $verifmail2, $name3, $firstname3, $tel3, $mail3, $verifmail3, 
  $name4, $firstname4, $tel4, $mail4, $verifmail4, $name5, $firstname5, $tel5, $mail5, $verifmail5, 
  $name6, $firstname6, $tel6, $mail6, $verifmail6, $name7, $firstname7, $tel7, $mail7, $verifmail7, 
  $name8, $firstname8, $tel8, $mail8, $verifmail8){

      $this->_establishment = $establishment;
      $this->_teamname = $teamname;
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
      $this->_name6 = $name6;
      $this->_firstname6 = $firstname6;
      $this->_tel6 = $tel6;
      $this->_mail6 = $mail6;
      $this->_verifmail6 = $verifmail6;
      $this->_name7 = $name7;
      $this->_firstname7 = $firstname7;
      $this->_tel7 = $tel7;
      $this->_mail7 = $mail7;
      $this->_verifmail7 = $verifmail7;
      $this->_name8 = $name8;
      $this->_firstname8 = $firstname8;
      $this->_tel8 = $tel8;
      $this->_mail8 = $mail8;
      $this->_verifmail8 = $verifmail8;
  }


  //listing des getters
  public function getEstablishment(){
    return $this->_establishment;
   }
   public function getTeamname(){
    return $this->_teamname;
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
   public function getName6(){
    return $this->_name6;
   }
   public function getFirstname6(){
    return $this->_firstname6;
   }
   public function getTel6(){
    return $this->_tel6;
   }
   public function getMail6(){
    return $this->_mail6;
   }
   public function getVerifmail6(){
    return $this->_verifmail6;
   }
   public function getName7(){
    return $this->_name7;
   }
   public function getFirstname7(){
    return $this->_firstname7;
   }
   public function getTel7(){
    return $this->_tel7;
   }
   public function getMail7(){
    return $this->_mail7;
   }
   public function getVerifmail7(){
    return $this->_verifmail7;
   }
   public function getName8(){
    return $this->_name8;
   }
   public function getFirstname8(){
    return $this->_firstname8;
   }
   public function getTel8(){
    return $this->_tel8;
   }
   public function getMail8(){
    return $this->_mail8;
   }
   public function getVerifmail8(){
    return $this->_verifmail8;
   }

}


class UserPiquenique {

  private $_establishment;
  private $_name;
  private $_firstname;
  private $_tel;
  private $_mail;
  private $_verifmail;


  public function __construct($establishment, $name, $firstname, $tel, $mail, $verifmail){

      $this->_establishment = $establishment;
      $this->_name = $name;
      $this->_firstname = $firstname;
      $this->_tel = $tel;
      $this->_mail = $mail;
      $this->_verifmail = $verifmail;
  }


  //listing des getters
  public function getEstablishment(){
    return $this->_establishment;
   }
   public function getName(){
    return $this->_name;
   }
   public function getFirstname(){
    return $this->_firstname;
   }
   public function getTel(){
    return $this->_tel;
   }
   public function getMail(){
    return $this->_mail;
   }
   public function getVerifmail(){
    return $this->_verifmail;
   }

}


?>