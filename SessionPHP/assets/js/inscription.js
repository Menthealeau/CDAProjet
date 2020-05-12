$('#modal').modal("close"); //on ferme la modal de inscription
$('#inscmodal').modal("show"); //on ouvre la modal d'inscription

//Récupération des info d'inscription

let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let mail = document.getElementById('mail');
let pass = document.getElementById('pass');
let inscription = document.getElementById('inscription');
let close = document.getElementById('close');

let validemail = false;
let validepass = false;
let validenom = false;
let valideprenom = false;


close.onclick = function()
{
    document.location.href="index.php";
};

nom.onchange = function(){

    let erreurnom = document.getElementById("errnom");
    if(nom.value === null || nom.value === undefined || nom.value.length === 0)
    {
        erreurnom.textContent = 'Veuillez renseigner votre nom';
        validenom = false;
    }
    else
    {
        let reg = /^[A-Za-zÀ-ÖØ-öø-ÿ-]+$/;
        if(!reg.test(nom.value))
        {
          erreurnom.textContent = 'Veuillez rentrer un nom valide, il ne dois pas comporter de chiffres';
            validenom = false;

        }
        else
        {
            erreurnom.textContent="";
            validenom = true;
        }

        inscription.disabled = !(validemail === true && validepass === true && validenom === true && valideprenom === true);
    }
}
prenom.onchange = function(){

    let erreurprenom = document.getElementById("errprenom");
    if(prenom.value === null || prenom.value === undefined || prenom.value.length === 0)
    {
        erreurprenom.textContent = 'Veuillez renseigner votre prenom';
        valideprenom = false;
    }
    else
    {
        let reg = /^[A-Za-zÀ-ÖØ-öø-ÿ-]+$/;
        if(!reg.test(nom.value))
        {
            erreurprenom.textContent = 'Veuillez rentrer un prenom valide, il ne dois pas comporter de chiffres';
            valideprenom = false;

        }
        else
        {
            erreurprenom.textContent="";
            valideprenom= true;
        }

        inscription.disabled = !(validemail === true && validepass === true && validenom === true && valideprenom === true);
    }
}

mail.onchange = function () {
    let erreurmail= document.getElementById("errmail");
    let reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i; // regex qui verifie que la saisie comporte bien un @ et un .
    if (mail.value === null || mail.value === undefined || mail.value.length === 0) {
        erreurmail.textContent = 'Ce champ est obligatoire';
        validemail = false;
    }

    else {

        if (!reg.test(mail.value)) {

            erreurmail.textContent = 'Incorrect, veuillez rentrer une adresse mail valide';
            validemail = false;
        } else {
            erreurmail.textContent = '';
            validemail = true;
        }

    }


    inscription.disabled = !(validemail === true && validepass === true && validenom === true && valideprenom === true);

};


pass.onchange = function () {
    let erreurpass= document.getElementById("errpass");

    if (pass.value === null || pass.value === undefined || pass.value.length === 0) {

        erreurpass.textContent = 'Veuillez enseigner un mot de passe';
        validepass = false;

    }

    else {

        if(pass.value.length < 8 )
        {
            erreurpass.textContent = 'Votre mot de passe doit comporter 8 caracteres minimum';
            validepass = false;
        }
        else
        {
            let character ='';
            let nbr = false;
            let Maj = false;
            for(let i=0; i<pass.value.length; i++)
            {
                character = pass.value.charAt(i) // caractere prend la valeur de la lettre(i) du mot
                console.log(character * 1);
                if(!isNaN(character * 1))
                {
                    nbr = true;

                }
                else
                {
                    if(character === character.toUpperCase())
                    {
                        Maj = true;
                    }

                }

            }

            if(!nbr)
            {
                erreurpass.textContent = 'Votre mot de passe doit contenir au minimum 1 Chiffre';
                validepass = false;
            }
            else
            {
                if(!Maj)
                {
                    erreurpass.textContent ='Votre mot de passe doit contenir au moins une Majuscule';
                    validepass = false;
                }
                else
                {
                    erreurpass.textContent = '';
                    validepass = true;
                }
            }


        }
    }

    inscription.disabled = !(validemail === true && validepass === true && validenom === true && valideprenom === true); // ternaire disabled = true , disabled = false si validemail === true && validepass === true

};