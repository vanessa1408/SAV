<?php

class Ticket {
    private $idTicket;
    private $dateAppelClient;
    private $datePEC;
    private $dateFermTicket;
    private $motif;
    private $observation;
    private $idTypeDossier;
    private $idTypeInter;
    private $idCommande;
    private $idTechnicien;

    public function __construct($idTicket, $dateAppelClient, $datePEC, $dateFermTicket, $motif, $observation,$idTypeDossier, $idTypeInter, $idCommande, $idTechnicien){
            $this->setIdTicket($idTicket);
            $this->setDateAppelClient($dateAppelClient);
            $this->setDatePEC($datePEC);
            $this->setDateFermTicket($dateFermTicket);
            $this->setMotif($motif);
            $this->setObservation($observation);
            $this->setIdTypeDossier($idTypeDossier);
            $this->setIdTypeInter($idTypeInter);
            $this->setIdCommande($idCommande);
            $this->setIdTechnicien($idTechnicien);
    }

    public function getIdTicket() {
        return $this->idTicket;
    }

    private function setIdTicket() {
        $this->idTicket = $idTicket;
    }

    public function getDateAppelClient() {
        return $this->$dateAppelClient;
    }

    private function setDateAppelClient() {
        $this->dateAppelClient = $dateAppelClient;
    }

    public function getDatePEC() {
        return $this->datePEC;
    }

    private function setDatePEC() {
        $this->datePEC = $datePEC;
    }

    public function getDateFermTicket() {
        return $this->dateFermTicket;
    }

    private function setDateFermTicket() {
        $this->dateFermTicket = $dateFermTicket;
    }

    public function getMotif() {
        return $this->motif;
    }

    private function setIMotif() {
        $this->motif = $motif;
    }

    public function getObservation() {
        return $this->observation;
    }

    private function setObservation() {
        $this->observation = $observation;
    }

    public function getIdTypeDossier() {
        return $this->idTypeDossier;
    }

    private function setIdTypeDossier() {
        $this->idTypeDossier = $idTypeDossier;
    }

    public function getIdTypeInter() {
        return $this->idTypeInter;
    }

    private function setIdTypeInter() {
        $this->idTypeInter = $idTypeInter;
    }

    public function getIdCommande() {
        return $this->idCommande;
    }

    private function setIdCommande() {
        $this->idCommande = $idCommande;
    }

    public function getIdTechnicien() {
        return $this->idTechnicien;
    }

    private function setIdTechnicien() {
        $this->idTechnicien = $idTechnicien;
    }

    

}


?>