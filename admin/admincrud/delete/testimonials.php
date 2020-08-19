<?php
require_once('../../../class/Database.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$idtestimonial = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM rdetestimonials WHERE id_testimonial = $idtestimonial");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=testimonialdeleted");

?>