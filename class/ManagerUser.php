<?php

class ManagerUser {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }

    public function signup($user){

        $connexion = $this->_bdd->prepare("SELECT team_name, password_manif FROM rdeexpressregister WHERE team_name = :teamname AND password_manif = :password");
        $connexion->execute(array(
            'teamname' => $user->getTeamname(),
            'password' => $user->getPassword()
        ));

        $resultat = $connexion->fetch();
        $nbresultats = $connexion->rowCount();

        session_start();

        if ($nbresultats == 1) {

            $_SESSION['team'] = $resultat['team_name'];

            header('location: ../qcm.php');
        } else {
            header('location: ../index.php?success=1');
        }
  }

}
    
    ?>