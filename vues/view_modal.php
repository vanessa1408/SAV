<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"> Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form role="form">
                <div class="form-group">
                    <label for="nomClient"><span class="glyphicon glyphicon-user"></span> Nom du client</label>
                    <input type="text" class="form-control" id="nomClient" required="required">
                </div>
                <div class="form-group">
                    <label for="numFacture"><span class="glyphicon glyphicon-tag"></span> N° de facture d'achat</label>
                    <input type="text" class="form-control" id="numFacture" required="required">
                </div>
                <div class="form-group">
                    <label for="start"><span class="glyphicon glyphicon-calendar"></span> Date d'achat</label>
                    <br>
                    <input type="date" id="start" name="trip-start">
                </div>
                <div class="form-group">
                    <label for="refArticle"><span class="glyphicon glyphicon-barcode"></span> Reference de l'article</label>
                    <input type="text" class="form-control" id="refArticle" required="required">
                </div>
                <div class="form-group">
                    <label for="motifInter"><span class="glyphicon glyphicon-question-sign"></span> Motif d'intervention</label>
                    <input type="text" class="form-control" id="motifInter" required="required">
                </div>
                <div class="form-group">
                    <label for="diagnostic"><span class="glyphicon glyphicon-wrench"></span> Diagnostic</label>
                    <input type="text" class="form-control" id="diagnostic">
                </div>
                <div class="form-group">
                    <label for="interPrevu"><span class="glyphicon glyphicon-dashboard"></span> Intervention prévue </label>
                    <input type="text" class="form-control" id="interPrevu">
                </div>
                </br>
                <div style="display:none" id="msgErreur">Données incorrect</div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="myBtn2">Creer</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annulez</button>
      </div>
      </div>
    </div>
  </div>
</div>