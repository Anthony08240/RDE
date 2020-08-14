<?php
session_start();


require_once('../../class/Database.php');
require_once('../../class/Resultats.php');
require_once('../../class/ManagerResultats.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$team = $_SESSION['team'];
$note = 0;
$note2 = 0;
$emplacement=$_GET['emplacement'];
date_default_timezone_set('Europe/Paris');
$time = date("H:i:s");


$resultat = new Resultats($team, $note, $note2, $emplacement, $time);

$result = new ManagerResultats($bdd);

$result->resultats($resultat);

?>