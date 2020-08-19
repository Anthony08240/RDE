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


// inscription express

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


// inscription basket

class ManagerUserIsncriptionBasket {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }



    public function inscription_basket($insc_basket){

        $bdd = $this->_bdd;

        $establishment = $insc_basket->getEstablishment();

        $teamname = $insc_basket->getTeamname();

        $name1 = $insc_basket->getName1();
        $firstname1 = $insc_basket->getFirstname1();
        $tel1 = $insc_basket->getTel1();
        $mail1 = $insc_basket->getMail1();
        $verifmail1 = $insc_basket->getVerifmail1();

        $name2 = $insc_basket->getName2();
        $firstname2 = $insc_basket->getFirstname2();
        $tel2 = $insc_basket->getTel2();
        $mail2 = $insc_basket->getMail2();
        $verifmail2 = $insc_basket->getVerifmail2();

        $name3 = $insc_basket->getName3();
        $firstname3 = $insc_basket->getFirstname3();
        $tel3 = $insc_basket->getTel3();
        $mail3 = $insc_basket->getMail3();
        $verifmail3 = $insc_basket->getVerifmail3();

        $name4 = $insc_basket->getName4();
        $firstname4 = $insc_basket->getFirstname4();
        $tel4 = $insc_basket->getTel4();
        $mail4 = $insc_basket->getMail4();
        $verifmail4 = $insc_basket->getVerifmail4();

        $name5 = $insc_basket->getName5();
        $firstname5 = $insc_basket->getFirstname5();
        $tel5 = $insc_basket->getTel5();
        $mail5 = $insc_basket->getMail5();
        $verifmail5 = $insc_basket->getVerifmail5();

        $name6 = $insc_basket->getName6();
        $firstname6 = $insc_basket->getFirstname6();
        $tel6 = $insc_basket->getTel6();
        $mail6 = $insc_basket->getMail6();
        $verifmail6 = $insc_basket->getVerifmail6();

        $name7 = $insc_basket->getName7();
        $firstname7 = $insc_basket->getFirstname7();
        $tel7 = $insc_basket->getTel7();
        $mail7 = $insc_basket->getMail7();
        $verifmail7 = $insc_basket->getVerifmail7();

        $objetinscrip = utf8_decode("Confirmation d'inscription au Tournoi de Basket");
        $messageinscrip = utf8_decode("Bonjour l'équipe $teamname, votre inscription est bien prise en compte pour le Tournoi de Basket. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");

    if($mail1 == $verifmail1 && $mail2 == $verifmail2 && $mail3 == $verifmail3 && $mail4 == $verifmail4 && $mail5 == $verifmail5) {

        $teamnameexist = $bdd->prepare("SELECT team_name FROM rdebasketregister WHERE team_name = '$teamname'");
        $teamnameexist->execute();

        $count = $teamnameexist->rowCount();
        if($count>0) {
            header('location: ../event_register_basket.php?success=3');
            } else {
        
            $part1 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part1->execute(array(
                ':name' => $name1,
                ':first_name' => $firstname1,
                ':phone' => $tel1,
                ':mail' => $mail1
            ));
            $part1->closeCursor();
            $idpart1 = $bdd->lastInsertId();

            $part2 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part2->execute(array(
                ':name' => $name2,
                ':first_name' => $firstname2,
                ':phone' => $tel2,
                ':mail' => $mail2
            ));
            $part2->closeCursor();
            $idpart2 = $bdd->lastInsertId();

            $part3 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part3->execute(array(
                ':name' => $name3,
                ':first_name' => $firstname3,
                ':phone' => $tel3,
                ':mail' => $mail3
            ));
            $part3->closeCursor();
            $idpart3 = $bdd->lastInsertId();

            $part4 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part4->execute(array(
                ':name' => $name4,
                ':first_name' => $firstname4,
                ':phone' => $tel4,
                ':mail' => $mail4
            ));
            $part4->closeCursor();
            $idpart4 = $bdd->lastInsertId();

            $part5 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part5->execute(array(
                ':name' => $name5,
                ':first_name' => $firstname5,
                ':phone' => $tel5,
                ':mail' => $mail5
            ));
            $part5->closeCursor();
            $idpart5 = $bdd->lastInsertId();

            if($name6 != NULL && $firstname6 != NULL && $tel6 != NULL && $mail6 != NULL && $verifmail6 != NULL) {

                $part6 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

                $part6->execute(array(
                    ':name' => $name6,
                    ':first_name' => $firstname6,
                    ':phone' => $tel6,
                    ':mail' => $mail6
                ));
                $part6->closeCursor();
                $idpart6 = $bdd->lastInsertId();
            }

            if($name7 != NULL && $firstname7 != NULL && $tel7 != NULL && $mail7 != NULL && $verifmail7 != NULL) {

                $part7 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

                $part7->execute(array(
                    ':name' => $name7,
                    ':first_name' => $firstname7,
                    ':phone' => $tel7,
                    ':mail' => $mail7
                ));
                $part7->closeCursor();
                $idpart7 = $bdd->lastInsertId();
            }

            $basketregistration = $bdd->prepare("INSERT INTO rdebasketregister (team_name, establishment)
                                                VALUES ( :team_name, :establishment)");

            $basketregistration->execute(array(
            ':team_name' => $teamname,
            ':establishment' => $establishment
            ));
            $basketregistration->closeCursor();

            $basketrelation1 = $bdd->prepare("INSERT INTO rdebasketrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation1->execute(array(
            ':participant_id' => $idpart1,
            ':name_team' => $teamname
            ));
            $basketrelation1->closeCursor();

            $basketrelation2 = $bdd->prepare("INSERT INTO rdebasketrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation2->execute(array(
            ':participant_id' => $idpart2,
            ':name_team' => $teamname
            ));
            $basketrelation2->closeCursor();

            $basketrelation3 = $bdd->prepare("INSERT INTO rdebasketrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation3->execute(array(
            ':participant_id' => $idpart3,
            ':name_team' => $teamname
            ));
            $basketrelation3->closeCursor();

            $basketrelation4 = $bdd->prepare("INSERT INTO rdebasketrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation4->execute(array(
            ':participant_id' => $idpart4,
            ':name_team' => $teamname
            ));
            $basketrelation4->closeCursor();

            $basketrelation5 = $bdd->prepare("INSERT INTO rdebasketrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation5->execute(array(
            ':participant_id' => $idpart5,
            ':name_team' => $teamname
            ));
            $basketrelation5->closeCursor();

            if($name6 != NULL && $firstname6 != NULL && $tel6 != NULL && $mail6 != NULL && $verifmail6 != NULL) {

                $basketrelation6 = $bdd->prepare("INSERT INTO rdebasketrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

                $basketrelation6->execute(array(
                ':participant_id' => $idpart6,
                ':name_team' => $teamname
                ));
                $basketrelation6->closeCursor();
            }

            if($name7 != NULL && $firstname7 != NULL && $tel7 != NULL && $mail7 != NULL && $verifmail7 != NULL) {

                $basketrelation7 = $bdd->prepare("INSERT INTO rdebasketrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

                $basketrelation7->execute(array(
                ':participant_id' => $idpart7,
                ':name_team' => $teamname
                ));
                $basketrelation7->closeCursor();
            }

                mail($mail1, $objetinscrip, $messageinscrip);
                mail($mail2, $objetinscrip, $messageinscrip);
                mail($mail3, $objetinscrip, $messageinscrip);
                mail($mail4, $objetinscrip, $messageinscrip);
                mail($mail5, $objetinscrip, $messageinscrip);
                if($mail6 != NULL) {mail($mail6, $objetinscrip, $messageinscrip);};
                if($mail7 != NULL) {mail($mail7, $objetinscrip, $messageinscrip);};

                header('location: ../event_register_basket.php?success=1');
        }
    } else {
        header('location: ../event_register_basket.php?success=2');
    }

    }

}



// inscription warrior

class ManagerUserIsncriptionWarrior {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }



    public function inscription_warrior($insc_warrior){


        $bdd = $this->_bdd;

        $establishment = $insc_warrior->getEstablishment();

        $teamname = $insc_warrior->getTeamname();

        $name1 = $insc_warrior->getName1();
        $firstname1 = $insc_warrior->getFirstname1();
        $tel1 = $insc_warrior->getTel1();
        $mail1 = $insc_warrior->getMail1();
        $verifmail1 = $insc_warrior->getVerifmail1();

        $name2 = $insc_warrior->getName2();
        $firstname2 = $insc_warrior->getFirstname2();
        $tel2 = $insc_warrior->getTel2();
        $mail2 = $insc_warrior->getMail2();
        $verifmail2 = $insc_warrior->getVerifmail2();

        $name3 = $insc_warrior->getName3();
        $firstname3 = $insc_warrior->getFirstname3();
        $tel3 = $insc_warrior->getTel3();
        $mail3 = $insc_warrior->getMail3();
        $verifmail3 = $insc_warrior->getVerifmail3();

        $name4 = $insc_warrior->getName4();
        $firstname4 = $insc_warrior->getFirstname4();
        $tel4 = $insc_warrior->getTel4();
        $mail4 = $insc_warrior->getMail4();
        $verifmail4 = $insc_warrior->getVerifmail4();

        $name5 = $insc_warrior->getName5();
        $firstname5 = $insc_warrior->getFirstname5();
        $tel5 = $insc_warrior->getTel5();
        $mail5 = $insc_warrior->getMail5();
        $verifmail5 = $insc_warrior->getVerifmail5();

        $name6 = $insc_warrior->getName6();
        $firstname6 = $insc_warrior->getFirstname6();
        $tel6 = $insc_warrior->getTel6();
        $mail6 = $insc_warrior->getMail6();
        $verifmail6 = $insc_warrior->getVerifmail6();

        $name7 = $insc_warrior->getName7();
        $firstname7 = $insc_warrior->getFirstname7();
        $tel7 = $insc_warrior->getTel7();
        $mail7 = $insc_warrior->getMail7();
        $verifmail7 = $insc_warrior->getVerifmail7();

        $name8 = $insc_warrior->getName8();
        $firstname8 = $insc_warrior->getFirstname8();
        $tel8 = $insc_warrior->getTel8();
        $mail8 = $insc_warrior->getMail8();
        $verifmail8 = $insc_warrior->getVerifmail8();

        $objetinscrip = utf8_decode("Confirmation d'inscription au Carolo Warrior");
        $messageinscrip = utf8_decode("Bonjour l'équipe $teamname, votre inscription est bien prise en compte pour le Carolo Warrior. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");
        
            if($mail1 == $verifmail1 && $mail2 == $verifmail2 && $mail3 == $verifmail3 && $mail4 == $verifmail4 && $mail5 == $verifmail5 && $mail6 == $verifmail6 && $mail7 == $verifmail7 && $mail8 == $verifmail8) {
        
                $teamnameexist = $bdd->prepare("SELECT team_name FROM rdewarriorregister WHERE team_name = '$teamname'");
                $teamnameexist->execute();
        
                $count = $teamnameexist->rowCount();
                if($count>0) {
                        header('location: ../event_register_carolowarrior.php?success=3');
                    } else {
                
                    $part1 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");
        
                    $part1->execute(array(
                        ':name' => $name1,
                        ':first_name' => $firstname1,
                        ':phone' => $tel1,
                        ':mail' => $mail1
                    ));
                    $part1->closeCursor();
                    $idpart1 = $bdd->lastInsertId();
        
                    $part2 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");
        
                    $part2->execute(array(
                        ':name' => $name2,
                        ':first_name' => $firstname2,
                        ':phone' => $tel2,
                        ':mail' => $mail2
                    ));
                    $part2->closeCursor();
                    $idpart2 = $bdd->lastInsertId();
        
                    $part3 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");
        
                    $part3->execute(array(
                        ':name' => $name3,
                        ':first_name' => $firstname3,
                        ':phone' => $tel3,
                        ':mail' => $mail3
                    ));
                    $part3->closeCursor();
                    $idpart3 = $bdd->lastInsertId();
        
                    $part4 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");
        
                    $part4->execute(array(
                        ':name' => $name4,
                        ':first_name' => $firstname4,
                        ':phone' => $tel4,
                        ':mail' => $mail4
                    ));
                    $part4->closeCursor();
                    $idpart4 = $bdd->lastInsertId();
        
                    $part5 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");
        
                    $part5->execute(array(
                        ':name' => $name5,
                        ':first_name' => $firstname5,
                        ':phone' => $tel5,
                        ':mail' => $mail5
                    ));
                    $part5->closeCursor();
                    $idpart5 = $bdd->lastInsertId();
        
                    $part6 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");
        
                    $part6->execute(array(
                        ':name' => $name6,
                        ':first_name' => $firstname6,
                        ':phone' => $tel6,
                        ':mail' => $mail6
                    ));
                    $part6->closeCursor();
                    $idpart6 = $bdd->lastInsertId();
        
                    $part7 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");
        
                    $part7->execute(array(
                        ':name' => $name7,
                        ':first_name' => $firstname7,
                        ':phone' => $tel7,
                        ':mail' => $mail7
                    ));
                    $part7->closeCursor();
                    $idpart7 = $bdd->lastInsertId();
        
                    $part8 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
                                            VALUES ( :name, :first_name, :phone, :mail)");
        
                    $part8->execute(array(
                        ':name' => $name8,
                        ':first_name' => $firstname8,
                        ':phone' => $tel8,
                        ':mail' => $mail8
                    ));
                    $part8->closeCursor();
                    $idpart8 = $bdd->lastInsertId();
        
        
                    $basketregistration = $bdd->prepare("INSERT INTO rdewarriorregister (team_name, establishment)
                                                        VALUES ( :team_name, :establishment)");
        
                    $basketregistration->execute(array(
                    ':team_name' => $teamname,
                    ':establishment' => $establishment
                    ));
                    $basketregistration->closeCursor();
        
                    $basketrelation1 = $bdd->prepare("INSERT INTO rdewarriorrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");
        
                    $basketrelation1->execute(array(
                    ':participant_id' => $idpart1,
                    ':name_team' => $teamname
                    ));
                    $basketrelation1->closeCursor();
        
                    $basketrelation2 = $bdd->prepare("INSERT INTO rdewarriorrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");
        
                    $basketrelation2->execute(array(
                    ':participant_id' => $idpart2,
                    ':name_team' => $teamname
                    ));
                    $basketrelation2->closeCursor();
        
                    $basketrelation3 = $bdd->prepare("INSERT INTO rdewarriorrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");
        
                    $basketrelation3->execute(array(
                    ':participant_id' => $idpart3,
                    ':name_team' => $teamname
                    ));
                    $basketrelation3->closeCursor();
        
                    $basketrelation4 = $bdd->prepare("INSERT INTO rdewarriorrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");
        
                    $basketrelation4->execute(array(
                    ':participant_id' => $idpart4,
                    ':name_team' => $teamname
                    ));
                    $basketrelation4->closeCursor();
        
                    $basketrelation5 = $bdd->prepare("INSERT INTO rdewarriorrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");
        
                    $basketrelation5->execute(array(
                    ':participant_id' => $idpart5,
                    ':name_team' => $teamname
                    ));
                    $basketrelation5->closeCursor();
        
                    $basketrelation6 = $bdd->prepare("INSERT INTO rdewarriorrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");
        
                    $basketrelation6->execute(array(
                    ':participant_id' => $idpart6,
                    ':name_team' => $teamname
                    ));
                    $basketrelation6->closeCursor();
        
                    $basketrelation7 = $bdd->prepare("INSERT INTO rdewarriorrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");
        
                    $basketrelation7->execute(array(
                    ':participant_id' => $idpart7,
                    ':name_team' => $teamname
                    ));
                    $basketrelation7->closeCursor();
        
                    $basketrelation8 = $bdd->prepare("INSERT INTO rdewarriorrelation (participant_id, name_team)
                                                        VALUES ( :participant_id, :name_team)");
        
                    $basketrelation8->execute(array(
                    ':participant_id' => $idpart8,
                    ':name_team' => $teamname
                    ));
                    $basketrelation7->closeCursor();
        
                    mail($mail1, $objetinscrip, $messageinscrip);
                    mail($mail2, $objetinscrip, $messageinscrip);
                    mail($mail3, $objetinscrip, $messageinscrip);
                    mail($mail4, $objetinscrip, $messageinscrip);
                    mail($mail5, $objetinscrip, $messageinscrip);
                    mail($mail6, $objetinscrip, $messageinscrip);
                    mail($mail7, $objetinscrip, $messageinscrip);
                    mail($mail8, $objetinscrip, $messageinscrip);
        
                    header('location: ../event_register_carolowarrior.php?success=1');
        
                }
            } else {
                header('location: ../event_register_carolowarrior.php?success=2');
            }
    }
}


class ManagerUserIsncriptionPiquenique {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }

public function inscription_piquenique($insc_piquenique){


    $bdd = $this->_bdd;

    $establishment = $insc_piquenique->getEstablishment();

    $name = $insc_piquenique->getName();
    $firstname = $insc_piquenique->getFirstname();
    $tel = $insc_piquenique->getTel();
    $mail = $insc_piquenique->getMail();
    $verifmail = $insc_piquenique->getVerifmail();


    if($mail == $verifmail) {

        $balregistration = $bdd->prepare("INSERT INTO rdepiqueniquetregister (name, first_name, phone, mail, establishment )
                                          VALUES (:name, :first_name, :phone, :mail, :establishment)");
    
        $balregistration->execute(array(
        ':name' => $name,
        ':first_name' => $firstname,
        ':phone' => $tel,
        ':mail' => $mail,
        ':establishment' => $establishment
        ));
        $balregistration->closeCursor();
        $idparticipant = $bdd->lastInsertId();
    
        if ($idparticipant <= 200) {
            $objetinscrip = utf8_decode("Confirmation d'inscription au Pique-Nique");
            $messageinscrip = utf8_decode("Bonjour, votre inscription est bien prise en compte pour le Pique-Nique, le prix de votre repas sera de 3 euros. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");
    
            mail($mail, $objetinscrip, $messageinscrip);
        } else {
            $objetinscrip2 = utf8_decode("Confirmation d'inscription au Pique-Nique");
            $messageinscrip2 = utf8_decode("Bonjour, votre inscription est bien prise en compte pour le Pique-Nique, le prix de votre repas sera de 5 euros. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");
    
            mail($mail, $objetinscrip2, $messageinscrip2);
        }
    
        header('location: ../event_register_piquenique.php?success=1');
    }
    
    else {
        header('location: ../event_register_piquenique.php?success=2');
    }


    }
}
    
    ?>