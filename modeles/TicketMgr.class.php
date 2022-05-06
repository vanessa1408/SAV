<?php 


    class TicketMgr {

        public static function getListeTickets(int $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT IdTicket, c.NomClient, c.PrénomClient, k.IdCommande, LibType 
            FROM ticketsav t
            JOIN commande k ON k.IdCommande = t.IdCommande
            JOIN client c ON c.IdCLient = k.IdCLient
            JOIN type_dossier td ON td.IdTypeDossier = t.IdTypeDossier";
            // Connexion
            $listTickets = DbSav::getConnexion()->query($sql);
            if($typageRet===PDO::FETCH_CLASS){
                include ("classes/Ticket.class.php");
                $listTickets->setFetchMode(
                    PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    "ticketsav",
                    array('IdTicket', 'DateAppelClient','DatePEC','DateFermTicket','Motif','Observations','	IdDiag','IdTypeDossier','IDTypeInter','IdCommande','IdTechnicien'));
                $tabTicket = $listTickets->fetchAll();
    
            } else {
                $tabTicket = $listTickets->fetchAll($typageRet);
            }
           
            // Fermer le curseur
            $listTickets->closeCursor();
            // Deconnecte du serveur
            DbSav::disconnect();
    
            // Retourne le tableau
            return $tabTicket;
        }

        public static function getInfosTicket(int $idTicket, int $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT t.IdTicket, DateAppelClient, DatePEC, DateFermTicket, Motif, Observations, t.IdCommande, DateCommande, StatutCommande, d.LibDiagnostic, IdDiag, DateDiag, LibTypeInter,LibType FROM ticketsav t
            JOIN commande cd on t.IdCommande = cd.IdCommande
            JOIN type_dossier td on td.IdTypeDossier = t.IdTypeDossier
            JOIN typeinter ti on ti.IDTypeInter = t.IDTypeInter
            LEFT JOIN diagnostic d on d.IdTicket = t.IdTicket
            WHERE t.IdTicket = $idTicket";
            // Connexion
            $connect = DbSav::getConnexion()->query($sql);
            if($typageRet===PDO::FETCH_CLASS){
               include ("classes/Ticket.class.php");
               $connect->setFetchMode(
                   PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                   "ticketsav",
                   array('IdTicket', 'DateAppelClient','DatePEC','DateFermTicket','Motif','Observations','    IdDiag','IdTypeDossier','IDTypeInter','IdCommande','IdTechnicien'));
               $tabTicket = $connect->fetchAll();

           } else {
               $tabTicket = $connect->fetch($typageRet);
           }
           // Fermer le curseur
           $connect->closeCursor();
           // Deconnecte du serveur
           DbSav::disconnect();

           // Retourne le tableau
           return $tabTicket;
       }

       public static function getTypeDossier() {
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("SELECT * FROM typeinter");
            $tab = $resultat->fetchAll();
            return $tab;
       }

       public static function getMotif() {
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("SELECT * FROM type_dossier");
            $tab = $resultat->fetchAll();
            return $tab;
       }

       public static function creaTicket($IdTypeDossier, $IdTypeInter, $IdCommande, $idTechnicien, $date=null) {
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("INSERT INTO `ticketsav`(`IdTypeDossier`, `IDTypeInter`, 
                                                        `IdCommande`, `IdTechnicien`,`DateAppelClient`) 
                                                        VALUES ($IdTypeDossier,$IdTypeInter,$IdCommande,$idTechnicien,now())");
            $resultat->execute(); 
            return $resultat;
       }
    }

   
?>