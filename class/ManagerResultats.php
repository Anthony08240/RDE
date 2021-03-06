<?php

// resultats QCM

class ManagerResultats {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }

    public function resultats($resultat){

        $note = $resultat->getNote();
        $note2 = $resultat->getNote2();
        $team = $resultat->getTeam();
        $emplacement = $resultat->getEmplacement();
        $time = $resultat->getTime();

        if(isset($_FILES['image'])){

            $image = !empty($_POST['image']) ? $_POST['image'] : NULL;
            $dossier = '../img_user/';
            $fichier = rand(0,6852865) . basename($_FILES['image']['name']);
            $taille_maxi = 5000000;
            $taille = filesize($_FILES['image']['tmp_name']);
            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($_FILES['image']['name'], '.'); 
        
        }
        
        if(isset($_POST['reponse'])) {
        
            foreach ($_POST['reponse'] as $idquestion => $value) {
                $statut = $this->_bdd->prepare("SELECT statut, points, id_question FROM reponses WHERE reponse_id = $value");
                $statut->execute();
        
                while ($reponse = $statut->fetch()) {
                    $thisquestion = $reponse['id_question'];
                    $siunereponseestfausse = $this->_bdd->prepare("SELECT points FROM reponses WHERE id_question = $thisquestion");
                    $siunereponseestfausse->execute();
        
                    if ($reponse['statut'] == 1 ){ 
        
                        $note = $note + $reponse['points'];
        
                    }
                }
            }

            $dejafait = $this->_bdd->prepare("SELECT * FROM pointsqcm WHERE team_name = '$team' AND emplacement = '$emplacement'");
            $dejafait->execute();
        
            $count = $dejafait->rowCount();
            if($count==0) {
        
                if(isset($_FILES['image'])){
        
                    //Début des vérifications de sécurité...
                    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                    {
                        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg';
                    }
                    if($taille>$taille_maxi)
                    {
                        $erreur = 'Le fichier est trop gros...';
                    }
                    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
                    {
                        //On formate le nom du fichier ici...
                        $fichier = strtr($fichier, 
                            'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                            'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                        if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                        {
        
                            $insertpoints = $this->_bdd->prepare("INSERT INTO pointsqcm (team_name, emplacement, points, heure, reponse, image)
                                                            VALUES (:team_name, :emplacement, :points, :heure, :reponse, :image)");
                            $insertpoints->execute(array(
                                'team_name' => $resultat->getTeam(),
                                'emplacement' => $resultat->getEmplacement(),
                                'points' => $note,
                                'heure' => $resultat->getTime(),
                                'reponse' => $_POST['reponse'][key($_POST['reponse'])],
                                'image' => $fichier
                            ));
                            $insertpoints->closeCursor();
        
                            $finduqcm = $this->_bdd->prepare("SELECT * FROM pointsqcm WHERE team_name = '$team'");
                            $finduqcm->execute();
        
                            $count2 = $finduqcm->rowCount();
        
                            if ($count2==16) {
                                $heuredefin = $this->_bdd->prepare("UPDATE rdeexpressregister
                                                                SET heure_fin = :heure_fin
                                                                WHERE team_name = :team_name");
                                $heuredefin->execute(array(
                                    'heure_fin' => $resultat->getTime(),
                                    'team_name' => $resultat->getTeam()
                                ));
                                $heuredefin->closeCursor();
        
                                $totalpoints = $this->_bdd->prepare("SELECT points FROM pointsqcm WHERE team_name = '$team'");
                                $totalpoints->execute();
        
                                while ($data = $totalpoints->fetch()) {

                                    $note2 = $note2 + $data['points'];
                                }
                                $totalpoints->closeCursor();
        
                                $insertpoints = $this->_bdd->prepare("UPDATE rdeexpressregister
                                                                SET total = :total
                                                                WHERE team_name = :team_name");
                                $insertpoints->execute(array(
                                'total' => $note2,
                                'team_name' => $resultat->getTeam()
                                ));
                                $insertpoints->closeCursor();
        
                            }
                            header('location: ../qcm.php?success=3');
        
                        } else 
                        {
                            echo "Echec lors du téléchargement de la photo, le fichier est sûrement trop volumineux.";
                        }
                    }
                    else
                    {
                        echo $erreur;
                    }
                } else 
                
                    $insertpoints = $this->_bdd->prepare("INSERT INTO pointsqcm (team_name, emplacement, points, heure, reponse)
                                                    VALUES (:team_name, :emplacement, :points, :heure, :reponse)");
                    $insertpoints->execute(array(
                        'team_name' => $resultat->getTeam(),
                        'emplacement' => $resultat->getEmplacement(),
                        'points' => $note,
                        'heure' => $resultat->getTime(),
                        'reponse' => $_POST['reponse'][key($_POST['reponse'])]
                    ));
                    $insertpoints->closeCursor();
        
                    $finduqcm = $this->_bdd->prepare("SELECT * FROM pointsqcm WHERE team_name = '$team'");
                    $finduqcm->execute();
        
                    $count2 = $finduqcm->rowCount();
        
                    if ($count2==16) {
                        $heuredefin = $this->_bdd->prepare("UPDATE rdeexpressregister
                                                        SET heure_fin = :heure_fin
                                                        WHERE team_name = :team_name");
                        $heuredefin->execute(array(
                            'heure_fin' => $resultat->getTime(),
                            'team_name' => $resultat->getTeam()
                        ));
                        $heuredefin->closeCursor();
        
                        $totalpoints = $this->_bdd->prepare("SELECT points FROM pointsqcm WHERE team_name = '$team'");
                        $totalpoints->execute();
        
                        while ($data = $totalpoints->fetch()) {
                            
                            $note2 = $note2 + $data['points'];
                        }
                        $totalpoints->closeCursor();
        
                        $insertpoints = $this->_bdd->prepare("UPDATE rdeexpressregister
                                                        SET total = :total
                                                        WHERE team_name = :team_name");
                        $insertpoints->execute(array(
                        'total' => $note2,
                        'team_name' => $resultat->getTeam()
                        ));
                        $insertpoints->closeCursor();
        
                }
                    header('location: ../qcm.php?success=3');
            } else {
                header('location: ../qcm.php?success=2');
            }
        }
        else {
            echo "Vous n'avez entré aucune réponse";
        }

    }
}