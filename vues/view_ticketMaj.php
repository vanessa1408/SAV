
<div class="main-accueil mx-auto">
    
    <div class="infos-dossier">
        <legend class="list-group-item list-group-item-action active title-list">Dossier n° <?php echo $IdCommande; ?> - Statut du dossier : 
            <?php if(!empty($DateFermTicket)) { echo 'clôturé'; }
            else { echo 'en cours'; }   ; ?> - Ticket creer -</legend>
    </div>   
  
