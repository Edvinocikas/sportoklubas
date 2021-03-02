<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY GYM</title>
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
                    <a class="nav-link nav-link-1 active" aria-current="page" href="<?= ROOT ?>index">Titulinis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="<?= ROOT ?>feedback">Atsiliepimai</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="<?= ROOT ?>register">Registracija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="<?= ROOT ?>login">Prisijungti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>