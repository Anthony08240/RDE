<?php

include('class/Database.php');

// $servername = "db5000303630.hosting-data.io";
// $username = "dbu526536";
// $password = "7f,7]WCg";
// $dbname = "dbs296617";

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

?>