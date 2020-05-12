<?php
include("header.php");
?>
<div class="col-12 mt-3">
    <h4>Trouvez le numéro de semaine de la date suivante : 14/07/2019.</h4>
    <?php
    $date = '14-07-2019';
    $res = numSemaine($date);
    ?>
    <p>Avec la fonction PHP  <?php lien('https://www.php.net/manual/fr/function.date','Date("W")');?> , la date : <strong><?php echo $date ?></strong> correspond à la <strong><?php echo $res; ?></strong> éme semaine</p>
</div>
<div class="col-12 mt-3">
<h4> Combien reste-t-il de jours avant la fin de votre formation ? : </h4>
    <?php
    $datejour = date("j-m-Y");
    $resdate = nbjours($datejour);
    ?>
    <p> Nous sommes le  <strong><?php echo $datejour ?></strong>, la formation ce termine le <strong>30-10-2020</strong>,en nous aidant de la fonction PHP  <?php lien('https://www.php.net/manual/fr/datetime.diff.php','date_diff()');?> , il reste donc <strong><?php echo $resdate; ?></strong> jours</p>

</div>
<div class="col-12 mt-3">
    <h4> Comment déterminer si une année est bissextile ? </h4>

<?php
$année = '2020';
$bis = abissextile($année);
?>
<p> Nous avons tester l'année <strong><?php echo $année ?></strong> , avec la fonction PHP  <?php lien('https://www.php.net/manual/fr/function.date','Date("L")');?> , cette année <strong><?php echo $bis; ?></strong></p>
</div>
<div class="col-12 mt-3">
    <h4> Montrez que la date du 32/17/2019 est erronée. </h4>

    <?php
    $date = '32/17/2019';
    $valide = datereel($date);

    ?>

    <p> Avec la fonction PHP <?php lien('https://www.php.net/manual/fr/function.checkdate','checkdate()');?>, si on essaye la date <strong><?php echo $date.' , '.$valide ?></strong> </p>
</div>
<div class="col-12 mt-3">
    <h4>Affichez l'heure courante sous cette forme : 11h25 :</h4>
    <?php
    date_default_timezone_set('Europe/Paris'); // on regle sur le fuseau horaire français
    $heure = strftime('%Hh%M'); //on affiche l'heure avec 'h' et ensuite les minutes
    ?>
    <p> Avec la fonction PHP <?php lien('https://www.php.net/manual/fr/function.strftime.php','strftime()');?>, nous pouvons definir l'heure comme demander : <strong><?php echo $heure; ?></strong></p>
</div>
<div class="col-12 mt-3">
    <h4>Ajoutez 1 mois à la date courante</h4>
    <?php
    $dated = date("d-m-Y"); // on recupere la date du jour
    $datefinal = date("d-m-Y",strtotime("+1 month",strtotime($dated))); //on ajoute 1 mois a la date du jour et on converti le resultat en format date
    ?>
    <p> Avec la fonction PHP <?php lien('https://www.php.net/manual/fr/function.strtotime','strtotime()');?>, si nous ajoutons 1 mois a la date d'aujourd'hui : <strong><?php echo $dated; ?></strong>, nous serons le <strong><?php echo $datefinal; ?></strong></p>
</div>

<div class="col-12 mt-3">
    <h4>Que s'est-il passé le 1000200000</h4>
    <?php
    $daten = 1000200000;
    $cdate = date('j F Y ',$daten);

    ?>

    <p> Avec la fonction PHP  <?php lien('https://www.php.net/manual/fr/function.date','date(\'d-m-Y\')');?> , nous avons pu convertir le chiffre 1000200000 en format date ce qui donne <strong><?php echo $cdate;?> </strong></p>

</div>

<?php
include("footer.html");
?>
