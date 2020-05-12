$('#modal').modal("show");
let connexion = document.getElementById('connexion');
let erreurmail = document.getElementById('errmail');
let validemail = false;
let validepass = false;
let mail = document.getElementById('mail');
let erreurpass = document.getElementById('errpass');
let pass = document.getElementById('pass');
let close = document.getElementById('close');

close.onclick = function()
{
    document.location.href="index.php";
};
mail.onchange = function () {

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


    connexion.disabled = !(validemail === true && validepass === true);

};


pass.onchange = function () {

    if (pass.value === null || pass.value === undefined || pass.value.length === 0) {

        erreurpass.textContent = 'Ce champ est obligatoire';
        validepass = false;

    } else {
        erreurpass.textContent = '';
        validepass = true;

    }

    connexion.disabled = !(validemail === true && validepass === true); // ternaire disabled = true , disabled = false si validemail === true && validepass === true

};


