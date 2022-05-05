<?php
        session_start();

            require_once("modeles/DbSav.class.php");
            require_once("modeles/TicketMgr.class.php");     
            require_once("modeles/Recherche_Dossier.class.php");
            require_once("modeles/ClientMgr.class.php");
            require_once("modeles/UserMgr.class.php");
            require_once("classes/TicketMgrException.class.php");
            require_once("classes/Client.class.php");
            require_once("classes/Commande.class.php");
            require_once("classes/Article.class.php");
            

            // Initialisation des données

            $action = 'connexion';

            // $action = 'accueil';


            // Détermination de l'action en cours
            // if(empty($_SESSION) ? $action = 'connexion' : $action = 'accueil');

            if(isset($_GET['action'])){
                $action = $_GET['action'];
                if($action == 'connexion' || $action == 'deconnexion' ){
                    unset($_SESSION['user']);
                }
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
            if(isset($_POST['codePostal'])){
                $CPclient = $_POST["codePostal"];
            }
            if(isset($_GET['IdClient'])){
                $id = $_GET['IdClient'];
            }
            if(isset($_SESSION['user'])){
                $login = $_SESSION['user'];
                $identite=UserMgr::getInfosUser($login);
                $nomConnecte = $identite->NomTechnicien;
                $prenomConnecte = $identite->PrenomTechnicien;
                $idService = $identite->IdService;

            } 

            if(isset($_GET['idCommande'])){
                $idcmd = $_GET['idCommande'];
            }
            if(isset($_POST['login'])){
                $user = $_POST['login'];
            }
            if(isset($_POST['password'])){
                $password = $_POST['password'];
            }

            // Récupère les données du formulaire de modification infos Client
           
            if($action == 'affTicket' || $action =='affTicketMAJ' || $action=='affTicketMAJdiag'){
                $idTicket = $_GET['id'];
                $idCommande = $_GET['idCommande'];
                $modeobjet = PDO::FETCH_OBJ;
            }

            if($action=='affTicketMAJ'){
                $idC= $_GET['idClient'];
                $nomC = $_GET['nom'];
                $prenomC = $_GET['prenom'];
                $adresseC= $_GET['adresse'];
                $cpC = $_GET['cp'];
                $villeC = $_GET['ville'];
                }

            if($action=='affTicketMAJdiag'){
                $obsDiag= $_GET['obs'];
                $idTicket = $_GET['id'];
                if(isset($_GET['idDiag'])){
                    $idDiag = $_GET['idDiag'];
                } else {
                    $idDiag = -1;
                }

            }


            switch ($action){
                case 'connexion' :
                    require ('vues/view_header.php');
                    require ('vues/view_connexion.php');
                    require('vues/view_footer.php');
                    break;
                case 'ctrlconnexion' :
                    $action = UserMgr::getUser();
                    break;
                case 'deconnexion' :
                    unset($_SESSION['user']);
                    require ('vues/view_header.php');
                    require ('vues/view_connexion.php');
                    require('vues/view_footer.php');
                    break;

                case 'accueil' :
                    if(!isset($_SESSION['user'])){
                        $action = 'connexion';
                       header('Refresh:0; url= index.php');
                        break;
                    }
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
                    try {
                        $listeTicket = TicketMgr::getTicketbyMot($recherche);
                    } catch (TicketMgrException $err) {
                        echo "Il n'y a pas de ticket en cours.";
                    }
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require('vues/view_main_accueil.php');
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
                    $affichage = $_POST['nomClient']." ".$_POST['Ncmd']." ".$_POST['refArticle']
                    .$_POST['codePostal'];
                    if ($nom <> ""){
                        $resultatNom = Recherche_Dossier::getListClients($nom);
                    }
                    elseif ($numCMD <> ""){            
                        $resultatCMD = Recherche_Dossier::getNumCmd($numCMD); 
                    }
                    elseif ($numArt <> ""){
                        $resultatArt = Recherche_Dossier::getArticle($numArt); 
                    }
                    elseif ($CPclient <> ""){
                        $resultatCP = Recherche_Dossier::getCodepostal($CPclient);
                    }
                    require ('vues/view_header.php');
                    require ('vues/view_nav.php');
                    require ('vues/view_result_recherche.php');
                    require ('vues/view_footer.php');
                    break;
                case 'afficheClient' :
                    // $modeobjet = PDO::FETCH_CLASS;
                if (isset($_GET['IdClient'])){
                        $donnee = ClientMgr::getInfoClient($id);
                    }
                    else {
                        $donnee2 = ClientMgr::getInfoClientByArticle($idcmd);
                    }
                    $donnee3 = ClientMgr::getCommandeClient($id);
                    require ('vues/view_header.php');
                    require ('vues/view_nav.php');
                    require ('vues/view_dossierClient.php');
                    // require ('vues/view_result_dossier.php');
                    require('vues/view_footer.php');
                    break;
                case 'affTicket' :
                    $infosTicket=TicketMgr::getInfosTicket($idTicket,$modeobjet);  
                    $infosClient=ClientMgr::getInfoClientByArt($idCommande,$modeobjet);
                    $listDiag=TicketMgr::getListDiagnostic($idTicket);
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_ticket.php');
                    require('vues/view_footer.php');
                    break;
                case 'affTicketMAJ' :
                    ClientMgr::updateInfosClient($idC, $nomC, $prenomC);
                    ClientMgr::updateAdressByIdClient($idC,$adresseC,$cpC,$villeC);
                    $infosTicket=TicketMgr::getInfosTicket($idTicket,$modeobjet);  
                    $infosClient=ClientMgr::getInfoClientByArt($idCommande,$modeobjet);
                    $listDiag=TicketMgr::getListDiagnostic($idTicket);
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_ticket.php');
                    require('vues/view_footer.php');
                    break;
                case 'affTicketMAJdiag' :
                    TicketMgr::createDiagnostic($obsDiag,$idTicket);   
                    $infosTicket=TicketMgr::getInfosTicket($idTicket,$modeobjet);  
                    $infosClient=ClientMgr::getInfoClientByArt($idCommande,$modeobjet);
                    $listDiag=TicketMgr::getListDiagnostic($idTicket);
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_ticket.php');
                    require('vues/view_footer.php');
                    break;


                case 'afficheCMD' :
                    require ('vues/view_header.php');
                    require ('vues/view_nav_modal.php');
                    require ('vues/view_modal.php');
                    require ('vues/view_footer.php');
                    break;
                }
?>

