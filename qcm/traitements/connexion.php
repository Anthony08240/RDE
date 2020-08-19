<?php
session_start();

require_once('../../class/Database.php');
require_once('../../class/User.php');
require_once('../../class/ManagerUser.php');

$bdd = new Database('localhost', 'rde', 'root', '');
$bdd = $bdd->PDOConnexion();

$teamname = $_POST['teamname'];
$password = $_POST['password'];


$user = new User($teamname,$password);

$login = new ManagerUser($bdd);

$login->signup($user);

?>