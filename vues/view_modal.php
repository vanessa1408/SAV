<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title list-group-item list-group-item-action active title-list" id="modalLabel"><center> Ticket</center></h5>
      </div>
        <div class="modal-body">
            <form role="form">
                    <div class="form-group">
                        <label for="nomClient"><span class="bi bi-file-person"></span> Nom du client</label>
                        <input type="text" class="form-control" id="nomClient" required="required">
                    </div>
                    <div class="form-group">
                        <label for="numFacture"><span class="bi bi-receipt"></span> N° de facture d'achat</label>
                        <input type="text" class="form-control" id="numFacture" required="required">
                    </div>
                    <div class="form-group">
                        <label for="start"><span class="bi bi-calendar3"></span> Date d'achat</label>
                        <br>
                        <input type="date" id="start" name="trip-start">
                    </div>
                    <div class="form-group">
                        <label for="refArticle"><span class="bi bi-upc-scan"></span> Reference de l'article</label>
                        <input type="text" class="form-control" id="refArticle" required="required">
                    </div>
                    <div class="form-group">
                        <label for="motifInter"><span class="bi bi-question-diamond"></span> Motif d'intervention</label>
                        <input type="text" class="form-control" id="motifInter" required="required">
                    </div>
                    <div class="form-group">
                        <label for="diagnostic"><span class="bi bi-wrench-adjustable-circle"></span> Diagnostic</label>
                        <input type="text" class="form-control" id="diagnostic">
                    </div>
                    <div class="form-group">
                        <label for="interPrevu"><span class="bi bi-bookmark-dash"></span> Intervention prévue </label>
                        <input type="text" class="form-control" id="interPrevu">
                    </div>
                    </br>
                    <div style="display:none" id="msgErreur">Données incorrect</div>
            </form>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-primary bi bi-check2-circle" id="myBtn2"> Creer</button>
                <button type="button" class="btn btn-danger bi bi-x-circle" data-bs-dismiss="modal"> Annulez</button>
        </div>
      </div>
    </div>
  </div>
</div>