<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">

    <!-- STYLE.CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="row d-sm-block sticky-top  ">
        <div class="col navbar border border-dark">

            <a href="index.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="Accueil" style="background-color:green;">Acceuil</a>

            <a href="views/aPropos.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="A Propos" style="background-color:green;">A Propos</a>
        
          <a class="text-white btn d-flex justify-content-end boutons m-2 nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:green;">
           Préstations
          </a>
          <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="d-flex  m-2 dropdown-item " href="views/reflexologiePlantaire.php">Réflexologie plantaire</a></li>
            <li><a class="d-flex  m-2 dropdown-item " href="views/hypnose.php">Hypnose</a></li>
            <li><a class="d-flex  m-2 dropdown-item " href="views/massageBienEtre.php">Massage bien-être</a></li>
          </ul>
                <a href="views/tarifs.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="Tarifs" style="background-color:green;">Tarifs</a>

                <a href="views/contact.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="Contact" style="background-color:green;">Contact</a>

                <a href="views/forum.php" class="text-white btn d-flex justify-content-end boutons m-2" type="button" value="Forum" style="background-color:green;">Forum</a>
        </div>
    </div>
    <header class="header border border-dark">
        <!-- LOGO -->
        <div class="">
            <a class="" href="index.php"><input class="logo" type="image" src="assets/img/mon_logo-removebg-preview.png" value="Accuil"></a>
        </div>
        <!-- FIN LOGO -->
        <div>
            <h1 class="nameSite"> <strong>BIEN ÊTRE DES PIEDS À LA TÊTE </strong></h1>

        </div>
    </header>

    <div class="corps">
        <div id="contain">
            <div class="row justify-content-center" id="content">

                <!-- DEBUT HYPNOSE -->
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade p-0 w-25 mt-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/massage-pied1.jpg" class="photo d-block w-100" alt="Photo-Carousel-Reflexologie1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/massage-pied2.jpg" class="photo d-block w-100" alt="Photo-Carousel-Reflexologie2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/massage-pied3.jpg" class="photo d-block w-100" alt="Photo-Carousel-Reflexologie3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- FIN CAROUSEL REFLEXOLOGIE PLANTAIRE -->

                <div class="col-5 bg-white mt-5 p-3 text-center">
                    <h2> <strong>QU’EST CE QUE LA REFLEXOLOGIE PLANTAIRE?</strong></h2>

                    La réflexologie est une technique thérapautique issue de la médecine traditionnelle chinoise.
                    Sa pratique existe depuis des milliers d’années.
                    On décrit la réflexologie comme étant une méthode manuelle et naturelle centrée sur l’autorégulation
                    du
                    corps humain.
                    En réflexologie, le pied occupe une place primordiale, car il est la représentation du corps en
                    minuscule.
                    En effet, chaque zone corporelle, organe ou glande a sa correspondance sur le pied. On parle de
                    “zone
                    réflexes”. L’application sur certaines de ces zones permet de localiser les tensions, et de rétablir
                    l’équiibre de la partie du corps correspondante. Grace aux stimuli envoyés via des pressions
                    exercées
                    sur la
                    peau, le système nerveux est stimulé et actionne certaines réponse physiologiques.
                    <div>
                        <p><a href="views/reflexologiePlantaire.php" type="submit" value="ok" class=" p-2 btn btn-success ">Cliquez ici</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN REFLEXOLOGIE PLANTAIRE -->
        <!-- DEBUT HYPNOSE -->
        <div id="contain">
            <div class="row justify-content-center" id="content">

                <!-- DEBUT HYPNOSE -->
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade p-0 w-25 mt-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/hypnose3.jpg" class="photo d-block w-100" alt="Photo-Carousel-Hypnose1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/hypnose2.jpg" class="photo d-block w-100" alt="Photo-Carousel-Hypnose2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/hypnose.jpg" class="photo d-block w-100" alt="Photo-Carousel-Hypnose3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- FIN CAROUSEL HYPNOSE -->
                <div class="col-5 bg-white mt-5 p-3 text-center">
                    <h2> <strong>QU’EST CE QUE L'HYPNOSE ?</strong></h2>

                    L'hypnose permet de traiter et d'ameliorer certains troubles psychologique, mais aussi d'agir sur des symptômes, comme des douleurs.
                    Elle est particulièrement active sur les phobies, les troubles obsessionnels, les addictions, les angoisses, le stress, la confiance en soi.
                    Elle peut etre également indiquée sur les troubles du sommeil ou sur des addictions, comme le tabagisme.
                    <div>
                        <p><a href="views/hypnose.php" type="submit" value="ok" class=" p-2 btn btn-success ">Cliquez ici</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN HYPNOSE -->
        <!-- DEBUT MASSAGE -->
        <div id="contain">
            <div class="row justify-content-center" id="content">
                <!-- DEBUT MASSAGE -->
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade p-0 w-25 mt-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/massage-dos.jpg" class="photo d-block w-100" alt="Photo-Carousel-Massage1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/massage-dos2.jpg" class="photo d-block w-100" alt="Photo-Carousel-Massage2">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- FIN CAROUSEL MASSAGE-->
                <div class="col-5 bg-white mt-5 p-3 text-center">
                    <h2> <strong>Les Massages bien-être</strong></h2>
                    Je vous propose de découvrir le massage bien-être drainant du ventre pour ses vertus apaisantes et stimulantes de l'etat géneral.
                    Le ventre est considéré comme "le second cerveau". Son massage va favoriser la digestion en améliorant le systéme digestif général
                    permettant ainsi de stimuler l'élimination des toxines. il est important de protéger cet appareil et d'évacuer les tensions et le stress
                    accumulés au niveau du plexus solaire.
                    <div>
                        <p><a href="massageBienEtre.php" type="submit" value="ok" class=" p-2 btn btn-success ">Cliquez ici</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN MASSAGE -->
    </div>
    <!-- script bootstarp-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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