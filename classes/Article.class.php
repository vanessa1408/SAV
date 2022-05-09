<?php

class article {

  /* Il définit les variables qui seront utilisées dans la classe. */
  private $idArticle;
  private $nomArticle;
  private $stockPhysiqueArticle;
  private $stockRebusArticle;
  private $stockSAVArticle;

 /**
  * 
  * 
  * @param int IdArticle L'identifiant de l'article
  * @param string NomArticle Le nom de l'article
  * @param int StockPhysiqueArticle Le nombre d'articles en stock
  * @param int StockRebusArticle Le nombre d'articles qui sont cassés et ne peuvent pas être vendus.
  * @param int StockSAVArticle Le nombre d'articles dans le SAV
  */
  public function __construct(int $idArticle, string $nomArticle, int $stockPhysiqueArticle, int $stockRebusArticle, int $stockSAVArticle) {
      $this->setidClient($idArticle);
      $this->setNomclient($nomArticle);
      $this->setPrénomClient($stockPhysiqueArticle);
      $this->setStockPhysiqueArticle($stockPhysiqueArticle);
      $this->setStockRebusArticle($stockRebusArticle);
      $this->setStockSAVArticle($stockSAVArticle);
  }

    private function getIdArticle() {
        return $this->idArticle;
    }

    private function setIdArticle() {
        $this->idArticle = $idArticle;
    }

    private function getNomArticle() {
        return $this->nomArticle;
    }

    private function setNomArticle() {
        $this->nomArticle = $nomArticle;
    }

    private function getStockPhysiqueArticle() {
        return $this->stockPhysiqueArticle;
    }
    
    private function setStockPhysiqueArticle() {
        $this->stockPhysiqueArticle = $stockPhysiqueArticle;
    }

    private function getStockRebusArticle() {
        return $this->stockRebusArticle;
    }

    private function setStockRebusArticle() {
        $this->stockRebusArticle = $stockRebusArticle;
    }
    
    private function getStockSAVArticle() {
        return $this->stockSAVArticle;
    }

    private function setStockSAVArticle() {
        $this->stockSAVArticle = $stockSAVArticle;
    }


} 