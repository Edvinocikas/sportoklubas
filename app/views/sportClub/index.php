<?php $this->view("sportClub/header"); ?>

<div class="tm-hero d-flex img"></div>

<div class="container tm-container-content" style="padding-top: 20px;padding-bottom: 20px;margin-right: auto">
    <div class="row tm-gallery">

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 border" style="box-shadow: inset 0px 0px 15px 5px #FFFEFE;">
            <img src="<?= ASSETS ?>sportClub/img/6.jpg" alt="Image" class="img-fluid" style="height: 40%" width="100%">
            <div class="d-flex align-items-center justify-content-center">
                <h2 class="font">Baseinai</h2>
                <div class="font">Reguliarus lankymasis baseine padės atsikratyti nereikalingų kilogramų, sustangrins
                    odą, sustiprins stuburą, pagerins miego kokybę ir bendrą savijautą.
                </div>
            </div>

            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light"></span>
                <span></span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 border" style="box-shadow: inset 0px 0px 15px 5px #FFFEFE;">
            <img src="<?= ASSETS ?>sportClub/img/3.jpg" alt="Image" class="img-fluids" style="height: 40%" width="100%">
            <div class="d-flex align-items-center justify-content-center">
                <h2 class="font">Soliariumai</h2>
                <div class="font">Gražūs nori būti visi – nenuostabu, kad šaltuoju metų laiku, soliariumų duris varsto
                    tiek daug žmonių.
                </div>
            </div>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light"></span>
                <span></span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 border" style="box-shadow: inset 0px 0px 15px 5px #FFFEFE;">

            <img src="<?= ASSETS ?>sportClub/img/4.jpg" alt="Image" class="img-fluid" style="height: 40%" width="100%">
            <div class="d-flex align-items-center justify-content-center">
            <h2 class="font">Masažai</h2>
            <div class="font" style="text-overflow: ellipsis;">Pasimėgaukite atpalaiduojančiu nugaros masažu, kuris
                šiltais, maloniais judesiais išsklaidys susikaupusią įtampą, nerimą ir nuovargį.
            </div>
        </div>

        <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light"></span>
            <span></span>
        </div>
    </div>
</div>
</div>

<div class="mapouter">
    <div style="width: 100%;height: 300px">
        <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=%20Saul%C4%97tekio%20al.%2015+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        </iframe>
        <a href="https://www.maps.ie/route-planner.htm"></a>
    </div>
</div>

<?php $this->view("sportClub/footers"); ?>
