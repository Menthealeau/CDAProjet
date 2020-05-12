/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * permet d'executer l'exercice choisi en option
 */
function recuperation() {
    let id = document.getElementById('exo').value;

    switch (id) {
        case 'info':
            info();
            break;

        case'operateur':
            operateur();
            break;

        case'parite':
            parite();
            break;
        case'age':
            age();
            break;
        case'calculatrice':
            calculatrice();
            break;
        case'remise':
            remise();
            break;
        case'participation':
            participation();
            break;
        case'saisie':
            saisie();
            break;
        case'inferieur':
            inferieur();
            break;
        case'interval':
            interval();
            break;
        case'moyenne':
            moyenne();
            break;
        case'multiple':
            multiple();
            break;
        case'voyelle':
            voyelle();
            break;
        case'jeumoyvie':
            JeuMoyVieux();
            break;
        case'nbpremier':
            nbpremier();
            break;
        case'nbmagic':
            nbmagic();
            break;
        case'produit':
            afficherMasquer('produit');
            break;
        case'image':
            afficherMasquer('image');
            break;
        case'compte':
            afficherMasquer('compte');
            break;

        case 'strtok':
            afficherMasquer('strtok');
            break;

        case 'tableau':
            afficherMasquer('tableau');
            break;
        case 'menutableau':
            initTab();
            break;
        case 'supptableau':
            supptab();
            break;
        case 'veriform' :
            let mamodal = document.getElementById("modal");
            $('#modal').modal("show");

            break;

    }
}


/* 
 * retourne un alert different selon le sexe, le prenom, le nom que l'utilisateur rentre
 * @return string
 */
function info() {

    let nom = window.prompt("Quel est votre nom ? ");

    let prenom = window.prompt("Quel est votre prenom ?");

    let sexe = confirm("Etes vous un homme ?");

    if (sexe) {

        sexe = "monsieur";
    } else {

        sexe = "madame";
    }

    window.alert("Bonjour " + sexe + " " + nom + " " + prenom + ". Bienvenue sur mon site web");

}

/*
 * verification des differents type de variables
 * @type Number
 */

function operateur() {

    let a = "100";
    let b = 100;
    let c = 1.00;
    let d = true;

    window.alert("Ceci est une chaine de caractere : " + a);
    b--;
    c += a;
    d !== d;

    window.alert("Valeur de b: " + b + " , valeur de c: " + c + " valeur de d " + d);

}

/*
 * Savoir si le nombre entree est pair ou impair
 * @returns alert
 */
function parite() {
    let nombre = prompt("Saisir un nombre");

    if (nombre % 2 === 0) {
        alert("votre nombre est pair");
    } else {
        alert("votre nombre est impair");
    }
}

function age() {
    let age = prompt("Quel est votre age ?");
    while (age <= 0) {
        alert("ce n'est pas possible");
        age = prompt("Quel est votre age ?");
    }

    if (age >= 18) {

        alert("vous etes majeur");

    } else {
        alert("vous etes mineur");
    }


}

/*
 * permet d'effectuer un calcul de deux nombre selon l'operation saisie
 * @returns Numbers
 */

function calculatrice() {
    let nombre1 = prompt("Saisissez votre premier nombre");

    let operateur = prompt("Quel operation voulez-vous faire ('/','*','+','-'");

    let nombre2 = prompt("Saisissez votre second nombre");
    let total = 0;
    if (operateur == "/" || operateur == "*" || operateur == "+" || operateur == "-") {
        if (operateur === "/") {
            total = nombre1 / nombre2;
        }
        if (operateur === "*") {
            total = nombre1 * nombre2;
        }

        if (operateur === "+") {
            total = nombre1 + nombre2;
        }

        if (operateur === "-") {
            total = nombre1 - nombre2;
        }

        alert(nombre1 + " " + operateur + " " + nombre2 + " = " + total);
    } else {
        alert("ce n'est pas un calcul valide");
    }
}

function remise() {
    let PU = prompt("saisir le prix unitaire");
    let QTECOM = prompt("Saisir la quantité");
    let PAP;
    let TOT = PU * QTECOM;
    let PORT = TOT * 0.02;
    let REM = 0;

    if (PORT < 6) {
        PORT = 6;
    }

    if (TOT > 500) {
        PORT = 0;
    }

    if (TOT >= 100 && TOT <= 200) {
        REM = TOT * 0.05;
    }

    if (TOT > 200) {
        REM = TOT * 0.1;
    }
    PAP = TOT + PORT - REM;

    alert("Prix unitaire :" + PU + " € \n Quantité :" + QTECOM + "\n Total HT:" + TOT + " €\n Port:" + PORT + "\n Remise:" + REM + " € \n Total TTC:" + PAP + " €");
}

/*
 *  Permet de calculer le % de participation d'un repas selon le status du salarie
 * @returns Alert
 */

function participation() {

    let participation = 0;

    let status = confirm("Etes-vous celibataire");
    if (status) {
        participation += 20;
    } else {
        participation += 25;
    }
    let enfant = confirm("Avez-vous des enfants");
    if (enfant) {
        let nbenfant = prompt("Combien ?");
        participation += nbenfant * 10;
    }

    let salaire = prompt("indiquez votre salaire");
    if (salaire <= 1200) {
        participation -= 10;
    }
    if (participation > 50) {
        participation = 50;
    }
    alert("votre participation est de " + participation + " %");
}

function saisie() {
    let y;
    const tab = [];
    let prenom = prompt("Saisisser le prenom n°1");
    tab.push(prenom);
    console.log(tab);

    for (let i = 1; prenom != ""; i++) {

        prenom = prompt("Saisisser le prenom n° " + i);

        if (prenom != "") {
            tab.push(String(prenom));
        }

    }
    ;


    alert("Vous avez ecrit " + tab.length + " prenom, qui sont " + tab.join(" "));


}

/*
 * Permet de connaitre la liste des nombres inferieurs au nombre choisi 
 * @returns alert
 */
function inferieur() {

    let nombre = prompt("Entrer un nombre");
    const tab = [];
    while (nombre <= 0) {
        nombre = prompt("Indiquer un nombre supérieur a 0");
    }
    for (let i = 1; i < nombre; i++) {

        tab.push(parseInt(i));

    }

    alert("les nombres inférieurs à " + nombre + " sont " + tab.join('-'));

}

/*
 * Permet de calculer la somme de l'interval entre deux nombres
 * Exemple : nb1 = 13 nb2 = 16 : 13+14+15+16 = 58
 * @returns alert Number
 */

function interval() {

    let nb1 = prompt("Indiquer le premier nombre");
    let nb2 = prompt("Indiquer le second nombre");
    let somme = parseInt(nb1);

    if (nb1 < nb2) {
        for (let i = parseInt(nb1) + 1; i <= parseInt(nb2); i++) {
            alert(i);

            somme += i;

        }
    }

    alert(somme);


}

/*
 * Permet de connaitre la moyenne selon les nombres saisies par l'utilisateurs
 * @returns alert Number
 */

function moyenne() {

    let nombre = prompt("Entrer un nombre");
    let somme = parseInt(nombre);
    let tab = [nombre];
    let moy;
    for (let i = 2; nombre != 0; i++) {
        nombre = parseInt(prompt("Saisir le nombre n° " + i));
        if (nombre > 0) {
            tab.push(nombre);
            somme += nombre;
        }
    }
    moy = somme / tab.length;
    alert(tab.join("+") + " = " + somme + " \n Moyenne: " + moy);
}

function multiple() {
    let boucle = prompt("indiquer le nombre de tour :");
    let table = prompt("indiquer la table");
    let total;

    for (let i = 1; i <= boucle; i++) {
        total = i * table;
        console.log(i + " X " + table + " = " + total);
    }

}

/*
 * Permet de connaitre le nombre de voyelle dans la phrase saisie par l'utilisateur
 * Exemple : Bonjour, comment vas-tu return 7 voyelles;
 * @type String
 */

function voyelle() {

    let mot = prompt("ecrire un mot");
    mot = mot.replace(/ /g, '');
    ;
    let voyelle = "aeiouy";
    let nombre = 0;
    let y = 0;

    for (let i = 0; i < mot.length; i++) {
        for (let y = 0; y < voyelle.length; y++) {
            if (mot.substr(i, 1) == voyelle.substr(y, 1)) {
                nombre += 1;
            }
            console.log("Lettre : " + mot.substr(i, 1) + " Voyelle: " + voyelle.substr(y, 1));
        }

    }
    alert("Le mot: " + mot + " contient " + nombre + " voyelles");
}

/*
 * Permet de connaitre le nombre de personne jeune,moyen,vielle selon un nombre indefinis d'age
 * Exemple : 12,24,104 return 1 jeune,1 moyen,1 vieux
 * @type String
 */

function JeuMoyVieux() {
    let jeune = 0;
    let moyen = 0;
    let vieux = 0;
    let tab = [];
    let div = document.getElementById('resultat');
    let rep = document.createElement('p');
    rep.setAttribute('style', 'white-space: pre; ');
    let age = 1;
    let index = 1;
    do {
        if (age > 0) {
            age = parseInt(prompt("Entrer l'age de la personne : " + index));
            tab.push(age);
        } else {

            let reco = confirm("Vous n'avez pas saisi un age valide.\r\ Voulez-vous recommencer ?");

            if (reco != true) {
                break;
            }
        }
        index++;
    } while (age < 100);

    for (let y = 0; y < tab.length; y++) {
        if (tab[y] < 20) {
            jeune += 1;
        }
        if (tab[y] > 40) {
            vieux += 1;
        }
        if (tab[y] >= 20 && tab[y] <= 40) {
            moyen += 1;
        }
    }
    console.log(tab.join("-"));
    rep.textContent = 'Il y a : \r\n';
    rep.textContent += jeune + " personne de moins de 20 ans.\r\n";
    rep.textContent += moyen + " personne entre 20 et 40 ans.\r\n";
    rep.textContent += vieux + " personne de plus de 40 ans.\r\n";
    div.append(rep);
    //setTimeout(function(){div.removeChild(rep);},7000);
}


/*
 * Permet de savoir si le nombre saisie est premier ou non
 * @returns table
 */
function nbpremier() {

    let nombre = prompt("Indiquez votre nombre");
    let res = 0;
    let division = [];


    for (let i = 2; i < nombre; i++) {
        if (nombre % i === 0) {
            res += 1;
            division.push(i);
        } else {
            continue;
        }

    }
    if (res >= 1) {

        alert("le nombre n'est pas premier il est divisible par " + division.join(' et '));
    } else {

        alert("c'est un nombre premier");
    }


}

/*
 * Jeu du nombre magic : la machine choisie un nombre au hasard compris entre 1-100, l'utilisateur dois saisir le nombre exacte
 * La machine indique si le nombre magique est plus petit ou plus grand
 * @returns Alert Numbers
 */
function nbmagic() {

    let magic = parseInt(Math.random() * 100);

    let nombre = prompt("Indiquez un nombre");

    if (isNaN(nombre) == false) {

        while (nombre != magic && nombre != null) {

            if (nombre > magic) {
                nombre = prompt("Le nombre est plus petit, Indiquez un nouveau nombre");

            } else {

                nombre = prompt("Le nombre est plus grand, Indiquez un nouveau nombre");
            }


        }

        if (nombre == magic) {
            alert("Bravo vous avez trouver le nombre magique est " + magic);
            let Confirm = confirm("Voulez-vous recommencer ? \r\ Ok pour oui Annuler pour non");

            if (Confirm == true) {
                nbmagic();
            } else {

            }
        }

    } else {
        alert("ce n'est pas un nombre");
    }

}

/*Permet de connaitre le produit et le cube de 2 nombres saisis par l'utilisateur
 * @param x int
 * @param y int
 * @return string
 */

function produit(x, y) {
    let div = document.getElementById("resultat");
    let rep = document.createElement('p');
    let produit = x * y;
    let cube = x * x * x;
    rep.textContent = 'Le cube de ' + x + ' est égale à ' + cube + '.  Le produit de ' + x + ' *  ' + y + ' = ' + produit;
    div.append(rep);
    setTimeout(function () {
        div.removeChild(rep);
    }, 4000);

}

/*
 * Permet l'affichage des exercice selon celui saisie par l'utilisateur
 * Genere du html selon l'exo choisi
 */

function afficherMasquer(nom) {

    var elmt = document.getElementById(nom).value;
    let div = document.getElementById("resultat");
    console.log(div);
    if (div.childElementCount == 0) {
        if (elmt == "produit") {

            let lbl1 = document.createElement('label');
            let lbl2 = document.createElement('label');
            let input1 = document.createElement('input');
            let input2 = document.createElement('input');
            let button1 = document.createElement('input');
            lbl1.for = "nb1";
            lbl1.textContent = 'Saisissez votre premier nombre';
            lbl2.for = "nb2";
            lbl2.textContent = 'Saisisser votre second nombre';
            input1.type = "number";
            input1.id = "nb1";
            input1.name = "nb1";
            input2.type = "number";
            input2.id = "nb2";
            input2.name = "nb2";
            button1.type = "button";
            button1.value = "valider";
            button1.onclick = function () {

                produit(input1.value, input2.value);
            };
            div.append(lbl1, input1, document.createElement('br'), lbl2, input2, document.createElement('br'), button1);
        }
        if (elmt == "image") {
            image("assets/img/papillon.jpg");
        }
        if (elmt == "compte") {
            let lbl1 = document.createElement('label');
            let lbl2 = document.createElement('label');
            let input1 = document.createElement('input');
            let input2 = document.createElement('input');
            let button1 = document.createElement('input');
            lbl1.for = "lettre";
            lbl1.textContent = 'Saisissez votre lettre a chercher';
            lbl2.for = "phrase";
            lbl2.textContent = 'Saisisser votre phrase ou compter';
            input1.type = "text";
            input1.name = "lettre";
            input1.id = "lettre";
            input2.type = "text";
            input2.name = "phrase";
            input2.id = "phrase";
            button1.type = "button";
            button1.value = "valider";
            button1.onclick = function () {

                compte(input1.value, input2.value);
            };

            div.append(lbl1, input1, document.createElement('br'), lbl2, input2, document.createElement('br'), button1);
        }

        if (elmt == "strtok") {
            let button = document.createElement('input');
            let phrase = document.createElement('label');
            let phraseinp = document.createElement('input');
            let index = document.createElement('label');
            let indeximp = document.createElement('input');

            phrase.for = "phrase";
            phrase.textContent = 'indiquer une phrase avec un separateur';
            insertAttr(phraseinp, {"type": "text", "id": "phrase", "name": "phrase"});
            index.for = "index";
            index.textContent = 'que voulez vous recuperer ? ';
            insertAttr(indeximp, {"type": "number", "id": "index", "name": "index"});
            insertAttr(button, {"type": "submit", "value": "envoyer"});

            button.onclick = function () {

                strtok(phraseinp.value, indeximp.value);
            };
            div.append(phrase, phraseinp, document.createElement('br'), index, indeximp, document.createElement('br'), button);


        }

        if (elmt == "tableau") {
            let button = document.createElement('input');
            let casetab = document.createElement('label');
            let casetabimp = document.createElement('input');


            casetab.for = 'nbcase';
            casetab.textContent = 'Combien de cases comporte votre tableau: ';
            insertAttr(casetabimp, {"id": "nbcase", "name": "nbcase", "type": "number"});
            insertAttr(button, {"type": "submit", "value": "envoyer"});
            button.onclick = function () {

                tableau(casetabimp.value);
            };
            div.append(casetab, casetabimp, document.createElement('br'), button);


        }
    }


}

/*
 * permet l'affichage d'une image selon l'url entrée 
 */
function image(url) {
    let div = document.getElementById("resultat");
    let image = document.createElement('img');
    image.src = url;
    div.append(image);
    setTimeout(function () {
        div.removeChild(image);
    }, 5000);
}

/*
 * Compte le nombre de fois une lettre est dans une phrase
 * la lettre et la phrase sont choisis par l'utilisateur
 */
function compte(Lettre, Phrase) {
    let div = document.getElementById('resultat');
    let rep = document.createElement('p');
    let nombre = 0;
    //phrase = phrase.replace(/ /g, '');;
    console.log(Lettre.lenght);
    if (Lettre.length == 1) {
        for (let i = 0; i < Phrase.length; i++) {

            if (Phrase.substr(i, 1) == Lettre) {
                nombre += 1;
            }
        }
        rep.textContent = "Votre phrase contient " + nombre + " fois la lettre " + Lettre;

    } else {
        rep.textContent = "Vous avez saisie plus d'une lettre";
    }
    div.append(rep);
    setTimeout(function () {
        document.getElementById('lettre').value = "";
        document.getElementById('phrase').value = "";
        div.removeChild(rep);
    }, 3000);
}

/*
 * Permet de supprimer l'exercice choisi pour en choisir un different
 */

function supp() {
    let div = document.getElementById("resultat");

    while (div.firstChild) {
        div.removeChild(div.firstChild);
    }
}

/*
 * L'utilisateur ecrit une phrase avec un separateur, et choisi quel mot il veux afficher
 * sert à extraire le nième mot de str1
 */

function strtok(str1, n) {
    var reg = /[^ \w]/;
    let sep = '';

    for (let i = 0; i < str1.length; i++) {
        console.log(str1.substr(i, 1));
        console.log(reg.exec(str1.substr(i, 1)));
        if (reg.exec(str1.substr(i, 1)) !== null) {
            sep = reg.exec(str1.substr(i, 1)).toString();
            console.log(sep);
        }
    }
    let table = str1.split(sep);

    alert(table[n - 1]);

    supp();

}

/*
 * permet de mettre des attributs a du html generer via JS
 */

function insertAttr(elem, attrs) {
    for (var key in attrs) {
        elem.setAttribute(key, attrs[key]);
    }

}

function tableau(taille) {
    let tab = new array(taille);
    let donnee;
    for (let i = 0; i < tab.lenght; i++) {
        donnee = prompt("Donnée n°" +(i+1));
        tab.push(donnee);
    }
    alert(tab.join("-"));
}

/*
on demande a l'utilisateur le nombre de données a saisir dans le tableau
 */
function initTab() {
        let elmt = prompt("combien de postes voulez-vous entrer dans le tableau ?");
        if (elmt !== null && elmt !=="") {
            while (isNaN(elmt)) {
                elmt = prompt("La indexs saisie n'est pas un nombre , veuillez saisir le nombres de postes que  vous souhaitez entrer dans le tableau");
                if (elmt == null) {
                    return;
                }

            }



            SaisieTab(elmt);
        }
        else
    {
        return;
    }

}

/*
L'utilisateur saisie les postes du tableau
 */

function SaisieTab(nb) {

    let tab = new Array();
    for (let i = 1; i <= nb; i++) {
        let index = prompt("veuillez saisir la donnée numéro " + i + " : ");

        if (index !== null && index !=="") { //si l'utilisateur a rentrer une valeur et qu'il n'a pas cliqué sur annuler
            while (isNaN(index)) {
                index = prompt("La indexs saisie n'est pas un nombre , veuillez saisir le numéro du poste a entrée");
                if (index == null) {
                    return;
                }

            }
            tab.push(index);

        }
        else
        {
            return;
        }
    }

    menutableau(tab);
}

/*
* On affiche le menu
* */
function menutableau(tab = []) {

    let selection = prompt("Que voulez-vous faire ? : \n 1) Afficher tout les poste  \n 2) Rechercher un poste spécifique \n 3) Afficher le poste maximum et la moyenne ");

    if (selection !== null && selection !=="") {
        while (isNaN(selection)) {
            selection = prompt("Veuillez indiquez le numéro correspondant à l'action que vous souhaiter effectuer : \n 1) Afficher tout les postes , \n 2) Rechercher un poste spécifique, \n 3) Afficher le poste maximum et la moyenne ");
        }

        switch (selection) {
            case '1':
                AfficherTab(tab);
                break;
            case '2':
                RechercheTab(tab);
                break;
            case '3':
                InfoTab(tab);
                break;
            default :
                alert("ce numéro de menu n'existe pas");
                menutableau(tab);
                break;
        }

    }

}
/*
* on affiche tout le contenu du tableau
* */
function AfficherTab(tab = []) {
    alert(tab.join("-")); // affiche les elements du tableau séparer par un '-'
    menutableau(tab);
}

function RechercheTab(tab = []) {
    let index = prompt("Quel index du tableau voulez-vous ?");
    if (index !== null) {
        while (isNaN(index)) { // verifie que la valeur du tableau est un nombre
            index = prompt("L'index saisie n'est pas un nombre , veuillez saisir l'index du poste que vous recherchez");
            if (index == null) { // si clique sur annuler
                return;
            }

        }
        if (tab[parseInt(index - 1)] == undefined) { // si le nombre saisie n'est pas trouver dans le tableau
            let reco = confirm("le tableau ne comporte pas cette donnée, recommencer ? ");
            if (reco) { //si il veux recommencer
                RechercheTab(tab);
            } else {
                menutableau(tab);
            }
        } else {
            alert(tab[parseInt(index - 1)]);
            RechercheTab(tab);

        }

    }
    else
    {
        menutableau(tab);
    }


}

function InfoTab(tab = []) {
    let max = Math.max.apply(null, tab); // selectionne la valeur la plus grande du tableau
    let somme = 0;
    tab.forEach(function(item){ // fait somme de tout les elements du tableau
        somme+=parseInt(item);});
    let moy = Math.round( (somme / tab.length)*100)/100; // calcule la moyenne , arrondi au dixieme pres

alert (" Le plus grand poste du tableau est "+ max + " \n La moyenne des postes est de : "+moy);
    menutableau(tab);
}

function supptab()
{

    let tab = ["Audrey", "Aurelien", "Flavien", "Jeremy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stephane", "Alfred", "Romaric", "Jacques","Mathieu","Mireille", "Justine", "Julie", "Homer","Laura", "Sarah"];
    let prenom = prompt("Saisissez le prenom à effacer parmis les prenom suivant : \n"+ tab.join("-"));
    prenom = prenom.charAt(0).toUpperCase() + prenom.substring(1).toLowerCase(); // permet de mettre la premiere lettre en Maj et le reste en minuscule
    let res = tab.includes(prenom); // fonction qui cherche une correspondance dans le tableau par rapport a la saisie de l'utilisateur
    if(res == true) // si il a trouver un resultat
    {
        let index = tab.indexOf(prenom); // on recupere l'index du resultat dans le tableau
        tab.splice(index,1); // on supprime
        tab.push(''); // on ajoute un champ vide a la fin
        alert("Prenom effacer avec succes. \n"+ tab.join("-"));
    }
    else
    {
       let reco =  confirm( "Le prenom " + prenom + " n'a pas été trouvé dans le tableau.\n recommencer ?");

       if (reco)
       {
           supptab();
       }

    }
}

function tribulle (tab = [])
{
    let tour = 0;
    let inverser; // si il y a un echange, cette variable passe a true
    do{
        inverser = false;
        for(var i=0; i < tab.length-1; i++) {
            if(tab[i] > tab[i+1]) {
                let valmax = tab[i]; // on conserve la valeur la plus grande
                tab[i] = tab[i+1]; // valeur plus grande prend la place index + 1
                tab[i+1] = valmax; // valeur plus petite prend la place de l'index actuel
                inverser = true; // on passe la variable a true pour que la boucle continue
            }
            tour++;
            console.log("tour n°"+tour+" : "+tab.join("-"));
        }
    } while(inverser); // tant que inverser est vrai , la boucle continue
}
let tab = [5, 8, 11, 6, 1, 9, 3];

