<?php

class commande {

    private $IdCommande;
    private $DateCommande;
    private $StatutCommande;
    private $IdClient;
    private $IdFacture;

    public function __construct(int $IdCommande, DateTime $DateCommande, string $StatutCommande, int $IdClient, int $IdFacture) {
        $this->setidClient($IdCommande);
        $this->setNomclient($DateCommande);
        $this->setPrénomClient($PrénomClient);
        $this->setIdClient($IdClient);
        $this->setIdFacture($IdFacture);
    }

    public function getIdCommande() {
        return $this->IdCommande;
    }

    private function setIdCommande() {
        $this->IdCommande = $IdCommande;
    }

    public function getDateCommande() {
        return $this->DateCommande;
    }

    private function setDateCommande() {
        $this->DateCommande = $DateCommande;
    }

    public function getStatutCommande() {
        return $this->StatutCommande;
    }
    
    private function setStatutCommande() {
        $this->StatutCommande = $StatutCommande;
    }

    public function getIdClient(){
        return $this->IdClient;
    }

    private function setIdClient(){
        $this->IdClient = $IdClient;
    }

    public function getIdFacture(){
        return $this->IdFacture;
    }

    private function setIdFacture(){
        $this->IdFacture = $IdFacture;
    }



} 