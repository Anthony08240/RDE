<?php
require_once('../class/Database.php');
require_once('../class/User.php');
require_once('../class/ManagerUser.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;

$teamname = !empty($_POST['teamname']) ? $_POST['teamname'] : NULL;
$password = !empty($_POST['password']) ? $_POST['password'] : NULL;
$verifpassword = !empty($_POST['verifpassword']) ? $_POST['verifpassword'] : NULL;

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

$insc_express = new UserExpress($establishment, $teamname, $password, $verifpassword, $name1, $firstname1, $tel1, $mail1, $verifmail1, 
$name2, $firstname2, $tel2, $mail2, $verifmail2, $name3, $firstname3, $tel3, $mail3, $verifmail3, 
$name4, $firstname4, $tel4, $mail4, $verifmail4, $name5, $firstname5, $tel5, $mail5, $verifmail5);

$insc = new ManagerUserIsncriptionExpress($bdd);

$insc->inscription_express($insc_express);

?>