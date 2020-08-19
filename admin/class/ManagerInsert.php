<?php 

class ManagerInsertGallery {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }

    public function insertgallery($gallery){

        $bdd = $this->_bdd;

        $avatar = $gallery->getAvatar();
        $alt = $gallery->getAlt();
        $category = $gallery->getCategory();


$dossier = '../../../img/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 3000000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 

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
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
     $newimage = $bdd->prepare("INSERT INTO rdegallery (image_link, alt, category)
     VALUES ( :avatar, :alt, :category)");

     $newimage->execute(array(
     ':avatar' => $fichier,
     ':alt' => $alt,
     ':category' => $category
     ));

     header("Location: ../../admin.php?success=galleryadd");

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo "Echec de l'upload !";
     }
}
else
{
     echo $erreur;
}
        
  }

}


class ManagerInsertPartners {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }

    public function insertpartners($partners){

        $bdd = $this->_bdd;
        
        $avatar = $partners->getAvatar();
        $alt = $partners->getAlt();
        $website_link = $partners->getWebsite_link();

$dossier = '../../../img/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 3000000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 

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
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
        $newpartner = $bdd->prepare("INSERT INTO rdepartners (image, alt, website_link)
                                        VALUES ( :image, :alt, :website_link)");

        $newpartner->execute(array(
            ':image' => $fichier,
            ':alt' => $alt,
            ':website_link' => $website_link
        ));
        $newpartner->closeCursor();

        header("Location: ../../admin.php?success=partneradd");

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo "Echec de l'upload !";
     }
}
else
{
     echo $erreur;
}

    }
}


class ManagerInsertTestimonials {
    //variable de notre classe
    private $_bdd;

    //création du constructeur
    public function __construct($bdd) {
      $this->_bdd = $bdd;
    }

    public function inserttestimonials($testimonials){

        $bdd = $this->_bdd;
        
        $first_name = $testimonials->getFirst_name();
        $age = $testimonials->getAge();
        $establishment = $testimonials->getEstablishment();
        $text = $testimonials->getText();


$newtestimonial = $bdd->prepare("INSERT INTO rdetestimonials (first_name, age, establishment, text)
                                VALUES ( :first_name, :age, :establishment, :text)");

$newtestimonial->execute(array(
  ':first_name' => $first_name,
  ':age' => $age,
  ':establishment' => $establishment,
  ':text' => $text
));
$newtestimonial->closeCursor();

header("Location: ../../admin.php?success=testimonialadd");


    }
}

?>