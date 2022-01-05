
let tab = []; //Création d'un tableau

function ajoutertache() { //Exécution de la fonction ajoutertache quand on clique sur le bouton Ajouter une tâche
    let ajout = document.getElementById("task").value; //On crée la variable ajout qui correspond à l'input
    if(ajout!=''){ //Si l'input est vide
        tab.push(ajout); //On n'ajoute pas de ligne dans la tableau
        affichage(); //On execute la fonction affichage
    }
}

function affichage(){ //Fonction affichage
    let info =""; //On crée la variable info qui contient tous les élements du tableau
    for(let i = 0; i < tab.length; i++){ //On commence la boucle à 0, tant que i < que la taille du tableau : on rajoute 1 à i
        info +=` 
        <tr>
        <p>${tab[i]}<span class="float-right"> <input type="checkbox">
        <button value="${i}" onClick="suppression(this)">Suppr</button></span></p>
        </tr>
    `; //On prend les données éxistentes du tableau, On va chercher le message du tableau en commençant par 0 (index 0 du tableau)
    } //On donne la valeur i au bouton en commençant par 0, il va effacer l'emplacement i
    document.getElementById("tableau").innerHTML = info; //On affiche les éléments du tableau dans la div tableau
    document.getElementById("task").value=null; //On efface l'input une fois le bouton Afficher la tâche enclenché
}

function suppression(btnvalue){ //Fonction suppression
    tab.splice(parseInt(btnvalue),1); //On efface un seul élément du tableau
    affichage(); //On execute la fonction affichage
}