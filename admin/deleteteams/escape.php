<?php
require_once('../../../class/Database.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

foreach($_POST['groupe'] as $team => $value) {


    $equipes = $bdd->prepare("DELETE FROM `rdeescaperegister` WHERE team_name = '$team'");
    $equipes->execute();
}

$equipes->closeCursor();

header('location: ../inscriptions.php?success=delete');

?>