            <?php
            session_start();
            require_once('modeles/UserMgr.class.php');
            require_once('modeles/DbSav.class.php');
//echo "GET:"; var_dump($_GET);
//echo "POST:"; var_dump($_POST);
//unset($_SESSION['user']);
//echo "SESSION:"; var_dump($_SESSION);
//die("test");

            // Initialisation des données
            $action = 'connexion';
            //$action = 'accueil';

            // Détermination de l'action en cours

            if(isset($_SESSION['user'])){
                $userConnect = $_SESSION['user'];
            }else{
                $action = 'connexion';
            }

            if(isset($_GET['action'])){
                $action = $_GET['action'];
            }
            if(isset($_POST['login'])){
                $user = $_POST['login'];
            }
            if(isset($_POST['password'])){
                $password = $_POST['password'];
            }

            switch ($action){
                case 'connexion' :
                    unset($_SESSION['user']);

                    require ('vues/view_header.php');
                    require ('vues/view_connexion.php');
                    require('vues/view_footer.php');
                    break;
                case 'ctrlconnexion' :
                    UserMgr::getUser($user, $password);
                    
                    break;
                case 'accueil' :
                    require('vues/view_header.php');
                    require('vues/view_search.php');
                    require('vues/view_nav.php');
                    echo "Bienvenue " . $userConnect. "";
                    //var_dump(DbSav::$connexion);
                    require('vues/view_main_accueil.php');
                    // require('vues/view_pagination.php');
                    require('vues/view_footer.php');
                    break;
                case 'recherchedossier' :
                    $recherche = $_GET['motrecherche'];
                    require ('vues/view_header.php');
                    require('vues/view_nav.php');
                    require ('vues/view_result_dossier.php');
                    require('vues/view_footer.php');
                    break;
                }




            ?>



