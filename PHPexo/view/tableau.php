<?php
include("header.php");
?>
<div class="col-12 mt-3">
    <h4>Mois de l'année non bissextile : </h4>
    <h6>Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.

        Utilisez le nom des mois comme clés de votre tableau associatif.

        Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.

        Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.</h6>
    <table border="1" class="text-center ">
    <?php
    bissextile();
    ?>
    </table>
</div>
<div class="col-12 mt-3">
        <h4>Capitales : </h4>
        <h6>Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.


            Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.

            Affichez le nombre de pays dans le tableau.

            Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.
        </h6>
        <div class="col-12">
        <div class="row">
        <div class="col-4 d-flex justify-content-center">
            <table border="1" class="text-center">
                <tr><th colspan="2">Par Capitales</th></tr>
                <tr>
                    <th>Capitales</th>
                    <th>Pays</th>
                </tr>
            <?php
            $res = capitales();
            foreach($res as $key=>$value)
            {
                ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo$value ?></td>
                </tr><?php
            }

            ?>
            </table>

        </div>
            <div class="col-4 d-flex justify-content-center ">
                <table border="1" class="text-center">
                    <tr><th colspan="2">Par Pays</th></tr>
                    <tr>
                        <th>Capitales</th>
                        <th>Pays</th>
                    </tr>
                    <?php
                    $res = trivilles();
                    foreach($res as $key=>$value)
                    {
                        ?>
                        <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo$value ?></td>
                        </tr><?php
                    }

                    ?>
                </table>
            </div>
            <div class="col-4 d-flex justify-content-center ">
                <table border="1" class="text-center">
                    <tr><th colspan="1">Nombres de pays dans le tableau</th><th colspan="2">Aprés suppression des capitales </th></tr>
                    <tr><td rowspan="12"><?php nbpays();?> </td>
                    <th>Capitales</th>
                    <th>Pays</th>
                    </tr>
                    <?php
                    $res = supcapitales();
                    foreach($res as $key=>$value)
                    {
                        ?>
                        <tr>

                        <td><?php echo $key ?></td>
                        <td><?php echo$value ?></td>
                        </tr><?php
                    }

                    ?>
                </table>

            </div>
        </div>

    </div>
</div>
<div class="col-12 mt-3">
    <h4>Départements</h4>
    <h6>Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements</h6>
    <?php
    listeregion();
    ?>

    <h6 class="mt-3">Affichez la liste des régions suivie du nombre de départements</h6>

    <?php
    countregion();
    ?>
</div>
<?php
include("footer.html");
?>
