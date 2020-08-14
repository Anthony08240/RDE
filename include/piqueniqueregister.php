<?php

require_once('../class/Database.php');
require_once('../class/User.php');
require_once('../class/ManagerUser.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$name = !empty($_POST['name']) ? $_POST['name'] : NULL;
$firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$verifmail = !empty($_POST['verifmail']) ? $_POST['verifmail'] : NULL;



$insc_piquenique = new UserPiquenique($establishment, $name, $firstname, $tel, $mail, $verifmail);

$insc = new ManagerUserIsncriptionPiquenique($bdd);

$insc->inscription_piquenique($insc_piquenique);


?>