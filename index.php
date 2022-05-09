<?php
//commentaire inutile
        session_start();

            require_once("modeles/DbSav.class.php");
            require_once("modeles/TicketMgr.class.php");     
            require_once("modeles/Recherche_Dossier.class.php");
            require_once("modeles/ClientMgr.class.php");
            require_once("modeles/UserMgr.class.php");
            require_once("modeles/DetailCommandeMgr.class.php");
            require_once("classes/TicketMgrException.class.php");
            require_once("classes/Client.class.php");
            require_once("classes/Commande.class.php");
            require_once("classes/Article.class.php");
            require_once("modeles/Recherche_Technicien.class.php");
            require_once("modeles/Aff_Infos_Technicien.class.php");
            require_once("modeles/TechniciensMgr.class.php");
            

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
            if(isset($_POST['action'])){
                $action = $_POST['action'];
            }
            if(isset($_POST['nomClient'])){
                $nom = $_POST["nomClient"];
            }
            if(isset($_POST['ncmd'])){
                $numCMD = $_POST['ncmd'];
            }
            if(isset($_POST['refArticle'])){
                $numArt = $_POST['refArticle'];
            }
            if(isset($_GET['idTypeDossier'])){
                $idTypeDossier =$_GET['idTypeDossier'];
            }
            if(isset($_GET['idTypeInter'])){
                $idTypeInter =$_GET['idTypeInter'];
            }
            if(isset($_GET['idTechnicien'])){
                $idTechnicien =$_GET['idTechnicien'];
            } 
            if(isset($_GET['idCommande'])){
                $idCommande =$_GET['idCommande'];
            } 
            if(isset($_POST['codePostal'])){
                $cPclient = $_POST["codePostal"];
            }
            if(isset($_GET['idClient'])){
                $id = $_GET['idClient'];
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
           
            if($action == 'affTicket' || $action =='affTicketMAJ' || $action=='affTicketMAJdiag' || $action=='affMAJTicket'){
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

            if($action=='affMAJTicket'){
                $dateCrea = $_POST['dateCrea'];
                $idTicket = $_POST['idTicket'];
                $numCmd = $_POST['numcde'];
                $statCmd = $_POST['statutcde'];
                $datePEC = $_POST['datePEC'];
                $motif = $_POST['motif'];
                $obs = $_POST['observation'];
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
                case 'connexionErreur':
                    header('Refresh:3; url= index.php');
                    require ('vues/view_header.php');
                    require ('vues/view_connexion.php');
                    require('vues/view_footer.php');
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
                    require ('vues/view_footer.php');
                break;
                case 'creadossier' : 
                    require ('vues/view_header.php');
                    require ('vues/view_nav_modal.php');
                    require ('vues/view_modal.php');
                    require ('vues/view_footer.php');
                break;
                case 'rechercheMaj' :
                    $affichage = $_POST['nomClient']." ".$_POST['ncmd']." ".$_POST['refArticle']
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
                    elseif ($cPclient <> ""){
                        $resultatCP = Recherche_Dossier::getCodepostal($cPclient);
                    }
                    require ('vues/view_header.php');
                    require ('vues/view_nav.php');
                    require ('vues/view_result_recherche.php');
                    require ('vues/view_footer.php');
                    break;
                case 'afficheClient' :
                    
                if (isset($_GET['idClient'])){
                        $donnee = ClientMgr::getInfoClient($id);
                    }
                    else {
                        $donnee2 = ClientMgr::getInfoClientByArticle($idcmd);
                    }
                    $donnee3 = ClientMgr::getCommandeClient($id);
                    require ('vues/view_header.php');
                    require ('vues/view_nav.php');
                    require ('vues/view_dossierClient.php');
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

                case 'afficheCMD' :
                    if (isset($_GET['idCommande'])){
                            $dossier = DetailsCommandeMgr::getInfoCommande($idcmd);
                            $contenu = DetailsCommandeMgr::getInfoCommande($idcmd);
                            $typInter = TicketMgr::getTypeDossier();
                            $typMotif = TicketMgr::getMotif();
                    }   
                        require ('vues/view_header.php');
                        require ('vues/view_nav_modal.php');
                        require ('vues/view_detailsCommande.php');
                        require ('vues/view_modal.php');
                        require ('vues/view_modalCmd.php');
                        require ('vues/view_footer.php');
                        break;
                case 'admin':
                    $resultRechTechnicien = TechniciensMgr::getTech();
                    require ('vues/view_header.php');
                    require ('vues/view_admin.php');
                    require ('vues/view_footer.php');
                    break;

                case 'affMAJTicket' : // Appelé quand on enregistre des modifs d'un ticket existant

                    TicketMgr::updateInfosTicket($idTicket, $dateCrea, $numCmd, $statCmd, $datePEC, $motif, $obs);
                    $infosTicket=TicketMgr::getInfosTicket($idTicket,$modeobjet);  
                    $infosClient=ClientMgr::getInfoClientByArt($idCommande,$modeobjet);
                    $listDiag=TicketMgr::getListDiagnostic($idTicket);
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_ticket.php');
                    require('vues/view_footer.php');
                    break;
                case 'affTicketMAJ' : // Appelé quand on modifie les infos clients
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
                case 'affTicketMAJdiag' : // Appelé quand on ajoute un diagnostic
                    TicketMgr::createDiagnostic($obsDiag,$idTicket);   
                    $infosTicket=TicketMgr::getInfosTicket($idTicket,$modeobjet);  
                    $infosClient=ClientMgr::getInfoClientByArt($idCommande,$modeobjet);
                    $listDiag=TicketMgr::getListDiagnostic($idTicket);
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_ticket.php');
                    require('vues/view_footer.php');
                    break;
                case 'rechTech':
                    $resultatNomTechnicien = Recherche_Technicien::getListTechniciens();
                    require ('vues/view_header.php');
                    require('vues/view_result_rechTech.php');
                    require ('vues/view_footer.php');
                    break;
                case 'affTechnicien':
                    $idTechnicien = $_GET['idTechnicien'];
                    $modeobjet = PDO::FETCH_OBJ;
                    $infosTechnicien=Aff_Infos_Technicien::getProfilTechnicien($idTechnicien);
                    if (isset($_GET['idTechnicien'])){
                        $donnee = Aff_Infos_Technicien::getProfilTechnicien($idTechnicien);
                    }
                    require ('vues/view_header.php');
                    require ('vues/view_profilTechnicien.php');
                    require ('vues/view_footer.php');
                    break;
                case 'creaTech':
                    require ('vues/view_header.php');
                    require('vues/view_creaTech.php');
                    require ('vues/view_footer.php');
                    break;
                case 'verifCreaTech' :
                    $action = TechniciensMgr::createTech();
                    break;
                case 'ErrCreaTech' : 
                    header('Refresh:3;url= index.php?action=creaTech');
                    require ('vues/view_header.php');
                    require ('vues/view_creaTech.php');
                    require('vues/view_footer.php');
                    break;
                case 'creaTechMAJ' :
                    require ('vues/view_header.php');
                    require ('vues/view_creaTechMAJ.php');
                    require ('vues/view_footer.php');
                    break;
                case 'modifTech' : 
                    require ('vues/view_header.php');
                    require ('vues/view_modifTech.php');
                    require ('vues/view_footer.php');
                    break;
                case 'verifModifTech' ;
                    require ('vues/view_header.php');
                    require ('vues/view_modifTech.php');
                    require ('vues/view_footer.php');
                    break;
                case 'suppTech':
                    require ('vues/view_header.php');
                    require ('vues/view_suppTech.php');
                    require ('vues/view_footer.php');
                    break;
                case 'verifSuppTech' : 
                    $idTechSupp = $_POST['idTechSupp'];
                    $action = TechniciensMgr::suppTech();
                case 'suppTechMAJ1' : 
                    require ('vues/view_header.php');
                    require ('vues/view_suppTechMAJ1.php');
                    require ('vues/view_footer.php');
                    break;
                case 'suppTechMAJ2' : 
                    require ('vues/view_header.php');
                    require ('vues/view_suppTechMAJ2.php');
                    require ('vues/view_footer.php');
                    break;
                case 'recapTicket' :
                    $idCommande = $_GET['idCommande'];
                    $idTypeDossier = $_GET['idTypeDossier'];
                    $idTypeInter = $_GET['idTypeInter'];
                    $idTechnicien = $_GET['idTechnicien'];
                $creaTicket = TicketMgr::creaTicket($idTypeDossier, $idTypeInter, $idCommande, $idTechnicien);
                require ('vues/view_header.php');
                require ('vues/view_nav_modal.php');
                require ('vues/view_ticketMaj.php');
                require ('vues/view_footer.php');
                break;
                }
                


?>

