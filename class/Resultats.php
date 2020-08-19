<?php

class Resultats {
    //variable de notre classe
    private $_team;
    private $_note;
    private $_note2;
    private $_emplacement;
    private $_time;


    //création du constructeur
    public function __construct($team, $note, $note2, $emplacement, $time) {
      $this->_team = $team;
      $this->_note = $note;
      $this->_note2 = $note2;
      $this->_emplacement = $emplacement;
      $this->_time = $time;

    }

    //listing des getters
    public function getTeam(){
        return $this->_team;
       }
    public function getNote(){
        return $this->_note;
       }
    public function getNote2(){
        return $this->_note2;
       }
    public function getEmplacement(){
        return $this->_emplacement;
       }
    public function getTime(){
        return $this->_time;
       }

    //listing des setters
    public function setTeam($team){
     $this->_team = $team;
    }
     public function setNote($note){
        $this->_note = $note;
    }
    public function setPassword($note2){
        $this->_password = $note2;
    }
    public function setEmplacement($emplacement){
        $this->_emplacement = $emplacement;
    }
    public function setTime($time){
        $this->_time = $time;
    }

}