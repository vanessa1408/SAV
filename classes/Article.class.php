<?php

class article {

    private $IdArticle;
    private $NomArticle;
    private $StockPhysiqueArticle;
    private $StockRebusArticle;
    private $StockSAVArticle;

    private function __construct(int $IdArticle, string $NomArticle, int $StockPhysiqueArticle, int $StockRebusArticle, int $StockSAVArticle) {
        $this->setidClient($IdArticle);
        $this->setNomclient($NomArticle);
        $this->setPrénomClient($StockPhysiqueArticle);
        $this->setStockPhysiqueArticle($StockPhysiqueArticle);
        $this->setStockRebusArticle($StockRebusArticle);
        $this->setStockSAVArticle($StockSAVArticle);
    }

    private function getIdArticle() {
        return $this->IdArticle;
    }

    private function setIdArticle() {
        $this->IdArticle = $IdArticle;
    }

    private function getNomArticle() {
        return $this->NomArticle;
    }

    private function setNomArticle() {
        $this->NomArticle = $NomArticle;
    }

    private function getStockPhysiqueArticle() {
        return $this->StockPhysiqueArticle;
    }
    
    private function setStockPhysiqueArticle() {
        $this->StockPhysiqueArticle = $StockPhysiqueArticle;
    }

    private function getStockRebusArticle() {
        return $this->StockRebusArticle;
    }

    private function setStockRebusArticle() {
        $this->StockRebusArticle = $StockRebusArticle;
    }
    
    private function getStockSAVArticle() {
        return $this->StockSAVArticle;
    }

    private function setStockSAVArticle() {
        $this->StockSAVArticle = $StockSAVArticle;
    }


} 