<?php
require_once('../../../class/Database.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

foreach($_POST['groupe'] as $team => $value) {


    $equipes = $bdd->prepare("DELETE FROM `rdecuisinerelation` WHERE name_team = '$team'");
    $equipes->execute();

    $equipes2 = $bdd->prepare("DELETE FROM `rdecuisineregister` WHERE team_name = '$team'");
    $equipes2->execute();
}

$equipes->closeCursor();
$equipes2->closeCursor();

header('location: ../inscriptions.php?success=delete');

?>