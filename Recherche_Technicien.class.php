<?php

    class Recherche_Technicien{

        public static function getListTechniciens(){
            $connexion = DbSav::getConnexion();
            $resultat = $connexion->query("SELECT IdTechnicien, NomTechnicien, PrenomTechnicien, Mail
            FROM technicien;");
            $tabNomTech = $resultat->fetchAll();
            return $tabNomTech;
        }

     
    }