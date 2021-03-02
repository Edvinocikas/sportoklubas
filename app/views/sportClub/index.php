<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM</title>
    <link rel="stylesheet" href="<?= ASSETS ?>sportClub/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>sportClub/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>sportClub/css/templatemo-style.css">
</head>
<body style="background-color: #373737">
<!-- Page Loader -->

<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<nav class="navbar navbar-expand-lg container" style="padding-right: 300px;height: 70px">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.html">Titulinis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="videos.html">Atsiliepimai</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="about.html">Registracija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.html">Prisijungti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="tm-hero d-flex img">

</div>

<div class="container tm-container-content" style="padding-top: 20px;padding-bottom: 20px;margin-right: auto">
    <div class="row tm-gallery">

    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 border">

        <img src="<?= ASSETS ?>sportClub/img/6.jpg" alt="Image" class="img-fluid" style="height: 40%" width="100%">
        <div class="d-flex align-items-center justify-content-center">
            <h2 class="font">Baseinai</h2>
            <div class="font">Reguliarus lankymasis baseine padės atsikratyti nereikalingų kilogramų, sustangrins odą, sustiprins stuburą, pagerins miego kokybę ir bendrą savijautą.
            </div>
        </div>

        <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light"></span>
            <span></span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 border ">
        <img src="<?= ASSETS ?>sportClub/img/3.jpg" alt="Image" class="img-fluids" style="height: 40%" width="100%">
        <div class="d-flex align-items-center justify-content-center">
            <h2 class="font">Soliariumai</h2>
            <div class="font">Gražūs nori būti visi – nenuostabu, kad šaltuoju metų laiku, soliariumų duris varsto tiek daug žmonių.</div>
        </div>
        <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light"></span>
            <span></span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 border ">

        <img src="<?= ASSETS ?>sportClub/img/4.jpg" alt="Image" class="img-fluid" style="height: 40%" width="100%">
        <div class="d-flex align-items-center justify-content-center">
            <h2 class="font">Masažai</h2>
            <div class="font" style="text-overflow: ellipsis;">Pasimėgaukite atpalaiduojančiu nugaros masažu, kuris šiltais, maloniais judesiais išsklaidys susikaupusią įtampą, nerimą ir nuovargį.</div>
        </div>

        <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light"></span>
            <span></span>
        </div>
    </div>
</div>
</div>

<div class="mapouter ">
    <div style="width: 100%">
        <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=%20Saul%C4%97tekio%20al.%2015+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">

        </iframe>
        <a href="https://www.maps.ie/route-planner.htm"></a></div>

</div>

<footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer" style="height: 70px">
    <div class="container-fluid tm-container-small">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-12 px-5 mb-3" style="padding-top: 20px;color: black">
                2021 Edvin Vasilionok. All rights reserved.
            </div>
        </div>
    </div>
</footer>

<script src="<?= ASSETS ?>sportClub/js/plugins.js"></script>
<script>
    $(window).on("load", function () {
        $('body').addClass('loaded');
    });
</script>
</body>
</html>