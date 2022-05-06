
<?php

class Aff_Infos_Technicien{

    public static function getProfilTechnicien(){
        $IdTechnicien = $_GET['IdTechnicien'];
       
        $connexion = DbSav::getConnexion();
        $Profil = $connexion->query("SELECT IdTechnicien, NomTechnicien, PrenomTechnicien , Mail, 
                                    Login, Password, IdService 
                                    FROM technicien 
                                    WHERE IdTechnicien LIKE '$IdTechnicien';");
        $tabProfil = $Profil->fetchAll();
        return $tabProfil;
    }
}