            <?php

            require_once("modeles/DbSav.class.php");
            require_once("modeles/TicketMgr.class.php");     
            require_once("classes/TicketMgrException.class.php");
 
            // Initialisation des données

            // $action = 'connexion';
            $action = 'accueil';

            // Détermination de l'action en cours

            if(isset($_GET['action'])){
                $action = $_GET['action'];
            }


            switch ($action){
                case 'connexion' :
                    require ('vues/view_header.php');
                    require ('vues/view_connexion.php');
                    require('vues/view_footer.php');
                    break;
                case 'accueil' :
                    require('vues/view_header.php');
                    require('vues/view_search.php');
                    require('vues/view_nav.php');
                    require('vues/view_main_accueil.php');
                    // require('vues/view_pagination.php');
                    require('vues/view_footer.php');
                    break;
                case 'recherche' :
                    $recherche = $_GET['motrecherche'];
                    require ('vues/view_header.php');
                    require('vues/view_search.php');
                    require('vues/view_nav.php');
                    require ('vues/view_result_recherche.php');
                    require('vues/view_footer.php');
            }




            ?>



