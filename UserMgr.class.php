<?php

class UserMgr {

    // Initialisation des variables
    

    public static function getUser(){
        $user = $_POST['login'];
        $password = $_POST['password'];
        //Préparation de la requête SQL
        $sql="SELECT COUNT(*) FROM technicien WHERE 
        Login LIKE '$user' AND Password LIKE '$password'";
        //Connexion
        if($user <>"" && $password <>""){ 
            $ctrlConnexion = DbSav::getConnexion()->query($sql);
            $result = $ctrlConnexion->fetch();
            //var_dump($result);
            if ($result[0] == 1) // login et password OK
            {
                $_SESSION['user'] = $user;
                if ($_SESSION['user'] == 'adminsav'){
                    header('location:index.php?action=admin');
                } else {
                //var_dump($user);
                //$_SESSION['user'] = $_POST['login'];
                //var_dump($_SESSION['user']);
                //$_SESSION['password'] = $_POST['password'];
                header('location:index.php?action=accueil');
                //echo "Connexion OK";
                $action = 'accueil';
            } 
        } else {
                header('location:index.php?action=connexionErreur');
                //echo "Connexion NOK";
                $action = 'connexionErreur';

            }  
            DbSav::disconnect();

            return $action;
        }
        
        
        //Déconnecte du serveur

        //Retourne l'utilisateur connecté
        //return $_SESSION;
        

    }
}