<?php
/*
 * Les boucles
 */

function impair()
{
    for ($i = 0; $i < 150; $i++) {
        if ($i % 2 != 0) {
            echo $i . ' - ';
        }

    }
}

function xfois()
{
    $i = 1;
    while ($i <= 500) {
        echo 'phrase n°' . ($i) . ' : Je dois faire des sauvegardes régulières de mes fichiers - ';
        $i++;
    }
}

function tableaumultip()
{
    echo '<tr class="font-weight-bold">';
    echo "<td class='text-white' >X</td> \n";
    for ($col = 1; $col <= 12; $col++) {
        echo "<td>$col</td> \n";
    }
    echo "</tr>";

    for ($row = 1; $row <= 12; $row++) {
        echo "<tr> \n";

        //2eme colonne
        echo '<td class="font-weight-bold">' . $row . '</td>';

        for ($col = 1; $col <= 12; $col++) {
            $p = $col * $row; //multiplication
            echo "<td>$p</td> \n";
        }

        echo "</tr>";
    }


}
/*
 * Les tableaux
 */

function bissextile()
{
    $liste_mois = ['janvier' => 31, 'février' => 29, 'mars' => 31, 'avril' => 30, 'mai' => 31, 'juin' => 30, 'juillet' => 31, 'août' => 31, 'septembre' => 30, 'octobre' => 31, 'novembre' => 30, 'décembre' => 31];
    arsort($liste_mois);
    echo '<tr class="font-weight-bold">';
    echo "<td>Mois</td>";
    echo "<td>Nombres de jours</td></tr>";
    foreach ($liste_mois as $key => $value) {
        echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
    }

}

$capitales = array(

    "Bucarest" => "Roumanie",

    "Bruxelles" => "Belgique",

    "Oslo" => "Norvège",

    "Ottawa" => "Canada",

    "Paris" => "France",

    "Port-au-Prince" => "Haïti",

    "Port-d'Espagne" => "Trinité-et-Tobago",

    "Prague" => "République tchèque",

    "Rabat" => "Maroc",

    "Riga" => "Lettonie",

    "Rome" => "Italie",

    "San José" => "Costa Rica",

    "Santiago" => "Chili",

    "Sofia" => "Bulgarie",

    "Alger" => "Algérie",

    "Amsterdam" => "Pays-Bas",

    "Andorre-la-Vieille" => "Andorre",

    "Asuncion" => "Paraguay",

    "Athènes" => "Grèce",

    "Bagdad" => "Irak",

    "Bamako" => "Mali",

    "Berlin" => "Allemagne",

    "Bogota" => "Colombie",

    "Brasilia" => "Brésil",

    "Bratislava" => "Slovaquie",

    "Varsovie" => "Pologne",

    "Budapest" => "Hongrie",

    "Le Caire" => "Egypte",

    "Canberra" => "Australie",

    "Caracas" => "Venezuela",

    "Jakarta" => "Indonésie",

    "Kiev" => "Ukraine",

    "Kigali" => "Rwanda",

    "Kingston" => "Jamaïque",

    "Lima" => "Pérou",

    "Londres" => "Royaume-Uni",

    "Madrid" => "Espagne",

    "Malé" => "Maldives",

    "Mexico" => "Mexique",

    "Minsk" => "Biélorussie",

    "Moscou" => "Russie",

    "Nairobi" => "Kenya",

    "New Delhi" => "Inde",

    "Stockholm" => "Suède",

    "Téhéran" => "Iran",

    "Tokyo" => "Japon",

    "Tunis" => "Tunisie",

    "Copenhague" => "Danemark",

    "Dakar" => "Sénégal",

    "Damas" => "Syrie",

    "Dublin" => "Irlande",

    "Erevan" => "Arménie",

    "La Havane" => "Cuba",

    "Helsinki" => "Finlande",

    "Islamabad" => "Pakistan",

    "Vienne" => "Autriche",

    "Vilnius" => "Lituanie",

    "Zagreb" => "Croatie"

);
function capitales()
{
    global $capitales;
    ksort($capitales);
    return $capitales;

}

function trivilles()
{
    global $capitales;
    asort($capitales);
    return $capitales;
}

function nbpays()
{
    global $capitales;
    echo count($capitales);
}

function supcapitales()
{
    global $capitales;
    foreach ($capitales as $key => $value) {
        if (substr($key, 0, 1) != 'B') {
            unset($capitales[$key]);
        }
    }
    return $capitales;
}

$departements = array(

    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),

    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),

    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),

    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")

);

function listeregion()
{
    global $departements;
    ksort($departements);
    foreach($departements as $key=>$value)
    {
        echo '<strong>' .$key. ' : </strong>';

        foreach($value as $listeregion )
        {

            echo ' - '.$listeregion.' ';
        }
        echo '<br>';
    }
}
function countregion()
{
    global $departements;
    foreach($departements as $key=>$value) {
        echo '<strong>' . $key . ' : </strong>';
        $nb = count($value);
        echo ' - ' . $nb . ' <br>';
    }


}

/*
 * Les fonctions
 */

function lien($url,$titre)
{
    echo '<a href='.$url.'>'.$titre.'</a>';
}

function somme (array $tab )
{
    $som = 0;
foreach($tab as $value)
    {
        if(is_int($value))
        {
            $som+= $value;
        }
    }
return $som;
}

function complex_password($pass)
{
$maj=false;
$min=false;
$chiffre=false;
$nblettre = strlen($pass);
if($nblettre>=8)
{
    for($i=0;$i<$nblettre;$i++)
    {
        if(ctype_digit($pass[$i]))
        {
            $chiffre = true;
        }
        if(ctype_upper($pass[$i]))
        {
            $maj= true;
        }
        if(ctype_lower($pass[$i]))
        {
            $min = true;
        }
    }
    if($maj && $min && $chiffre)
    {
        return 'correct';
    }
    else
    {
        return 'incorrect';
    }
}
else
{
    return 'incorrect';
}

}

/*
 * Les dates et Heures
*/


function numSemaine(String $texte)
{
    $date = strtotime($texte);
    if($date)
    {
        $semaine = date('W',$date);
    }

    return $semaine;
}
function nbjours(string $date)
{
    $date1 = date_create($date);
    $datefin = date_create_from_format('j-m-Y', '30-10-2020');
    $interval = date_diff( $datefin, $date1);
    return $interval->format('%a');

}

function abissextile( String $date)
{


if (date("L", mktime(0, 0, 0, 1, 1, $date)) == 1)
{
    return 'est bissextile';
}
else
{
    return 'n\'est pas bissextile';
}

}

function datereel (String $date)
{
    $verifdate = explode('/',$date);
    $j = intval($verifdate[0]);
    $m = intval($verifdate[1]);
    $a = intval($verifdate[2]);
    if(checkdate($m,$j,$a))
    {
        return 'cette date est correcte';
    }
    else
    {
        return 'cette date n\'est pas valide';
    }
}