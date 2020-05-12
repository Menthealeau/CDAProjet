<?php
include("header.php");
?>
<div class="col-12 mt-3">
<form action='script.php' method='post' id="formulaire_contact">

    <h2>Vos Coordonnées</h2>
    <h6 class="text-danger">* Ces zones sont obligatoires pour valider le formulaire</h6>
    <div class="row">
        <div class="col-10 pt-2 ">
            <label for="societe">Société: *</label>
            <input type="text" class="form-control" placeholder="Power" id="societe" name="Societe">
            <span id="errsociete"></span>
        </div>
        <div class="col-2 gif pt-2 pl-2">
            <img src="" alt="" id="imgsociete">
        </div>
        <div class="col-10 pt-2 ">
            <label for="perscon">Personne à contacter: *</label>
            <input type="text" class="form-control" placeholder="Ranger" id="Contact" name="Contact">
            <span id="errpers"></span>
        </div>
        <div class="col-2 gif pt-2 pl-2">
            <img src="" alt="" id="imgpers">
        </div>
        <div class="col-10 pt-2 ">
            <label for="add">Adresse de l'entreprise:</label>
            <textarea id="adresse" name="Adresse" class="form-control" placeholder="23 rue des parpings"></textarea>
            <span id="erradd"></span>
        </div>
        <div class="col-2 gif pt-2 pl-2">
            <img src="" alt="" id="imgadd">
        </div>
        <div class="col-10 pt-2 ">
            <label for="cp">Code Postal: * </label>
            <input type="text" name="Code Postal" class="form-control" placeholder="80000" id="cp">
            <span id="errcp"></span>
        </div>
        <div class="col-2 gif pt-2 pl-2">
            <img src="" alt="" id="imgcp">
        </div>
        <div class="col-10 pt-2 ">
            <label for="ville">Ville: * </label>
            <input type="text" class="form-control" id="ville" placeholder="Amiens" name="Ville">
            <span id="errville"></span>
        </div>
        <div class="col-2 gif pt-2 pl-2">
            <img src="" alt="" id="imgville">
        </div>
        <div class="col-10 pt-2 ">
            <label for="mail">E-Mail: * </label>
            <input type="email" name="E-Mail" class="form-control" id="mail" placeholder="forcejaune@afpa.fr">
            <span id="erremail"></span>
        </div>
        <div class="col-2 gif pt-2 pl-2">
            <img src="" alt="" id="imgmail">
        </div>
        <div class="col-10 pt-2 ">
            <label for="tel">Téléphone:</label>
            <input type="text" id="tel" name="Téléphone" class="form-control" placeholder="0521513151">
            <span id="errtel"></span>
        </div>
        <div class="col-2 gif pt-2 pl-2">
            <img src="" alt="" id="imgtel">
        </div>
        <div class="col-10 pt-4">
            <div class="row">
                <div class="col-4">
                    <label for="projet">Sélectionner l'environnement technique du projet :</label>
                    <select name="environement" id="environ">
                        <option value="choisissez" id="choisissez" selected>Choisissez</option>
                        <option value="Access" id="php">Access</option>
                        <option value="Java" id="js">Java</option>
                        <option value="Delphi" id="delphi">Delphi</option>
                        <option value="Windev" id="Windev">Windev</option>
                        <option value="Visual Basic" id="Visual Basic">Visual Basic</option>
                        <option value="Power Builder" id="Power Builder">Power Builder</option>
                        <option value="Internet" id="Internet">Internet</option>
                        <option value="Intranet" id="ntranet">Intranet</option>
                        <option value="Windows NT" id="Windows NT">Windows NT</option>
                        <option value="unix" id="Unix">Unix</option>
                        <option value="SQL Server" id="SQL Server">SQL Server</option>
                        <option value="Oracle" id="Oracle">Oracle</option>
                        <option value="autres" id="autres">Autres</option>
                    </select>
                </div>
                <div class="col-8">
                    <textarea name="projet" id="projet" cols="56" rows="5"></textarea>
                    <span id="errdesc"></span>

                </div>
                <div class="col-8 offset-4">
                    <img src="" alt="" id="imgdesc">
                </div>
            </div>


        </div>




    </div>
    <div class="col-12 mt-2 d-flex align-items-center justify-content-center">
        <input type="submit" value = "valider" id="valider" class="btn btn-primary valider">
        <button type="reset" id="reset" class="btn btn-danger ml-2 effacer">Effacer</button>
    </div>
</form>
</div>
<?php
include("footer.html");
?>
