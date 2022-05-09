
<?php

class Aff_Infos_Technicien{

    public static function getProfilTechnicien(){
        $idTechnicien = $_GET['idTechnicien'];
       
        $connexion = DbSav::getConnexion();
        $Profil = $connexion->query("SELECT IdTechnicien, NomTechnicien, PrenomTechnicien , Mail, 
                                    Login, Password, IdService 
                                    FROM technicien 
                                    WHERE IdTechnicien LIKE '$idTechnicien';");
        $tabProfil = $Profil->fetchAll();
        return $tabProfil;
    }
}