<?php

class DbSav {
	// variables statiques
	private static $connexion;

	// Pas de constructeur explicite

	// fonction de connexion à la BDD
    private static function connect() {
        // Récupérer les paramètres de la BDD avec les sections
        $tParam = parse_ini_file("param/param.ini", true); 
        
        // Crée dynamiquement les variables équivalentes 
        // aux clés de tParam pour la section "BDD"
        extract($tParam["BDD"]); 

        $dsn = "mysql:host=" . $hote 
               . "; port=" . $port
               . "; dbname=" . $dbname . "; charset=utf8";
        
		try {
			$mysqlPDO = new PDO($dsn, $user, $password,
							array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		} catch(Exception $e) { 
			// en cas erreur on affiche un message et on arrete tout
			die('<h1>Erreur de connexion : </h1>' . $e->getMessage());
		}
		
		DbSav::$connexion = $mysqlPDO;
		
		return DbSav::$connexion;
	}

	// fonction de 'déconnexion' de la BDD
    public static function disconnect(){
        DbAirDi::$connexion = null;
    }

    // Pattern singleton
    public static function getConnexion() {
        if (DbAirDi::$connexion != null) {
            return DbAirDi::$connexion;
        } else {
            return DbAirDi::connect();
        }
    }
}

?>