<?php

class UserMgr {

    // Initialisation des variables
    

    public static function getUser(){
        $user = $_POST['login'];
        $password = $_POST['password'];
        //Préparation de la requête SQL
        $sql="SELECT COUNT(*) FROM technicien WHERE 
        Login = '$user' AND Password = '$password'";
        //Connexion 
        if($user <>"" && $password <>""){ 
            $ctrlConnexion = DbSav::getConnexion()->query($sql);
            if ($ctrlConnexion=1) // login et password OK
            {
                $_SESSION['user'] = $user;
                //$_SESSION['user'] = $_POST['login'];
                var_dump($_SESSION['user']);
                //$_SESSION['password'] = $_POST['password'];
                header('location:index.php?action=accueil');
                echo "Connexion OK";
                $action = 'accueil';
                
            }else {
                echo "Connexion NOK";
                $action = 'connexion';
            }
            DbSav::disconnect();

            return $action;
        }
        
        
        //Déconnecte du serveur

        //Retourne l'utilisateur connecté
        //return $_SESSION;
        

    }
}