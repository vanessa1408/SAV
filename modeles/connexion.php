<?php
//Page de controle de login et de connexion à la BDD



$tparam = parse_ini_file("../param/param.ini",true);
extract($tparam["BDD"]); // PENSER A SUPPRIMER DU FICHIER PARAM.INI USER ET PASSWORD
$dsn = "mysql:host=".$hote."; port=".$port."; dbname=".$dbname."; charset=utf8";
$user = $_POST['login'];
$password = $_POST['password'];
   

try{
    $monPdo = new PDO($dsn, $user, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Vous êtes connecté à la base de données {$user}";
    header('location:../index.php?action=accueil');
    session_start();
    $_SESSION['login'] = $user;
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
    $action = 'connexionErreur';
}


?>