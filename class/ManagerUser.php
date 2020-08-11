<?php

// connexion QCM

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

        if ($nbresultats == 1) {

            session_start();

            $_SESSION['team'] = $resultat['team_name'];

            header('location: ../qcm.php');
        } else {
            header('location: ../index.php?success=1');
        }
  }

}


// inscription QCM

class ManagerUserIsncriptionExpress {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }



    public function inscription_express($insc_express){

        $teamname = $insc_express->getTeamname();

        $objetinscrip = utf8_decode("Confirmation d'inscription au Carolo Express");
        $messageinscrip = utf8_decode("Bonjour l'équipe '$teamname', votre inscription est bien prise en compte pour le Carolo Express. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");



        $teamnameexist = $this->_bdd->prepare("SELECT team_name FROM rdeexpressregister WHERE team_name = '$teamname'");
        $teamnameexist->execute();

        $count = $teamnameexist->rowCount();
        if($count==0) {
            if($insc_express->getMail1() == $insc_express->getVerifmail1() && $insc_express->getMail2() == $insc_express->getVerifmail2() && $insc_express->getMail3() == $insc_express->getVerifmail3() && $insc_express->getMail4() == $insc_express->getVerifmail4() && $insc_express->getMail5() == $insc_express->getVerifmail5()) {

                if($insc_express->getPassword() == $insc_express->getVerifpassword()) {
                    $part1 = $this->_bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");

                    $part1->execute(array(
                        ':name' => $insc_express->getName1(),
                        ':first_name' => $insc_express->getFirstname1(),
                        ':phone' => $insc_express->getTel1(),
                        ':mail' => $insc_express->getMail1()
                    ));
                    $part1->closeCursor();
                    $idpart1 = $this->_bdd->lastInsertId();

                    $part2 = $this->_bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");

                    $part2->execute(array(
                        ':name' => $insc_express->getName2(),
                        ':first_name' => $insc_express->getFirstname2(),
                        ':phone' => $insc_express->getTel2(),
                        ':mail' => $insc_express->getMail2()
                    ));
                    $part2->closeCursor();
                    $idpart2 = $this->_bdd->lastInsertId();

                    $part3 = $this->_bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");

                    $part3->execute(array(
                        ':name' => $insc_express->getName3(),
                        ':first_name' => $insc_express->getFirstname3(),
                        ':phone' => $insc_express->getTel3(),
                        ':mail' => $insc_express->getMail3()
                    ));
                    $part3->closeCursor();
                    $idpart3 = $this->_bdd->lastInsertId();

                    $part4 = $this->_bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");

                    $part4->execute(array(
                        ':name' => $insc_express->getName4(),
                        ':first_name' => $insc_express->getFirstname4(),
                        ':phone' => $insc_express->getTel4(),
                        ':mail' => $insc_express->getMail4()
                    ));
                    $part4->closeCursor();
                    $idpart4 = $this->_bdd->lastInsertId();

                    $part5 = $this->_bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");

                    $part5->execute(array(
                        ':name' => $insc_express->getName5(),
                        ':first_name' => $insc_express->getFirstname5(),
                        ':phone' => $insc_express->getTel5(),
                        ':mail' => $insc_express->getMail5()
                    ));
                    $part5->closeCursor();
                    $idpart5 = $this->_bdd->lastInsertId();

                    $basketregistration = $this->_bdd->prepare("INSERT INTO rdeexpressregister (team_name, establishment, password_manif)
                                                        VALUES ( :team_name, :establishment, :password_manif)");

                    $basketregistration->execute(array(
                    ':team_name' => $insc_express->getTeamname(),
                    ':establishment' => $insc_express->getEstablishment(),
                    ':password_manif' => $insc_express->getPassword()
                    ));
                    $basketregistration->closeCursor();

                    $basketrelation1 = $this->_bdd->prepare("INSERT INTO rdeexpressrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");

                    $basketrelation1->execute(array(
                    ':participant_id' => $idpart1,
                    ':name_team' => $insc_express->getTeamname()
                    ));
                    $basketrelation1->closeCursor();

                    $basketrelation2 = $this->_bdd->prepare("INSERT INTO rdeexpressrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");

                    $basketrelation2->execute(array(
                    ':participant_id' => $idpart2,
                    ':name_team' => $insc_express->getTeamname()
                    ));
                    $basketrelation2->closeCursor();

                    $basketrelation3 = $this->_bdd->prepare("INSERT INTO rdeexpressrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");

                    $basketrelation3->execute(array(
                    ':participant_id' => $idpart3,
                    ':name_team' => $insc_express->getTeamname()
                    ));
                    $basketrelation3->closeCursor();

                    $basketrelation4 = $this->_bdd->prepare("INSERT INTO rdeexpressrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");

                    $basketrelation4->execute(array(
                    ':participant_id' => $idpart4,
                    ':name_team' => $insc_express->getTeamname()
                    ));
                    $basketrelation4->closeCursor();

                    $basketrelation5 = $this->_bdd->prepare("INSERT INTO rdeexpressrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");

                    $basketrelation5->execute(array(
                    ':participant_id' => $idpart5,
                    ':name_team' => $insc_express->getTeamname()
                    ));
                    $basketrelation5->closeCursor();

                    mail($insc_express->getMail1(), $objetinscrip, $messageinscrip);
                    mail($insc_express->getMail2(), $objetinscrip, $messageinscrip);
                    mail($insc_express->getMail3(), $objetinscrip, $messageinscrip);
                    mail($insc_express->getMail4(), $objetinscrip, $messageinscrip);
                    mail($insc_express->getMail5(), $objetinscrip, $messageinscrip);

                    header('location: ../event_register_caroloexpress.php?success=1');

                    }
                    else {
                        header('location: ../event_register_caroloexpress.php?success=2');
                    }
                
                    

                } else {
                    header('location: ../event_register_caroloexpress.php?success=3');
            }
        }
        else {
            header('location: ../event_register_caroloexpress.php?success=4');
        }

    }

}
    
    ?>