<?php

class article {

  /* Il définit les variables qui seront utilisées dans la classe. */
  private $IdArticle;
  private $NomArticle;
  private $StockPhysiqueArticle;
  private $StockRebusArticle;
  private $StockSAVArticle;

 /**
  * 
  * 
  * @param int IdArticle L'identifiant de l'article
  * @param string NomArticle Le nom de l'article
  * @param int StockPhysiqueArticle Le nombre d'articles en stock
  * @param int StockRebusArticle Le nombre d'articles qui sont cassés et ne peuvent pas être vendus.
  * @param int StockSAVArticle Le nombre d'articles dans le SAV
  */
  public function __construct(int $IdArticle, string $NomArticle, int $StockPhysiqueArticle, int $StockRebusArticle, int $StockSAVArticle) {
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