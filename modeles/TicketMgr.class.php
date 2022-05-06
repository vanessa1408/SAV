<?php 


    class TicketMgr {

        public static function getListeTickets(int $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT idTicket, c.NomClient, c.PrénomClient, k.IdCommande, LibType 
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
                    array('IdTicket', 'DateAppelClient','DatePEC','DateFermTicket','Motif','Observations','	IdDiag','IdTypeDossier','IDTypeInter','IdCommande','IdTechnicien'));
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

        public static function getTicketbyMot(string $recherche, int $typageRet = PDO::FETCH_CLASS ){
            // Préparation de la requête SQL
            $sql="SELECT `IdTicket`, cl.NomClient, cl.PrénomClient, cd.IdCommande, LibTypeInter
            FROM `ticketsav` t
            JOIN commande cd on cd.IdCommande = t.IdCommande
            JOIN client cl on cl.IdClient = cd.IdClient
            JOIN typeinter ti on ti.IDTypeInter = t.IDTypeInter
            WHERE cl.NomClient LIKE concat('%','$recherche','%') || cl.PrénomClient LIKE concat('%','$recherche','%') || t.IdCommande LIKE concat('%','$recherche','%')|| IdTicket LIKE concat('%','$recherche','%')";
           // Connexion
            $connect = DbSav::getConnexion()->query($sql);
            if($typageRet===PDO::FETCH_CLASS){
               include ("classes/Ticket.class.php");
               $connect->setFetchMode(
                   PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                   "ticketsav",
                   array('IdTicket', 'DateAppelClient','DatePEC','DateFermTicket','Motif','Observations','	IdDiag','IdTypeDossier','IDTypeInter','IdCommande','IdTechnicien'));
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


    //    public static function updateDiagnostic(string $libelleDiag, int $idDiag){
          
    //     // Préparation de la requête SQL
    //     $sql="UPDATE diagnostic SET LibDiagnostic = '$libelleDiag' WHERE IdDiag = $idDiag";
    //     // Connexion
    //     $connexion = DbSav::getConnexion()->query($sql);
            

    //     }
    
        public static function getListDiagnostic(int $idTicket) {
        // Préparation de la requête SQL
        $sql="SELECT `LibDiagnostic`,`DateDiag` FROM `diagnostic` WHERE `IdTicket`= $idTicket";
        // Connexion
        $connexion = DbSav::getConnexion()->query($sql);
        $list = $connexion->fetchALL(PDO::FETCH_CLASS);
    
        // Fermer le curseur
        $connexion->closeCursor();
        // Deconnecte du serveur
        DbSav::disconnect();

        // Retourne le tableau
        return $list;

        }


       public static function createDiagnostic(string $libelleDiag, int $idTicket, string $date = null) {
        // Préparation de la requête SQL
        $sql="INSERT INTO diagnostic(LibDiagnostic, IdTicket, DateDiag) VALUES ('$libelleDiag',$idTicket,now())";
        // Connexion
        $connexion = DbSav::getConnexion()->query($sql);

        }

        public static function updateInfosTicket(int $idTicket, string $dateCrea, int $numCmd, string $statCmd, string $datePEC, string $motif, string $obs, string $dateCloture){
            $sql="UPDATE `ticketsav` SET `DateAppelClient`='$dateCrea',`DatePEC`='$datePEC',`DateFermTicket`='$dateCloture',`Motif`='$motif',`Observations`='$obs',`IdCommande`='$numCmd' WHERE `IdTicket`=$idTicket";
            // Connexion
            $connexion = DbSav::getConnexion()->query($sql);

        }


    }

?>