<?php
include("header.php");
?>
<div class="col-12 mt-3">
    <h4>Ecrivez une fonction qui permette de générer un lien :  </h4>
    <h6>La fonction doit prendre deux paramètres, le lien et le titre
        lien("https://www.reddit.com/", "Reddit Hug");

        Appelée de cette façon, la fonction doit générer
        &lt;a href=&quot;https://www.reddit.com/&quot;&gt;Reddit Hug&lt;/a&gt;
    </h6>
    <?php
    lien("https://www.google.fr/",'google')
    ?>

</div>
<div class="col-12 mt-3">
<h4>Ecrivez une fonction qui calcul la somme des valeurs d'un tableau : </h4>

    <h6>La fonction doit prendre un paramètre de type tableau


        $tab = array(4, 3, 8, 2);

        $resultat = somme($tab);

        $resultat doit contenir 17 </h6>
    <?php
    $tab = [12,30,45,32];
    $rep = somme($tab);
    ?>
    <p> La somme des élements de votre tableau est égale à : <strong><?php echo $rep ?> </strong> </p>
</div>
<div class="col-12 mt-3">
    <h4>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe : </h4>
    <h6>Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :</h6>
    <ul><li>Faire au moins 8 caractères de long</li><li>Avoir au moins 1 chiffre</li><li>Avoir au moins une majuscule et une minuscule</li></ul>




        <h6>$resultat = complex_password("TopSecret42");

        $resultat doit contenir true.</h6>
    <?php
    $pass =" erzrze1P";
    $resultat = complex_password($pass);
    ?>
    <p> Aprés avoir essayer le mot de passe : <strong><?php echo $pass;?> </strong> , le résultat est <strong> <?php echo $resultat ?> </strong> </p>
</div>
<?php
include("footer.html");
?>
