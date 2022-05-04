// Récupération de mes éléments HTML

var btnModifClient = document.getElementById("modifClient");
var btnEnrClient = document.getElementById("enregistrerClient");

// Abonner les éléments

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


// Fonctions

