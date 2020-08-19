<?php
require_once('../../../class/Database.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$idgallery = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM rdegallery WHERE id_image = $idgallery");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=gallerydeleted");

?>