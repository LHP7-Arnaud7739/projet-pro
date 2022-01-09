<?php
require("../controllers/controllerindex.php");
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Pro Arnaud P</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- BOOTSTRAP ICONE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- STYLE.CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>

<body>
    <div class="row d-sm-block sticky-top  ">
        <div class="col navbar border border-dark">

            <a href="../index.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="Accueil" style="background-color:green;">Acceuil</a>

            <a href="aPropos.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="A Propos" style="background-color:green;">A Propos</a>

            <a class="text-white btn d-flex justify-content-end boutons m-2 nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:green;">
           Préstations
          </a>
          <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="d-flex  m-2 dropdown-item " href="reflexologiePlantaire.php">Réflexologie plantaire</a></li>
            <li><a class="d-flex  m-2 dropdown-item " href="hypnose.php">Hypnose</a></li>
            <li><a class="d-flex  m-2 dropdown-item " href="massageBienEtre.php">Massage bien-être</a></li>
          </ul>
            <a href="tarifs.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="Tarifs" style="background-color:green;">Tarifs</a>

            <a href="contact.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="Contact" style="background-color:green;">Contact</a>

            <a href="forum.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="Forum" style="background-color:green;">Forum</a>
        </div>
    </div>
    <header class="header border border-dark">
        <!-- LOGO -->
        <div class="">
            <a class="" href="../index.php"><input class="logo" type="image" src="../assets/img/mon_logo-removebg-preview.png" value="Accuil"></a>
        </div>
        <!-- FIN LOGO -->
        <div>
            <h1 class="nameSite"> <strong>BIEN ÊTRE DES PIEDS À LA TÊTE </strong></h1>

        </div>
    </header>


    <!-- Nous testons si le POST n'est pas vide est que le tableau d'erreur est vide -->
    <!-- Si OK, nous affichons un lien vers connexion.php -->
    <!-- Sinon nous affichons le formulaire d'inscription -->
    <?php if (!empty($_POST) && empty($arrayError)) { ?>
        <p>Inscription OK, veuillez vous connecter</p>
        <a class="btn btn-outline-primary" href="connexion.php">Connexion</a>
    <?php } else { ?>
        <div class="row p-4">
            <h1 class="text-center">Inscription</h1>

            <form class="justify-content-middle" action="index.php" method="POST">
                <div class="col-4  mb-3 form-group">
                    <label for="nom" class="form-label">Nom : </label><span class="text-danger">
                        <?=
                        $arrayError["nom"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "" ?>" name="nom" type="text" class="form-control" id="nom" placeholder="Ex : Dupont...">

                    <label for="prenom" class="form-label">Prénom : </label><span class="text-danger">
                        <?=
                        $arrayError["prenom"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "" ?>" name=" prenom" type="text" class="form-control" id="prenom" placeholder="Ex : Jean...">

                    <label for="pseudo" class="form-label">Pseudo : </label><span class="text-danger">
                        <?=
                        $arrayError["pseudo"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : "" ?>" name=" pseudo" type="text" class="form-control" id="pseudo" placeholder="Ex : DupontJean897...">
                </div>
                <div class="col-4 mb-3">
                    <label for="mdp" class="form-label">Mot de passe : </label>
                    <span class="text-danger">
                        <?=
                        $arrayError["mdp"] ?? " ";
                        ?>
                    </span>

                    <!-- Nous ne gardons pas en mémoire la valeur du MDP : obliger l'utilisateur a réecrire le MDP -->
                    <input name="mdp" type="password" class="form-control" id="mdp">

                    <label for="confMdp" class="form-label">Confirmation du mot de passe : </label>
                    <span class="text-danger">
                        <?=
                        $arrayError["confMdp"] ?? " ";
                        ?>
                    </span>
                    <input name="confMdp" type="password" class="form-control" id="confMdp">


                </div>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-success">Inscription</button>

            <a href="forum.php" type="submit" value="ok" class="btn btn-danger ">Retour </a>

            </form>
        </div>

    <?php } ?>

</body>
<!-- FOOTER -->
<footer class="border border-dark">
    <div class="" id="footer">

        <div class="row">

        <div class="col-4 text-start">
            <a  href="../index.php"><input class="logo" type="image" src="../assets/img/mon_logo-removebg-preview.png" value="Accueil"></a>
        </div>
            <div class="col-4 text-midlle ">
                <section  class="">
                    <h3 class="">Adresse</h3>
                    <div class="">
                        <p>98 Route Des Hêtres<br>
                            76110 Manneville La Goupil
                        </p>
                    </div>
                    <span class=""></span>
                </section>
            </div>
            <div class="col-4 text-end  ">
                <section class="">
                    <h3 class="">Téléphone</h3>
                    <div class="">
                        <p>06 52 94 20 39<br>
                        <p>09 51 11 09 18<br>
                            ——-<br>
                            SIRET<br>
                            ... .... .... ....</p>
                    </div>
                    <span class=""></span>
                </section>
            </div>
        </div>

        <!-- ####### END FOOTER CONTAINER ####### -->
    </div>
</footer>

</html>