<?php
$js = 'oublimdp';

include('model/UserModel.php');

if (isset($_POST['mail'])) {

    $info = Info_User($_POST['mail']);
    if (!empty($info)) {
        $nbticket = rand(0, 100000);
        $mail =

            mail($info[0]->user_mail,
                'Demande de récuperation de mot de passe',
                'Bonjour ' . $info[0]->user_surname . ' '. $info[0]->user_name .' nous avons bien pris en considération votre demande de mot de passe.
                Votre ticket porte le numéro '. $nbticket .'. Un retour vous sera fait d\'ici 24 a 48h',
                array('From' => 'Velvet@mail.com',
                    'X-Mailer' => 'PHP/' . phpversion()
                ));

        if(!$mail)
        {
            $class = 'list-group-item list-group-item-danger';
            $res = 'Erreur lors de l\'envoi du mail';
        }
        $class = 'list-group-item list-group-item-success';
        $res = 'Un email vous à été envoyer à l\'adresse suivante :'. $info[0]->user_mail.'';

    }
    else
    {
        $class = 'list-group-item list-group-item-danger';
        $res = 'cette adresse mail n\'existe pas dans notre base de données';
    }
}

include('view/OublimdpView.php');