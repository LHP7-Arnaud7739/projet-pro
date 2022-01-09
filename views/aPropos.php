<?php




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Propos</title>
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




    <div class="corps text-center">

<h1>A Propos de moi</h1>
<h2>
<div>
Aller voir un réflexologue  est une démarche responsable, de prise de conscience personnelle.<br>

Le massage est une aide au travail personnel que chacun doit faire.<br> Le praticien est un jardinier qui arrache les mauvaises herbes et met de l’engrais. <br>À chacun le soin de replanter les fleurs. Dans le cadre d’une prise en charge globale de la personne et non du problème isolé, il est indispensable d’associer des conseils aux massages.<br>



Chez moi vous ne trouverez pas de jugement, que du soutient, de la compassion, une main tendu sur la voie de la guérison.
</div></h2>
<a href="../index.php" type="submit" value="ok" class="btn btn-success ">Retour </a>

     


    </div>







    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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