<?php

class Technicien {

    private $IdTechnicien;
    private $NomTechnicien;
    private $PrenomTechnicien;
    private $MailTechnicien;

    public function __construct(int $IdTechnicien, string $NomTechnicien, string $PrénomClient, string $MailTechnicien) {
        $this->setIdTechnicien($IdTechnicien);
        $this->setNomTechnicien($NomTechnicien);
        $this->setPrénomTechnicien($PrenomTechnicien);
        $this->setMailTechnicien($MailTechnicien);
    }

    public function getIdTechnicien() {
        return $this->IdTechnicien;
    }

    private function setIdTechnicien() {
        $this->IdTechnicien = $IdTechnicien;
    }

    public function getNomTechnicien() {
        return $this->NomTechnicien;
    }

    private function setNomTechnicien() {
        $this->NomTechnicien = $NomTechnicien;
    }

    public function getPrenomTechnicien() {
        return $this->PrenomTechnicien;
    }
    
    private function setPrenomTechnicien() {
        $this->PrénomClient = $PrenomTechnicien;
    }

    private function getMailTechnicien() {
        return $this->MailTechnicien;
    }

    private function setMailTechnicien() {
        $this->MailTechnicien;
    }
}