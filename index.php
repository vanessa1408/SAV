<?php

            require_once("modeles/DbSav.class.php");
            require_once("modeles/TicketMgr.class.php");     
            require_once("modeles/Recherche_Dossier.class.php");
            require_once("modeles/ClientMgr.class.php");
            require_once("classes/TicketMgrException.class.php");
            require_once("classes/Client.class.php");
            require_once("classes/Commande.class.php");
            require_once("classes/Article.class.php");
            
var_dump($_POST);
 
            // Initialisation des données

            // $action = 'connexion';
            $action = 'accueil';

            session_start();
 
            // Initialisation des données

            $action = 'connexion';
            // $action = 'accueil';


            // Détermination de l'action en cours

            if(isset($_GET['action'])){
                $action = $_GET['action'];
            }
            if(isset($_POST['nomClient'])){
                $nom = $_POST["nomClient"];
            }
            if(isset($_POST['Ncmd'])){
                $numCMD = $_POST['Ncmd'];
            }
            if(isset($_POST['refArticle'])){
                $numArt = $_POST['refArticle'];
            }
            if(isset($_GET['IdClient'])){
                $id = $_GET['IdClient'];
            }
            if(isset($_SESSION['login'])){
               $login = $_SESSION['login'];
            }



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
                    require ('vues/view_result_recherche.php');
                    require('vues/view_footer.php');
                    break;
                case 'recherche' :
                    require ('vues/view_header.php');
                    require ('vues/view_nav.php');
                    require ('vues/view_form_recherche.php');
                    require ('vues/view_footer.php');
                    break;
                case 'diagnostic' :
                    require ('vues/view_header.php');
                    require ('vues/view_nav.php');
                    // require ('vues/');
                    require ('vues/view_footer.php');
                break;
                case 'creadossier' : 
                    require ('vues/view_header.php');
                    require ('vues/view_nav_modal.php');
                    require ('vues/view_modal.php');
                    require ('vues/view_footer.php');
                break;
                case 'rechercheMaj' :
                    $affichage = $_POST['nomClient']." ".$_POST['Ncmd']." ".$_POST['refArticle'];
                    if ($nom <> ""){
                        $resultatNom = Recherche_Dossier::getListClients($nom);
                    }
                    elseif ($numCMD <> ""){            
                        $resultatCMD = Recherche_Dossier::getNumCmd($numCMD); 
                    }
                    elseif ($numArt <> ""){
                        $resultatArt = Recherche_Dossier::getArticle($numArt); 
                    }
                    require ('vues/view_header.php');
                    require ('vues/view_nav.php');
                    require ('vues/view_result_recherche.php');
                    require ('vues/view_footer.php');
                    break;
                case 'afficheClient' :
                    $donnee = ClientMgr::getInfoClient($id);
                    require ('vues/view_header.php');
                    require ('vues/view_nav.php');
                    require ('vues/view_dossierClient.php');
                    // require ('vues/view_result_dossier.php');
                    require('vues/view_footer.php');
                    break;
                case 'affTicket' :
                    $idTicket = $_GET['id'];
                    $infosTicket=TicketMgr::getInfosTicket($idTicket);
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_ticket.php');
                    require('vues/view_footer.php');
                    break;
                }
?>




