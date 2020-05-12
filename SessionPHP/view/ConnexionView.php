<!DOCTYPE html>
<html>
<!-- Page template qui vas englober toutes les view du site -->

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div class="modal fade " data-backdrop="static" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog form-dark" role="document">
        <!--Content-->
        <div class="modal-content card card-image ">
            <div class=" text-center <?php if (isset($class)) {
                echo htmlspecialchars($class);
            } ?> "><?php if(isset($res)) {
                echo $res;
                    } ?></div>
            <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

                <!--Header-->
                <div class="modal-header text-center pb-4">
                    <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>S'identifier</strong> </h3>
                    <button type="button" class="white-text" id="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <form action="" method="post">
                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="Form-email5">Email : </label>
                        <input type="email" id="mail" name="mail" class="form-control validate white-text">
                        <p><small class="text-danger" id="errmail"> </small></p>

                    </div>

                    <div class="md-form pb-3">
                        <label data-error="wrong" data-success="right" for="Form-pass5">Mot de passe :</label>
                        <input type="password" id="pass" name="pass" id="Form-pass5" class="form-control validate white-text">
                        <p><small class="text-danger" id="errpass"> </small></p>
                    </div>

                    <!--Grid row-->
                    <div class="row d-flex align-items-center mb-4">

                        <!--Grid column-->
                        <div class="text-center mb-3 col-6">
                            <button type="submit" name="connexion" id="connexion" class="btn btn-success btn-block btn-rounded z-depth-1" disabled>Connexion
                            </button>
                        </div>
                        <div class="text-center mb-3 col-6">
                            <button type="submit" class="btn btn-danger btn-block btn-rounded z-depth-1">Retour
                            </button>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
                    </form>
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">
                            <p class="font-small white-text d-flex justify-content-end">Pas encore de compte ? <a href="index.php?action=Inscription"
                                                                                                            class="green-text ml-1 font-weight-bold">
                                    Crée un compte</a></p>
                            <p class="font-small white-text d-flex justify-content-end">Mot de passe oublier ? <a href="index.php?action=Oublimdp"
                                                                                                                  class="green-text ml-1 font-weight-bold">
                                    Ici</a></p>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/connexion.js" async></script>
</body>
</html>