<?php
require_once('../../../class/Database.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();
$idgallery = $_GET['id'];

$image_link = !empty($_POST['image_link']) ? $_POST['image_link'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;
$category = !empty($_POST['category']) ? $_POST['category'] : NULL;

$req = $bdd->prepare(" UPDATE rdegallery SET image_link = :image_link, alt = :alt, category = :category WHERE id_image = $idgallery");
$req->execute(array(
    ':image_link' => $image_link,
    ':alt' => $alt,
    ':category' => $category
));
$req->closeCursor();

    header("Location: ../../admin.php?success=galleryupdated");
?>