// Récupération de mes éléments HTML

var btnModifClient = document.getElementById("modifClient");


// Abonner les éléments

btnModifClient.addEventListener("click", function(){
    document.getElementById('nom').disabled = false;
    document.getElementById('prenom').disabled = false;
    document.getElementById('adresse').disabled = false;
    document.getElementById('cp').disabled = false;
    document.getElementById('ville').disabled = false;
    btnModifClient.value = 'Enregistrer';
});


// Fonctions

