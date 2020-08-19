<?php
require_once('../../../class/Database.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$idpartner = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM rdepartners WHERE id_partner = $idpartner");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=partnerdeleted");

?>