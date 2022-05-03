<?php

class commande {

    private $IdCommande;
    private $DateCommande;
    private $StatutCommande;
    private $IdClient;
    private $IdFacture;

    private function __construct(int $IdCommande, DateTime $DateCommande, string $StatutCommande, int $IdClient, int $IdFacture) {
        $this->setidClient($IdCommande);
        $this->setNomclient($DateCommande);
        $this->setPrénomClient($PrénomClient);
        $this->setIdClient($IdClient);
        $this->setIdFacture($IdFacture);
    }

    private function getIdCommande() {
        return $this->IdCommande;
    }

    private function setIdCommande() {
        $this->IdCommande = $IdCommande;
    }

    private function getDateCommande() {
        return $this->DateCommande;
    }

    private function setDateCommande() {
        $this->DateCommande = $DateCommande;
    }

    private function getStatutCommande() {
        return $this->StatutCommande;
    }
    
    private function setStatutCommande() {
        $this->StatutCommande = $StatutCommande;
    }

    private function getIdClient(){
        return $this->IdClient;
    }

    private function setIdClient(){
        $this->IdClient = $IdClient;
    }

    private function getIdFacture(){
        return $this->IdFacture;
    }

    private function setIdFacture(){
        $this->IdFacture = $IdFacture;
    }



} 