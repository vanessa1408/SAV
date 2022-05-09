<?php

class Client {

    private $idClient;
    private $nomClient;
    private $prenomClient;

    public function __construct(int $idClient, string $nomClient, string $prenomClient) {
        $this->setidClient($idClient);
        $this->setNomclient($nomClient);
        $this->setPrénomClient($prenomClient);
    }

    public function getIdClient() {
        return $this->idClient;
    }

    private function setIdClient() {
        $this->idClient = $idClient;
    }

    public function getNomClient() {
        return $this->nomClient;
    }

    private function setNomClient() {
        $this->nomClient = $nomClient;
    }

    public function getPrénomClient() {
        return $this->prenomClient;
    }
    
    private function setPrénomClient() {
        $this->prenomClient = $prenomClient;
    }

}