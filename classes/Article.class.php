<?php

class article {

    private $IdArticle;
    private $NomArticle;
    private $StockPhysiqueArticle;
    private $StockRebusArticle;
    private $StockSAVArticle;

    public function __construct(int $IdArticle, string $NomArticle, int $StockPhysiqueArticle, int $StockRebusArticle, int $StockSAVArticle) {
        $this->setidClient($IdArticle);
        $this->setNomclient($NomArticle);
        $this->setPrénomClient($StockPhysiqueArticle);
        $this->setStockPhysiqueArticle($StockPhysiqueArticle);
        $this->setStockRebusArticle($StockRebusArticle);
        $this->setStockSAVArticle($StockSAVArticle);
    }

    public function getIdArticle() {
        return $this->IdArticle;
    }

    private function setIdArticle() {
        $this->IdArticle = $IdArticle;
    }

    public function getNomArticle() {
        return $this->NomArticle;
    }

    private function setNomArticle() {
        $this->NomArticle = $NomArticle;
    }

    public function getStockPhysiqueArticle() {
        return $this->StockPhysiqueArticle;
    }
    
    private function setStockPhysiqueArticle() {
        $this->StockPhysiqueArticle = $StockPhysiqueArticle;
    }

    public function getStockRebusArticle() {
        return $this->StockRebusArticle;
    }

    private function setStockRebusArticle() {
        $this->StockRebusArticle = $StockRebusArticle;
    }
    
    public function getStockSAVArticle() {
        return $this->StockSAVArticle;
    }

    private function setStockSAVArticle() {
        $this->StockSAVArticle = $StockSAVArticle;
    }


} 