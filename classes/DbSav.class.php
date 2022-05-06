<?php


class DbSav {
	// variables statiques
	private static $connexion;
    //$user = $_POST['login'];

	// Pas de constructeur explicite


	// fonction de connexion à la BDD
    protected static function connect() {

        // Récupérer les paramètres de la BDD avec les sections
        $tParam = parse_ini_file("./param/param.ini", true); 
        
        // Crée dynamiquement les variables équivalentes 
        // aux clés de tParam pour la section "BDD"
        extract($tParam["BDD"]); 

        $dsn = "mysql:host=" . $hote 
               . "; port=" . $port
               . "; dbname=" . $dbname . "; charset=utf8";
        
        
		try {
			$mysqlPDO = new PDO($dsn, $user, $password);
            $mysqlPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //echo "Vous êtes connecté à la base de données " . $user;
            //header("location:../index.php?action=accueil");
		} catch(Exception $e) { 
			// en cas erreur on affiche un message et on arrete tout
			die('<h1>Erreur de connexion : </h1>' . $e->getMessage());
		}
		
		DbSav::$connexion = $mysqlPDO;
		
		return DbSav::$connexion;
	}

	// fonction de 'déconnexion' de la BDD
    public static function disconnect(){
        DbSav::$connexion = null;
    }

    // Pattern singleton
    public static function getConnexion() {
        if (DbSav::$connexion != null) {
            return DbSav::$connexion;
            header('location:index.php?action=connexion');
        } else {
            return DbSav::connect();
        }
    }



}
?>