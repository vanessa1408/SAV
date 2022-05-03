            <?php

            session_start();

            require_once("modeles/DbSav.class.php");
            require_once("modeles/TicketMgr.class.php");     
            require_once("modeles/ClientMgr.class.php");
            require_once("classes/TicketMgrException.class.php");
 
            // Initialisation des données

            $action = 'connexion';
            // $action = 'accueil';

            // Détermination de l'action en cours

            if(isset($_GET['action'])){
                $action = $_GET['action'];
            }


            if(isset($_SESSION['login'])){
               $login = $_SESSION['login'];
            }

            // if(!isset($_SESSION['user'])){
            //     $action='connexion';
            // }



            switch ($action){
                case 'connexion' :
                    require ('vues/view_header.php');
                    require ('vues/view_connexion.php');
                    require('vues/view_footer.php');
                    break;
                case 'deconnexion' :
                    session_destroy();
                    require ('vues/view_header.php');
                    require ('vues/view_connexion.php');
                    require('vues/view_footer.php');
                    break;
                case 'connexionErreur' :
                    require ('vues/view_header.php');
                    Echo "Erreur de login/password !";
                    require ('vues/view_connexion.php');
                    require('vues/view_footer.php');
                    break;

                case 'accueil' :
                    try {
                        $listeTicket = TicketMgr::getListeTickets(PDO::FETCH_CLASS);
                    } catch (TicketMgrException $err) {
                        echo "Il n'y a pas de ticket en cours.";
                    }
                    require('vues/view_header.php');
                    require('vues/view_search.php');
                    require('vues/view_nav.php');
                    require('vues/view_main_accueil.php');
                    require('vues/view_footer.php');
                    break;
                case 'recherchedossier' :
                    $recherche = $_GET['motrecherche'];
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_result_dossier.php');
                    require('vues/view_footer.php');
                    break;
                case 'affTicket' :
                    $idTicket = $_GET['id'];
                    $idCommande = $_GET['idCommande'];
                    $modeobjet = PDO::FETCH_OBJ;
                    $infosTicket=TicketMgr::getInfosTicket($idTicket,$modeobjet);  
                    $infosClient=ClientMgr::getInfoClientByArt($idCommande);
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_ticket.php');
                    require('vues/view_footer.php');
                    break;
                }




            ?>



