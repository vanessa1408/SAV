<?php

class commande {

    private $idCommande;
    private $dateCommande;
    private $statutCommande;
    private $idClient;
    private $idFacture;

    private function __construct(int $idCommande, DateTime $dateCommande, string $statutCommande, int $idClient, int $idFacture) {
        $this->setidClient($idCommande);
        $this->setNomclient($dateCommande);
        $this->setPrenomClient($prenomClient);
        $this->setIdClient($idClient);
        $this->setIdFacture($idFacture);
    }

    private function getIdCommande() {
        return $this->idCommande;
    }

    private function setIdCommande() {
        $this->idCommande = $idCommande;
    }

    private function getDateCommande() {
        return $this->dateCommande;
    }

    private function setDateCommande() {
        $this->dateCommande = $dateCommande;
    }

    private function getStatutCommande() {
        return $this->statutCommande;
    }
    
    private function setStatutCommande() {
        $this->statutCommande = $statutCommande;
    }

    private function getIdClient(){
        return $this->idClient;
    }

    private function setIdClient(){
        $this->idClient = $idClient;
    }

    private function getIdFacture(){
        return $this->idFacture;
    }

    private function setIdFacture(){
        $this->idFacture = $idFacture;
    }



} 