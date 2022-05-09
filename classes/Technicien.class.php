<?php

class Technicien {

    private $idTechnicien;
    private $nomTechnicien;
    private $prenomTechnicien;
    private $mailTechnicien;

    public function __construct(int $idTechnicien, string $nomTechnicien, string $prenomClient, string $mailTechnicien) {
        $this->setIdTechnicien($idTechnicien);
        $this->setNomTechnicien($nomTechnicien);
        $this->setPrénomTechnicien($prenomTechnicien);
        $this->setMailTechnicien($mailTechnicien);
    }

    public function getIdTechnicien() {
        return $this->idTechnicien;
    }

    private function setIdTechnicien() {
        $this->idTechnicien = $idTechnicien;
    }

    public function getNomTechnicien() {
        return $this->nomTechnicien;
    }

    private function setNomTechnicien() {
        $this->nomTechnicien = $nomTechnicien;
    }

    public function getPrenomTechnicien() {
        return $this->prenomTechnicien;
    }
    
    private function setPrenomTechnicien() {
        $this->prenomClient = $prenomTechnicien;
    }

    private function getMailTechnicien() {
        return $this->mailTechnicien;
    }

    private function setMailTechnicien() {
        $this->mailTechnicien;
    }
}