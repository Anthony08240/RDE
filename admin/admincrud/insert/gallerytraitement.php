<?php

require_once('../../../class/Database.php');
require_once('../../class/Insert.php');
require_once('../../class/ManagerInsert.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$avatar = !empty($_POST['avatar']) ? $_POST['avatar'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;
$category = !empty($_POST['category']) ? $_POST['category'] : NULL;

$gallery = new Gallery($avatar, $alt, $category);

$insert = new ManagerInsertGallery($bdd);

$insert->insertgallery($gallery);

?>