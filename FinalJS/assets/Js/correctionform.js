// Déclaration des variables de récupération

let societe = document.getElementById('societe');
let perscontact = document.getElementById('perscon');
let mail = document.getElementById('mail');
let tel = document.getElementById('tel');
let adresse = document.getElementById('add');
let cp = document.getElementById('cp');
let ville = document.getElementById('ville');
let valider = document.getElementById('valider');
let lang = document.getElementById('environ');
let texte = document.getElementById('projet');

let tabreponse = [false,false,true,false,false,false,true,true]; //Tableau qui va récuperer les résultats des regex pour le bouton valider

// On ajoute l'évenement Blur sur les inputs pour une vérification automatique de la saisie
console.log(tabreponse.length);
societe.onblur = function () {
    let res = verifsociete(this); // res contient le resultat de la fonction qui vérifie la saisie
    tabreponse[0] = res; // on modifie notre tableau de résultat avec TRUE OU FALSE
    return tabreponse; // on renvois le tableau modifier
};
perscontact.onblur = function () {
    let res = verifPersonne(this);
    tabreponse[1] = res;
    return tabreponse;
};
adresse.onblur = function () {
    let res = verifAdd(this);
    tabreponse[2] = res;
    return tabreponse;
};
cp.onblur = function () {
    let res = verifcp(this);
    tabreponse[3] = res;
    return tabreponse;
};
ville.onblur = function () {
    let res = verifville(this);
    tabreponse[4] = res;
    return tabreponse;
};

mail.onblur = function () {
    let res = verifmail(this);
    tabreponse[5] = res;
    return tabreponse;
};
tel.onblur = function () {
    let res = veriftel(this);
    tabreponse[6] = res;
    return tabreponse;
};



texte.onblur = function () {
    let res = verifdesc(this);

    tabreponse[6] = res;

    console.log(tabreponse.length);
    return tabreponse;
};
lang.onchange = function () {
    let texte = document.getElementById('projet');
    if (lang.value !== "choisissez") {
        texte.value += " " + lang.value;
        verifdesc(texte);
    }
}

// Traitement du bouton valider

valider.onclick = function () {
    let valider = document.getElementById("validation");
    let divvalid = document.getElementById("divalide");
    let res = true;
    valider.style.color = "blue";
    divvalid.style.height = "51px";
    console.log(tabreponse.length);

    for(let i=0; i<tabreponse.length;i++) //on verifie que le tableau de résultat soient corrects
    {

        if(!tabreponse[i]) {  //si il y a un resultat qui est faux
            res = false; // res -> false , donc message d'erreur
            break; // on arrete la boucle
        }
    }

        if (res) { // Si tout les champs sont valide
            divvalid.style.backgroundColor = 'rgba(0,128,0,0.5)';
            valider.innerText = "Formulaire Competer avec brio";
            setTimeout(function () {
                valider.innerText = "";
                divvalid.style.backgroundColor = "white";
                divvalid.style.height = "0px";
                $('#modal').modal("hide");
                window.location.reload(true);
            }, 4000);
        }
        else {
            divvalid.style.backgroundColor = 'rgb(240,128,128,0.3)';
            valider.innerText = "Erreurs dans les champs: \n";
            valider.innerText+= " - Les champs obligatoires sont pas remplis\n"
            valider.innerText += "- Erreurs sur le remplissage des champs"
            setTimeout(function () {
                valider.innerText = "";
                divvalid.style.backgroundColor = "white";
                divvalid.style.height = "0px";
            }, 7000);

        }

    }


/*
* Les Fonctions de vérification des données
*/


function surligne(champ, erreur, nomimg) { //fonction qui change le style des inputs selon si la regex match ou non
    let img = document.getElementById(nomimg);
    if (champ.value === "") {
        champ.style.backgroundColor = "white";
        img.src = "assets/img/saitpas.gif";
    } else {
        if (erreur) {
            img.src = "assets/img/no.gif";
            champ.style.backgroundColor = "#fba";
        } else {
            img.src = "";
            champ.style.backgroundColor = "#32CD32";
        }
    }
}

function verifsociete(societe) {
    let erreur = document.getElementById("errsociete");
    erreur.style.color = "red";
    let espace = document.createElement("br");
    let reg = /^\w[\w.\-#&\s]*$/; //regex qui verifie un ou plusieurs caracteres (nombre, chiffres, les espaces, - , # , &)
    if (societe.value === '') { // donnée obligatoire
        surligne(societe, true, "imgsociete"); // si vide, on retourne une erreur
        erreur.innerText = 'Ce champ est obligatoire';
        erreur.append(espace);
        return false; // le tableau de resultat aura false comme résultat pour la société
    }
    if (!reg.test(societe.value)) { // Si la regex ne match pas avec la saisie
        surligne(societe, true, "imgsociete");
        erreur.innerText = 'Incorrect, veuillez rentrer un nom de société valide';
        erreur.append(espace);
        return false;
    } else {
        surligne(societe, false, "imgsociete");
        erreur.innerText = '';
        return true;
    }

}

function verifPersonne(personne) {
    let reg = /^[A-Za-zÀ-ÖØ-öø-ÿ-]+$/; // Regex qui comprend une bibliothèques de symboles dont l'espace, le - etc....
    let erreur = document.getElementById("errpers");
    erreur.style.color = "red";
    let espace = document.createElement("br");
    if (personne.value === "") {
        surligne(personne, true, "imgpers");
        erreur.innerText = 'Ce champ est obligatoire';
        erreur.append(espace);
        return false;
    } else {
        if (!reg.test(personne.value)) {
            surligne(personne, true, "imgpers");
            erreur.innerText = 'Incorrect, veuillez rentrer un prenom valide';
            erreur.append(espace);
            return false;
        } else {
            surligne(personne, false, "imgpers");
            erreur.innerText = '';
            return true;
        }

    }
}


function verifmail(mail) {
    let reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i; // regex qui verifie que la saisie comporte bien un @ et un .
    let erreur = document.getElementById('erremail');
    erreur.style.color = "red";
    let espace = document.createElement("br");

    if (mail.value === "") {
        surligne(mail, true, 'imgmail');
        erreur.innerText = 'Ce champ est obligatoire';
        erreur.append(espace);
        return false;

    } else {
        if (!reg.test(mail.value)) {
            surligne(mail, true, 'imgmail');
            erreur.innerText = 'Incorrect, veuillez rentrer une adresse mail valide';
            erreur.append(espace);
            return false;
        } else {
            surligne(mail, false, 'imgmail');
            erreur.innerText = '';
            return true;
        }
    }


}

function veriftel(tel) {
    let reg = /^(0[1-68])(?:[ _.-]?(\d{2})){4}$/; // regex qui verifie que le numéro commence bien par 0, et vérifie les autres chiffres par groupe de 2 4 fois
    let erreur = document.getElementById('errtel');
    let img = document.getElementById('imgtel');
    erreur.style.color = "red";
    let espace = document.createElement("br");

    if (tel.value === "") {
        erreur.innerText = '';
        tel.style.backgroundColor = "white";
        img.src = "";
        return true;
    } else {


        if (!reg.test(tel.value)) {
            surligne(tel, true, 'imgtel');
            erreur.innerText = 'Veuillez rentrer un numéro de téléphone correct';
            erreur.append(espace);
            return false;
        } else {
            surligne(tel, false, 'imgtel');
            erreur.innerText = '';
            return true;
        }

    }

}

function verifcp(cp) {
    let reg = /^\d{2}[ ]?\d{3}$/; // verifie en deux fois (dpt & 3 derniers chiffres) accepte 80 000 ou 80000
    let erreur = document.getElementById('errcp');
    let img = document.getElementById('imgcp');

    erreur.style.color = "red";
    let espace = document.createElement("br");
    if (cp.value === "") {
        surligne(cp, true, 'imgcp');
        erreur.innerText = 'Ce champ est obligatoire';
        erreur.append(espace);
        return false;
    } else {

        if (!reg.test(cp.value)) {
            surligne(cp, true, 'imgcp');
            erreur.innerText = 'Veuillez rentrer un code postal valide';
            erreur.append(espace);
            return false;
        } else {
            surligne(cp, false, 'imgcp');
            erreur.innerText = '';
            return true;
        }

    }


}

function verifville(ville) {
    let reg = /^[a-zA-Z]([-' ]?[a-zA-Z])*$/;
    let erreur = document.getElementById('errville');
    let img = document.getElementById('imgville');
    erreur.style.color = "red";
    let espace = document.createElement("br");
    if (ville.value === "") {
        surligne(ville, true, 'imgville');
        erreur.innerText = 'Ce champ est obligatoire';
        erreur.append(espace);
        return false;
    } else {
        if (!reg.test(ville.value)) {
            surligne(ville, true, 'imgville');
            erreur.innerText = "Veuillez rentrer une ville correcte";
            erreur.append(espace);
            return false;
        } else {
            surligne(ville, false, 'imgville');
            erreur.innerText = "";
            return true;
        }
    }
}

function verifAdd(adresse) {
    let reg = /^([0-9a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,500})$/;
    let erreur = document.getElementById('erradd');
    let img = document.getElementById('imgadd');
    erreur.style.color = "red";
    let espace = document.createElement("br");
    if (adresse.value === "") {
        img.src = "";
        erreur.innerText = "";
        adresse.style.backgroundColor = "white";
        return true;
    } else {
        if (!reg.test(adresse.value)) {
            surligne(adresse, true, 'imgadd');
            erreur.innerText = " veuillez rentrer une adresse valide";
            erreur.append(espace);
            return false;

        } else {
            surligne(adresse, false, "imgadd");
            erreur.innerText = "";
            return true;
        }

    }
}

function verifdesc(description) {
    let reg = /^([0-9a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ,!+\s-])+$/;
    let erreur = document.getElementById('errdesc');
    let img = document.getElementById('imgdesc');
    erreur.style.color = "red";
    let espace = document.createElement("br");
    if (description.value === "") {
        img.src = "";
        erreur.innerText = "";
        description.style.backgroundColor = "white";
        return true;
    } else {
        if (!reg.test(description.value)) {
            surligne(description, true, 'imgdesc');
            erreur.innerText = " Description trop longue, veuillez raccourcir ";
            erreur.append(espace);
            return false;

        } else {
            surligne(description, false, "imgdesc");
            erreur.innerText = "";
            return true;
        }

    }

}

