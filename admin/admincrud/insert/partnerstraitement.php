<?php
require_once('../../../class/Database.php');
require_once('../../class/Insert.php');
require_once('../../class/ManagerInsert.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$image = !empty($_POST['image']) ? $_POST['image'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;
$website_link = !empty($_POST['website_link']) ? $_POST['website_link'] : NULL;

$partners = new Partners($avatar, $alt, $website_link);

$insert = new ManagerInsertPartners($bdd);

$insert->insertpartners($partners);
?>