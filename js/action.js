

// Récupération de mes éléments HTML

var btnModifClient = document.getElementById("modifClient");
var btnEnrClient = document.getElementById("enregistrerClient");
var btnCreerTicket = document.getElementsByClassName("creer_ticket");




// Abonner les éléments
if (btnModifClient){
    btnModifClient.addEventListener("click", function(){
        document.getElementById('nom').disabled = false;
        document.getElementById('prenom').disabled = false;
        document.getElementById('adresse').disabled = false;
        document.getElementById('cp').disabled = false;
        document.getElementById('ville').disabled = false;
        btnModifClient.display = 'none';
        btnEnrClient.display = 'block';
    });
}

if (btnCreerTicket){
    for(let btn of btnCreerTicket){
        btn.addEventListener('click',function(){
            document.getElementById('refArticle').value = btn.getAttribute('name');
        })
    }
}

// Fonctions

