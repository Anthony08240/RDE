<?php
require_once('../../../class/Database.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$objet = html_entity_decode(!empty($_POST['objet']) ? $_POST['objet'] : NULL);
$message = utf8_decode(!empty($_POST['message']) ? $_POST['message'] : NULL) . "<br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.";

foreach($_POST['groupe'] as $team => $value) {


    $equipes = $bdd->prepare("SELECT * FROM rdewarriorrelation, rdeparticipants WHERE rdewarriorrelation.name_team = '$team' AND rdewarriorrelation.participant_id = rdeparticipants.id_participant");
    $equipes->execute();

    while ($data = $equipes->fetch()) {
        mail($data['mail'], $objet, $message);
    }
}

$equipes->closeCursor();

header('location: ../inscriptions.php?success=8');

?>