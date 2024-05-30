<?php 
$title="Web & App";
require_once("header.php"); 
require_once("nav-webapp.php"); 
?>

    <main class="webapp-home">
        <section class="banner mx-3 mb-4 position-relative">
            <div class="banner-content d-flex p-4">
                <div class="banner-text col-6 text-right">
                    <div class="banner-title">
                        <span class="title mr-5">Création sur</span>
                        <span class="title mr-3">mesure</span>
                        <span class="title mr-5">Technologie</span>
                        <span class="title">de pointe.</span>
                        <span class="title title-lg">&</span>
                    </div>
                    <p class="banner-p text-left">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum.</p>
                    <div class="d-flex ">
                        <a class="btn btn-acheter mr-3"><div class="bold">Acheter</div>&nbsp;maintenant</a>
                        <a class="btn btn-demander">Demander une démo</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/png/c-white.png" alt="">
                </div>
            </div>

            <div class="visual visual-play">
                <img src="assets/img/png/play.png" alt="un rochet">
            </div>
            <div class="visual visual-cible">
                <img src="assets/img/png/cible.png" alt="un rochet">
            </div>
            <div class="visual visual-rocket">
                <img src="assets/img/png/rocket.png" alt="un rochet">
            </div>
            <div class="visual visual-loupe">
                <img src="assets/img/png/loupe.png" alt="un loupe">
            </div>
            <div class="banner-image">
                <img src="assets/img/png/banner-webapp.png" alt="des composants graphiques de site">
            </div>
        </section>

        <section class="marquee mb-5">
            <div class="marquee-track">
                <div class="display-1">
                &nbsp;&nbsp;WEB & APP&nbsp;&nbsp;&nbsp;&nbsp;WEB & APP&nbsp;&nbsp;&nbsp;&nbsp;WEB & APP
                </div>
            </div>
        </section>

        <section class="apropos d-flex">
            <div class="col-6 row">
                <div class="w-50">
                    <img class="object-fit-fill" src="assets/img/png/webapp-apropos-1.png" alt="Bannière déroulable de la place du 350">
                </div>
                <div class="w-50 g-3">
                    <div class="h-50">
                        <img src="assets/img/png/webapp-apropos-2.png" alt="Bannière déroulable de la place du 350">
                    </div>
                    <div class="h-50">
                        <img src="assets/img/png/webapp-apropos-3.png" alt="Bannière déroulable de la place du 350">
                    </div>

                </div>
            </div>
            <div class="col-6 bg-white py-3 px-4 ml-3">
                <h2 class=""><span class="pb-3">À propos </span></h2>
                <div class="display-2 my-3">Découvrir votre digital evolution.</div>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page.</p>
                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <i class="fa-solid fa-square-check"></i>
                        Avantage 1
                    </li>
                    <li class="list-group-item"> 
                        <i class="fa-solid fa-square-check"></i>
                        Avantage 2
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-square-check"></i>
                        Avantage 3
                    </li>
                </ul>
                <div class="ceo d-flex align-items-center my-4">
                    <div class="col-2 p-0 pt-4 mr-3">
                        <img class="ceo-image" src="assets/img/png/ceo.png" alt="photo du CEO">
                    </div>
                    <div class="">
                        <div class="ceo-name" >Mohamed Squalli</div>
                        <div>CEO & Fondateur</div>
                    </div>
                </div>
                <a class="btn" href=""><span class="bold">Découvrir </span>plus</a>
            </div>
        </section>

    </main>


<?php require_once("footer.php"); ?>
