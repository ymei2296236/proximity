<?php 
$title="Home";
require_once("head.php"); 
require_once("header.php"); 
?>


  <main>
    <!-- la bannière -->
    <section class="home-banner mx-3 mb-4">
      <div class="home-banner-content mx-5 my-5 text-white">
        <div class="home-banner-title">
          <span class="home-title">The</span>
          <span class="home-title home-title-1">Proximity</span>
          <span class="home-title ">agency</span>
          <span class="home-title home-title-2">closer to</span>
          <span class="home-title home-title-3">the future</span>
          <span class="home-title home-title-2">than</span>
          <span class="home-title home-title-2">the present</span>
        </div>
        <div>
          <span class="categorie categorie-1"><span class="darkText">Mar</span>keting&nbsp;digital</span>
          <a href="webapp.php">
            <span class="categorie categorie-2"><span class="darkText">We</span>b&nbsp;&&nbsp;App</span>
          </a>
          <span class="categorie categorie-3"><span class="darkText">Str</span>ategy&nbsp;360</span>
          <div class="visual visual-play">
            <img src="assets/img/png/play.png" alt="une icône d'afficher la vidéo">
          </div>

        </div>
        <div>
          <img class="icon icon-location-1" src="assets/img/png/location.png" alt="">
          <img class="icon icon-location-2" src="assets/img/png/location.png" alt="">
          <img class="icon icon-location-3" src="assets/img/png/location.png" alt="">
          <img class="icon icon-chat" src="assets/img/svg/chat.svg" alt="">
          <img class="icon icon-globe" src="assets/img/svg/globe.svg" alt="">
          <img class="icon icon-loupe" src="assets/img/svg/loupe.svg" alt="">
          <img class="icon icon-panier" src="assets/img/svg/panier.svg" alt="">
        </div>
      </div>
      <div class="d-flex row">
        <img class="home-banner-image col-md-6 px-0" src="assets/img/png/c.png" alt="">
        <img class="home-banner-image col-md-6 px-0"  src="assets/img/png/terre.png" alt="">
      </div>
      <div  class='home-banner-video'>
        <video src="https://proximityagency.ca/wp-content/themes/proximityagency/assets/video/Proximity.mp4" loop="" muted="" autoplay="" playsinline=""></video>
      </div>
    </section>

    <section class="marquee mb-3">
      <div class="marquee-track">
        <div class="display-1">
          &nbsp;&nbsp;STRATÉGIE · 360&nbsp;&nbsp;&nbsp;&nbsp;MARKETING DIGITAL&nbsp;&nbsp;&nbsp;&nbsp;WEB & APP
        </div>
      </div>
    </section>

    <!-- Nos services -->
    <section class="nosServices mx-lg-5 mx-3 mb-5">
      <h2 class="mb-5"><span class="mb-4">Nos services</span></h2>
      <div class="services-wrapper text-white mb-5">

        <a class="service-wrapper" href="#">
          <div class="service-text-top">
            <div class="service-name">Stratégie&nbsp;360</div>
          </div>
          <div class="service-text">
            <div class="service-name-open">Stratégie&nbsp;360</div>
            <div class="service-description">Lorem Ipsum texte 1</div>
            <div class="service-btn">
              <img src="assets/img/png/fleche.png" alt="bouton flèche">
            </div>
          </div>
          <div class="service-number">01</div>
          <img class="imageService" src="assets/img/png/service-1.png" alt="">
        </a>

        <a class="service-wrapper" href="webapp.php">
          <div class="service-text-top">
              <div class="service-name">Web&nbsp;&&nbsp;App</div>
          </div>
          <div class="service-text">
            <div class="service-name-open">Web&nbsp;&&nbsp;App</div>
            <div class="service-description">Lorem Ipsum texte 1</div>
            <div class="service-btn">
              <img src="assets/img/png/fleche.png" alt="bouton flèche">
            </div>
          </div>
          <div class="service-number">02</div>
          <img class="imageService" src="assets/img/png/service-2.png" alt="">
        </a>

        <a class="service-wrapper" href="#">
          <div class="service-text-top">
            <div class="service-name">Marketing&nbsp;digital</div>
          </div>
          <div class="service-text">
            <div class="service-name-open">Marketing&nbsp;digital</div>
            <div class="service-description">Lorem Ipsum texte 1</div>
            <div class="service-btn">
              <img src="assets/img/png/fleche.png" alt="bouton flèche">
            </div>
          </div>
          <div class="service-number">03</div>
          <img class="imageService" src="assets/img/png/service-3.png" alt="">
        </a>
      </div>
    </section>

    <!-- Nos certifications -->
    <section class="">
      <div class="slider slider-certifications d-flex flex-row pt-4 pb-5 px-lg-5 px-2">

        <div class="logo p-3">
          <img src="assets/img/png/logo-google-creative.png" alt="Logo de Google Ads Creative Certified">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-google-ads-search.png" alt="Logo de Google Ads Serach Certified">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-google-video.png" alt="Logo de Google Ads Video Certified">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-google-shopping.png" alt="Logo de Google Shopping Ads Certified">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-google-ads-display.png" alt="Logo de Google Ads Display Certified">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-google-ads-apps.png" alt="Logo de Google Ads App Certified">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-microsoft-advertising.png" alt="Logo de Microsoft Advertising Native & Display Certification">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-microsoft.png" alt="Logo du Microsoft Advertising Certified Professional">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-microsoft-search.png" alt="Logo du Microsoft Advertising Certified Professional">
        </div>
        <div class="logo p-3">
          <img src="assets/img/png/logo-microsoft-advertising.png" alt="Logo du Microsoft Advertising Certified Professional">
        </div>
      </div>
    </section>

    <!-- À propos de nous -->
    <section class="mx-md-5 mx-3">
      <h2 class="mb-lg-5 mb-0 pb-4"><span class="pb-3">À propos de nous</span></h2>
      <div class="apropos">
        <div class="apropos-col d-flex justify-content-end pe-md-5 pe-3">
          <div class="col-md-8 col-10 mt-md-5 mt-sm-0 pt-4 " >
            <img class="img-fluid img-apropos" src="assets/img/webp/about-home.webp" alt="
            Un homme regarde le ciel étoilé avec des lunettes VR">
          </div>
        </div>
        <div class="apropos-col pt-sm-5 ps-5">
          <p class="col-9 display-2 mb-5 pb-2">NOUS NE LIMITONS PAS À ÉLABORER DE SIMPLES STRATÉGIES MARKETING, NOUS CRÉONS DES HISTOIRES DE MARQUES.</p>
          <div class="ms-md-5 ms-0 ps-5">
            <p class="col-9 ms-4 ps-1">Proximity est le fruit de plusieurs années d’expérience dans le domaine du marketing digital. Ayant travaillé avec les plus grandes marques dans le monde entier, nous combinons les idées et les connaissances avec la conception et les données technologiques afin de donner naissance à un résultat adapté à vos besoins et sur-mesure.</p>
            <div class="enSavoirPlus mt-5 mx-4">
              <p class="enSavoirPlus__btn">En Savoir Plus&nbsp;<i class="fa-solid fa-arrow-right fa-rotate-by" style="--fa-rotate-angle: -45deg;"></i></p>
            </div>
          </div>
        </div>
      </div>

      <div class="elements">
        <span class="element element-1"></span>
        <span class="element element-2"></span>
        <span class="element element-3"><img src="assets/img/svg/element-3.svg" alt=""></span>
      </div>
    </section>

    <?php require_once("footer.php"); ?>
