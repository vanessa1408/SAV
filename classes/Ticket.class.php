<?php

class Ticket {
    private $IdTicket;
    private $DateAppelClient;
    private $DatePEC;
    private $DateFermTicket;
    private $Motif;
    private $Observation;
    private $IdTypeDossier;
    private $IdTypeInter;
    private $IdCommande;
    private $IdTechnicien;

    public function __construct($IdTicket, $DateAppelClient, $DatePEC, $DateFermTicket, $Motif, $Observation,$IdTypeDossier, $IdTypeInter, $IdCommande, $IdTechnicien){
            $this->setIdTicket($IdTicket);
            $this->setDateAppelClient($DateAppelClient);
            $this->setDatePEC($DatePEC);
            $this->setDateFermTicket($DateFermTicket);
            $this->setMotif($Motif);
            $this->setObservation($Observation);
            $this->setIdTypeDossier($IdTypeDossier);
            $this->setIdTypeInter($IdTypeInter);
            $this->setIdCommande($IdCommande);
            $this->setIdTechnicien($IdTechnicien);
    }

    public function getIdTicket() {
        return $this->IdTicket;
    }

    private function setIdTicket() {
        $this->IdTicket = $IdTicket;
    }

    public function getDateAppelClient() {
        return $this->$DateAppelClient;
    }

    private function setDateAppelClient() {
        $this->DateAppelClient = $DateAppelClient;
    }

    public function getDatePEC() {
        return $this->DatePEC;
    }

    private function setDatePEC() {
        $this->DatePEC = $DatePEC;
    }

    public function getDateFermTicket() {
        return $this->DateFermTicket;
    }

    private function setDateFermTicket() {
        $this->DateFermTicket = $DateFermTicket;
    }

    public function getMotif() {
        return $this->Motif;
    }

    private function setIMotif() {
        $this->Motif = $Motif;
    }

    public function getObservation() {
        return $this->Observation;
    }

    private function setObservation() {
        $this->Observation = $Observation;
    }

    public function getIdTypeDossier() {
        return $this->IdTypeDossier;
    }

    private function setIdTypeDossier() {
        $this->IdTypeDossier = $IdTypeDossier;
    }

    public function getIdTypeInter() {
        return $this->IdTypeInter;
    }

    private function setIdTypeInter() {
        $this->IdTypeInter = $IdTypeInter;
    }

    public function getIdCommande() {
        return $this->IdCommande;
    }

    private function setIdCommande() {
        $this->IdCommande = $IdCommande;
    }

    public function getIdTechnicien() {
        return $this->IdTechnicien;
    }

    private function setIdTechnicien() {
        $this->IdTechnicien = $IdTechnicien;
    }

    

}


?>