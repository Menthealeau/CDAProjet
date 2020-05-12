$('#modal').modal("close"); //on ferme la modal de inscription
$('#mdpoubliemodal').modal("show"); //on ouvre la modal d'inscription

let envoi = document.getElementById('envoyer');
let mail = document.getElementById('mail');
let close = document.getElementById('close');

let validemail = false;



close.onclick = function()
{
    document.location.href="index.php";
};

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


    envoi.disabled = !(validemail === true);

};