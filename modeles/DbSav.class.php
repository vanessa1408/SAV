<?php


if(isset($_POST['login'])){
    DbSav::getConnexion();
}

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
			$mysqlPDO = new PDO($dsn, $user, $pwd,
							array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $mysqlPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Vous êtes connecté à la base de données {$user}";
            // header("location:index.php?action=accueil");
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
        } else {
            return DbSav::connect();
        }
    }
}

?>