<?php

class client {

    private $IdClient;
    private $NomClient;
    private $PrénomClient;

    public function __construct(int $IdClient, string $NomClient, string $PrénomClient) {
        $this->setidClient($idClient);
        $this->setNomclient($NomClient);
        $this->setPrénomClient($PrénomClient);
    }

    public function getIdClient() {
        return $this->IdClient;
    }

    private function setIdClient() {
        $this->IdClient = $IdClient;
    }

    public function getNomClient() {
        return $this->NomClient;
    }

    private function setNomClient() {
        $this->NomClient = $NomClient;
    }

    public function getPrénomClient() {
        return $this->PrénomClient;
    }
    
    private function setPrénomClient() {
        $this->PrénomClient = $PrénomClient;
    }

