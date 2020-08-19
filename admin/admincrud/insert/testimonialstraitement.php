<?php
require_once('../../../class/Database.php');
require_once('../../class/Insert.php');
require_once('../../class/ManagerInsert.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$first_name = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;
$age = !empty($_POST['age']) ? $_POST['age'] : NULL;
$establishment = !empty($_POST['establishment']) ? $_POST['establishment'] : NULL;
$text = !empty($_POST['text']) ? $_POST['text'] : NULL;


$testimonials = new Testimonials($first_name, $age, $establishment, $text);

$insert = new ManagerInsertTestimonials($bdd);

$insert->inserttestimonials($testimonials);

?>