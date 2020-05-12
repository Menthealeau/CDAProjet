<?php

foreach ( $_POST as $post => $val )  { //on recupere toutes les données envoyés via le formulaire
    if($post !='environement')
    {
        echo '<p><strong>'.$post.'</strong> : '.$val.'</p>';
    }
}
