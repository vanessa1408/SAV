
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title list-group-item list-group-item-action active title-list" id="modalLabel"><center> Ticket</center></h5>
      </div>
        <div class="modal-body">
            <form role="form" class="was-validated" 
              action="index.php?action=recapTicket&idCommande=<?php echo $idCommande ?>&idTypeDossier=<?php echo $idTypeDossier?>&idTypeInter=<?php echo $idTypeInter ?>&idTechnicien=<?php echo $idTechnicien ?>"
              method="POST">
                    <div class="form-group">
                        <label for="nomClient"><span class="bi bi-file-person"></span> Nom du client</label>
                        <input type="text" class="form-control is-valid" name="nomClient" required="required" disabled="disabled" value="<?php echo $NomCLient," ", $PrenomClient; ?>">
                    </div>
                    <div class="form-group">
                        <label for="numFacture"><span class="bi bi-receipt"></span> N° de facture d'achat</label>
                        <input type="text" class="form-control is-valid" name="numFacture" required="required" disabled="disabled" value="<?php echo $IdFacture; ?>">
                    </div>
                    <div class="form-group">
                        <label for="start"><span class="bi bi-calendar3"></span> Date d'achat</label>
                        <br>
                        <input type="date" class="form-control is-valid" name="start" name="trip-start" disabled="disabled" value="<?php echo $DateFacture; ?>">
                    </div>
                    <div class="form-group">
                        <label for="refArticle"><span class="bi bi-upc-scan"></span> Reference de l'article</label>
                        <input type="text" class="form-control is-valid" name="refArticle" required="required" disabled="disabled" value="<?php echo $IdArticle; ?>">
                    </div>
                    <div class="form-group">
                        <label for="date_open_ticket"><span class="bi bi-calendar3"></span> Date d'ouverture du ticket</label>
                        <br>
                        <input type="text" class="form-control is-valid" name="date_open_ticket" disabled="disabled" value="<?php $date = date('d/m/y'); echo $date; ?>">
                    </div>
                    <div class="form-group">
                        <label for="motifInter"><span class="bi bi-question-diamond"></span> Motif d'intervention :</label>
                        <select class="form-select" required id="motifInter">
                          <option selected disabled value="">-- Motif d'intervention --</option>
                          <?php
                          if(isset($TypMotif)){
                            foreach ($TypMotif as $key=>$tMotif)
                            {
                                $IdTypeDossier = $tMotif[0];
                                $LibType = $tMotif[1];
                              echo '<option value="1">'.$IdTypeDossier.' '.$LibType.'</option>';
                              
                            }
                      }
                     
                      ?>
                    
                        </select>                          
                    </div>
                    <div class="form-group">
                        <label for="interPrevu"><span class="bi bi-bookmark-dash"></span> Intervention prévue </label>
                        <select class="form-select" required id="interPrevu">
                        <option selected disabled value="">-- Type d intervention --</option>
                        <?php
                        if(isset($TypInter)){
                            foreach ($TypInter as $key=>$tTypInter)
                            {
                                $IDTypeInter = $tTypInter[0];
                                $LibTypeInter = $tTypInter[1];
                              echo '<option value="1">'.$IDTypeInter.'  '.$LibTypeInter.'</option>';
                            }
                        }
                        
                        ?>
                        </select>
                        
                    </div>
                    <div class="form-group" id="diag">
                        <label for="diagnostic"><span class="bi bi-clipboard-pulse"></span> Diagnostic</label>
                        <input type="text" class="form-control is-invalid" name="diagnostic">
                    </div>
                    <div class="form-group">
                        <label for="nomTech"><span class="bi bi-file-person"></span> Technicien</label>
                        <input type="text" class="form-control is-valid" name="nomTech" required="required" disabled="disabled" value="<?php echo $NomTechnicien," ", $PrenomTechnicien," Identifiant : ", $IdTechnicien; ?>">
                    </div>
                    </br>
                    
            </form>
        </div>
        <div class="modal-footer">
                <button type="submit" class="btn btn-primary bi bi-check2-circle" id="myBtn2"> Creer</button>
                <button type="button" class="btn btn-danger bi bi-x-circle" data-bs-dismiss="modal"> Annulez</button>
        </div>
      </div>
    </div>
  </div>
</div>