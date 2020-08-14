<?php

require_once('../class/Database.php');
require_once('../class/User.php');
require_once('../class/ManagerUser.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;

$teamname = !empty($_POST['teamname']) ? $_POST['teamname'] : NULL;

$name1 = !empty($_POST['name1']) ? $_POST['name1'] : NULL;
$firstname1 = !empty($_POST['firstname1']) ? $_POST['firstname1'] : NULL;
$tel1 = !empty($_POST['tel1']) ? $_POST['tel1'] : NULL;
$mail1 = !empty($_POST['mail1']) ? $_POST['mail1'] : NULL;
$verifmail1 = !empty($_POST['verifmail1']) ? $_POST['verifmail1'] : NULL;

$name2 = !empty($_POST['name2']) ? $_POST['name2'] : NULL;
$firstname2 = !empty($_POST['firstname2']) ? $_POST['firstname2'] : NULL;
$tel2 = !empty($_POST['tel2']) ? $_POST['tel2'] : NULL;
$mail2 = !empty($_POST['mail2']) ? $_POST['mail2'] : NULL;
$verifmail2 = !empty($_POST['verifmail2']) ? $_POST['verifmail2'] : NULL;

$name3 = !empty($_POST['name3']) ? $_POST['name3'] : NULL;
$firstname3 = !empty($_POST['firstname3']) ? $_POST['firstname3'] : NULL;
$tel3 = !empty($_POST['tel3']) ? $_POST['tel3'] : NULL;
$mail3 = !empty($_POST['mail3']) ? $_POST['mail3'] : NULL;
$verifmail3 = !empty($_POST['verifmail3']) ? $_POST['verifmail3'] : NULL;

$name4 = !empty($_POST['name4']) ? $_POST['name4'] : NULL;
$firstname4 = !empty($_POST['firstname4']) ? $_POST['firstname4'] : NULL;
$tel4 = !empty($_POST['tel4']) ? $_POST['tel4'] : NULL;
$mail4 = !empty($_POST['mail4']) ? $_POST['mail4'] : NULL;
$verifmail4 = !empty($_POST['verifmail4']) ? $_POST['verifmail4'] : NULL;

$name5 = !empty($_POST['name5']) ? $_POST['name5'] : NULL;
$firstname5 = !empty($_POST['firstname5']) ? $_POST['firstname5'] : NULL;
$tel5 = !empty($_POST['tel5']) ? $_POST['tel5'] : NULL;
$mail5 = !empty($_POST['mail5']) ? $_POST['mail5'] : NULL;
$verifmail5 = !empty($_POST['verifmail5']) ? $_POST['verifmail5'] : NULL;

$name6 = !empty($_POST['name6']) ? $_POST['name6'] : NULL;
$firstname6 = !empty($_POST['firstname6']) ? $_POST['firstname6'] : NULL;
$tel6 = !empty($_POST['tel6']) ? $_POST['tel6'] : NULL;
$mail6 = !empty($_POST['mail6']) ? $_POST['mail6'] : NULL;
$verifmail6 = !empty($_POST['verifmail6']) ? $_POST['verifmail6'] : NULL;

$name7 = !empty($_POST['name7']) ? $_POST['name7'] : NULL;
$firstname7 = !empty($_POST['firstname7']) ? $_POST['firstname7'] : NULL;
$tel7 = !empty($_POST['tel7']) ? $_POST['tel7'] : NULL;
$mail7 = !empty($_POST['mail7']) ? $_POST['mail7'] : NULL;
$verifmail7 = !empty($_POST['verifmail7']) ? $_POST['verifmail7'] : NULL;

$name8 = !empty($_POST['name8']) ? $_POST['name8'] : NULL;
$firstname8 = !empty($_POST['firstname8']) ? $_POST['firstname8'] : NULL;
$tel8 = !empty($_POST['tel8']) ? $_POST['tel8'] : NULL;
$mail8 = !empty($_POST['mail8']) ? $_POST['mail8'] : NULL;
$verifmail8 = !empty($_POST['verifmail8']) ? $_POST['verifmail8'] : NULL;


$insc_warrior = new UserWarrior($establishment, $teamname, $name1, $firstname1, $tel1, $mail1, $verifmail1, 
$name2, $firstname2, $tel2, $mail2, $verifmail2, $name3, $firstname3, $tel3, $mail3, $verifmail3, 
$name4, $firstname4, $tel4, $mail4, $verifmail4, $name5, $firstname5, $tel5, $mail5, $verifmail5, 
$name6, $firstname6, $tel6, $mail6, $verifmail6, $name7, $firstname7, $tel7, $mail7, $verifmail7, 
$name8, $firstname8, $tel8, $mail8, $verifmail8);

$insc = new ManagerUserIsncriptionWarrior($bdd);

$insc->inscription_warrior($insc_warrior);


?>