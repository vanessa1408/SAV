// Récupération de mes éléments HTML

var btnModifClient = document.getElementById("modifClient");
var btnEnrClient = document.getElementById("enregistrerClient");
var btnEditDiag = document.getElementById("editDiag");
var btnEnrDiag = document.getElementById("enrDiag");
var divDiag = document.getElementById("addDiag");
var btnModifTicket = document.getElementById("modifTicket");
var btnEnrModifTicket = document.getElementById("enrmodifTicket");
var btnCreerTicket = document.getElementsByClassName("creer_ticket");
// Abonner les éléments

if(btnModifTicket){

    btnModifTicket.addEventListener("click", function(){
        document.getElementById('dateCrea').disabled = false;
        document.getElementById('numcde').disabled = false;
        document.getElementById('statutcde').disabled = false;
        document.getElementById('datePEC').disabled = false;
        document.getElementById('motif').disabled = false;
        document.getElementById('observation').disabled = false;
        btnModifTicket.style.display = 'none';
        btnEnrModifTicket.style.display = 'block';
    });
}


if(btnModifClient){

    btnModifClient.addEventListener("click", function(){
        document.getElementById('nom').disabled = false;
        document.getElementById('prenom').disabled = false;
        document.getElementById('adresse').disabled = false;
        document.getElementById('cp').disabled = false;
        document.getElementById('ville').disabled = false;
        btnModifClient.style.display = 'none';
        btnEnrClient.style.display = 'block';
    });
}

if(btnEditDiag){

    btnEditDiag.addEventListener("click", function(){
        btnEditDiag.style.display = 'none';
        btnEnrDiag.style.display = 'block';
        
        var label2 = document.createElement('label');
        label2.setAttribute('class','label-dossier-2');
        label2.innerHTML='Nouvelle observation : ';
        divDiag.appendChild(label2);
        var input2 = document.createElement('input');
        input2.setAttribute('type','text');
        input2.setAttribute('name','obs');
        input2.setAttribute('class','input-obsDiag');
        divDiag.appendChild(input2);


    });
}
/* Une boucle qui parcourt tous les boutons avec la classe "creer_ticket" et ajoute un écouteur
d'événement à chacun d'eux. */
if (btnCreerTicket){
    for(let btn of btnCreerTicket){
        btn.addEventListener('click',function(){
            document.getElementById('refArticle').value = btn.getAttribute('name');
        })
    }
}

// Fonctions

