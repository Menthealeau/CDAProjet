<?php
include("header.php");
?>
<div class="col-12 mt-3">
    <h4>Lecture d'un fichier</h4>
    <h6>Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens
        hypertextes.</h6>
    <?php
    $res = file('../assets/save/liens.txt');

    ?>
    <table border="1" class="text-center">
        <tr>
            <th>Liens</th>
        </tr>

        <?php
        foreach ($res as $value) {
            ?>

            <tr>
                <td><?= $value ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

</div>
<div class="col-12 mt-3">
    <h4>Récupération d'un fichier distant</h4>
    <h6>
        <li>Utilisez la fonction file() pour récupérer le contenu de ce fichier</li>
        <li>Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()</li>
        <li>Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les
            colonnes du tableau.
        </li>
    </h6>

    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">Surname</th>
            <th scope="col">firstname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
            <th scope="col">Adress</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $res = file("http://bienvu.net/misc/customers.csv");
        foreach ($res as $value) {
            $value = explode(',', $value); ?>
            <tr><?php
                foreach ($value as $donnée) { ?>
                    <td><?= $donnée ?></td>
                    <?php
                }
                ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<?php
include("footer.html");
?>

