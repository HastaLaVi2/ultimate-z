<?php
/* Smarty version 3.1.39, created on 2021-11-06 21:10:03
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6186ef2b674698_48187396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0d64c50b253ec0d54e6807c216dbf8854f56ef' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/_template.tpl',
      1 => 1636232981,
      2 => 'file',
    ),
    '2de67654463ebbed118f4a9466ca3d8b72fb2cbd' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl',
      1 => 1636204676,
      2 => 'file',
    ),
    '0538971dc732ac65971b8a4e8622951228ba23c9' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl',
      1 => 1636209054,
      2 => 'file',
    ),
    'a1024cb52edf47d66bf10c48f378e40c156099d3' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/loading.tpl',
      1 => 1636204676,
      2 => 'file',
    ),
    'ee145e4b305193bfa0799dbe5399d0e2b0bf7047' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/sidebar.tpl',
      1 => 1633376417,
      2 => 'file',
    ),
    '0858768a9f44129c1b02f0fefb43d98e29f9ca91' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/logo.tpl',
      1 => 1626937377,
      2 => 'file',
    ),
    '67a4baec2d8f0389261da3ebe9486ae621a65e05' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/pageHeader.tpl',
      1 => 1633373917,
      2 => 'file',
    ),
    '37ad690d114aa609e1e968d0e1276ea0a862870d' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/footer.tpl',
      1 => 1636204676,
      2 => 'file',
    ),
    'bccd1d6e5f756a0c71889da5394d7176cd403d20' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/footer.tpl',
      1 => 1630787909,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_6186ef2b674698_48187396 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Veritabanı | zAdmin</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" href="http://localhost/ultimate-z/_admin/advanced/database/" />
<link rel="alternate" hreflang="en" href="http://localhost/ultimate-z/en/_admin/advanced/database" />
<link rel="alternate" hreflang="tr" href="http://localhost/ultimate-z/tr/_admin/advanced/database" />

<!-- font libraries -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- jquery -->
<script src="http://localhost/ultimate-z/_scripts/jquery/jquery-3.6.0.min.js"></script>
<script src="http://localhost/ultimate-z/_scripts/jquery/jquery.lazy.min.js"></script>
<script src="http://localhost/ultimate-z/_scripts/jquery/jquery.lazy.plugins.min.js"></script>

<!-- font-awesome -->
<link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/fontawesome/css/all.min.css"/>

<!-- the ultimate z -->
<link rel="stylesheet" type="text/css" href="http://localhost/ultimate-z/_scripts/ultimate-z/z.min.css"/>
<script src="http://localhost/ultimate-z/_scripts/ultimate-z/z.min.js"></script>

<!-- owl.carousel -->
<link href="http://localhost/ultimate-z/_scripts/owl.carousel/owl.carousel.css" rel="stylesheet"/>
<link href="http://localhost/ultimate-z/_scripts/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
<script src="http://localhost/ultimate-z/_scripts/owl.carousel/owl.carousel.min.js"></script>

<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="http://localhost/ultimate-z/_favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://localhost/ultimate-z/_favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="http://localhost/ultimate-z/_favicon/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://localhost/ultimate-z/_favicon/favicon-16x16.png">
<link rel="manifest" href="http://localhost/ultimate-z/_favicon/site.webmanifest">
<link rel="mask-icon" href="http://localhost/ultimate-z/_favicon/safari-pinned-tab.svg" color="#2d89ef">
<link rel="shortcut icon" href="http://localhost/ultimate-z/_favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="http://localhost/ultimate-z/_favicon/mstile-144x144.png">
<meta name="msapplication-config" content="http://localhost/ultimate-z/_favicon/browserconfig.xml">
<meta name="theme-color" content="#2d89ef">


    <!-- dragula -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/dragula/dragula.min.css"/>
    <script src="http://localhost/ultimate-z/_scripts/dragula/dragula.min.js"></script>

    <!-- toastify -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/toastify/toastify.css">

    <!-- imagetracer -->
    <script src="http://localhost/ultimate-z/_scripts/imagetracer/imagetracer_v1.2.6.js"></script>

    <!-- html2canvas -->
    <script src="http://localhost/ultimate-z/_scripts/html2canvas/html2canvas.min.js"></script>

    <!-- admin javascript functions -->
    <script src="http://localhost/ultimate-z/_scripts/admin.js"></script>
</head>
<body class="back7">
    
<div id="zLoad1" class="floatingSpace displayNone mortalW-8 widthAll heightAll fixed font-24 index-12"></div>
<div id="zLoad2" class="floatingSpace displayNone back7 widthAll heightAll fixed font-24 index-13 padL-332 zMob1200-padL-0">
    <div class="hollyMid">
        <center>
            <div class="clockInfinite back6 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
            <div class="xclockInfinite back2 top--90 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
        </center>
    </div>
</div>

<div id="zLoad0_1" class="zPreLoadOut floatingSpace widthAll heightAll"></div>
<div id="zLoad0_2" class="zPreLoadIn back7 floatingSpace widthAll heightAll">
    <div class="hollyMid">
        <center>
            <div class="clockInfinite back6 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
            <div class="xclockInfinite back2 top--90 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
            <div class="padT-20 text1">
                ultimate Z
            </div>
        </center>
    </div>
</div>

    <div class="floatingTheSpace fixed index-11 height-100 widthAll">
        <div class="height-70 widthAll back7" zMob-1200="height-100"></div>
        <div class="height-30 widthAll specGrad" zMob-1200="height-40"></div>
    </div>

    <div id="zHead">
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/simple-datatables/style.css">
</div>

    
<div id="zSidebar" class="toggle-sidebar width-320 heightAll animSlow index-100 colTop fixed pad-20">
    <div class="pad-32 row-12 weight-900 whiteBack rad-20 no zMob1200-zShadow hideScroll">
        
<div class="bottom-10">
    <div class="text1 weight-900 font-30">ultimate Z</div>
    <div class="boldText gray2 font-13 top--5">powered by <a href="https://onucyirmibir.com" target="_blank">13/21</a></div>
</div>
        <div class="top-40">
            <ul class="cleanList font-16">
                <li class="text4 padLR-1rem weight-600">Menü</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-th-large text6"></i>
                        <span class="padL-15">Gösterge Paneli</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="#" class="pad-13 rad-10 blockThis zTogDown-side1 zHov-grayBack1 animSlow text4">
                        <i class="fas fa-layer-group text6"></i>
                        <span class="padL-15">Düzen</span>
                        <i class="fas fa-chevron-down inRight top-3 text6"></i>
                    </a>
                    <ul class="zShow-side1 font-13 padL-2rem left-2rem displayNone">
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/design" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Tasarım
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/pages/index.php" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Sayfalar
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/categories/index.php" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Kategoriler
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/media" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-photo-video text6"></i>
                        <span class="padL-15">Medya</span>
                    </a>
                </li>

                                <li class="text4 padLR-1rem weight-600 padT-30">Seçenekler</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/preferences" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-cog text6"></i>
                        <span class="padL-15">Seçenekler</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/users" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-users text6"></i>
                        <span class="padL-15">Kullanıcılar</span>
                    </a>
                </li>

                <li class="text4 padLR-1rem weight-600 padT-30">İleri Düzey</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/advanced/database" class="pad-13 rad-10 blockThis back5 color-white">
                        <i class="fas fa-server whiteText"></i>
                        <span class="padL-15">Veritabanı</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/advanced/run-queries" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-terminal text6"></i>
                        <span class="padL-15">Sorgu Çalıştır</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="text5 font-25 floatingTheRight pad-32 displayNone zMob1200-no">
        <i class="button-sidebar-in pointThis fas fa-times"></i>
    </div>
</div>
<script>
function sidebarBtn() {
    if ($(window).width() < 1200) {
        $(".toggle-sidebar").css("margin-left", "-320px");
    } else {
        $(".toggle-sidebar").css("margin-left", "0");
    }
}

$(document).ready(function() {
    sidebarBtn();
    $(".button-sidebar").click(function() {
        $(".toggle-sidebar").css("margin-left", "0");
    });

    $(".button-sidebar-in").click(function() {
        $(".toggle-sidebar").css("margin-left", "-320px");
    });
});

$(window).resize(function(){
    sidebarBtn();
});
</script>
    <div class="widthAll pad-32 padL-332" zMob-1200="padL-32">
        
            
<header class="floatingTheSpace fixed displayNone zMob1200-no index-50">
    <div class="pointThis text5 button-sidebar inLine">
        <i class="fas fa-bars font-25"></i>
    </div>
</header>
<nav class="floatingTheRight top-30 right-30 fixed index-50">
    <a href="http://localhost/ultimate-z/" target="_blank" class="inLine colTop pointThis right-30 rightText index-10">
        <div class="no zMob768-displayNone">
            <div class="inLine verMid font-15">
                Görüntüle
                <div class="font-12">ultimate Z</div>
            </div>
            <div class="inLine verMid">
                <i class="fas fa-home padL-10 font-1_2em"></i>
            </div>
        </div>
    </a>
    <div id="zUser" class="inLine colTop pointThis zTog-userMenu index-10">
        <div class="inLine colTop rightText padR-15">
            <h5 class="top-0 bottom-0">Kerimcan Ayaz</h5>
            <h6 class="top-0 bottom-0">Yönetici</h6>
        </div>
        <div class="inLine width-39">
            <img src="http://localhost/ultimate-z/_media/user/profile/4.jpg" class="pagePic widthAll rad-half">
        </div>
    </div>
    <div class="zShow-userMenu displayNone">
        <div class="floatingTheRight whiteBack rad-15 pad-20 index-10 width-250 zShadow font-16">
            <div class="font-14 weight-700 gray3 bottom-10">Merhaba, Kerimcan!</div>
            <a href="http://localhost/ultimate-z/" target="_blank" class="displayNone zMob768-no">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoT boldMin-1">
                    <div class="inLine verMid">
                        <i class="fas fa-home padR-10"></i>
                    </div>
                    <div class="inLine verMid font-15">
                        Görüntüle
                        <div class="font-12">ultimate Z</div>
                    </div>
                </div>
            </a>
            <a href="http://localhost/ultimate-z/_admin/profile/">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3">
                    <i class="fas fa-id-badge padR-10"></i>
                    Profil
                </div>
            </a>
            <a href="http://localhost/ultimate-z/_admin/logout/" class="forceLink">
                <div class="left--20 right--20 bottom--20 rad-b-15 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoB boldMin-1">
                    <i class="fas fa-sign-out-alt padR-10"></i>
                    Çıkış Yap
                </div>
            </a>
        </div>
    </div>
</nav>
        

        <div class="font-24 text4 index-20 fixed" zMob-1200="padT-30" id="zPageTitle">
            <h3 class="boldText top-10">Veritabanı: ultimate-z</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            
            
    <div class="whiteBack rad-15 pad-20 font-16">
                <table class="zTable">
            <thead>
                <tr>
                    <th>Tablo</th>
                    <th>Satır Sayısı</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                                                        <tr>
                        <td>z</td>
                        <td>1</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=z" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zCategories</td>
                        <td>0</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zCategories" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zCategories_tr</td>
                        <td>0</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zCategories_tr" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zHolders</td>
                        <td>5</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zHolders" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zHolders_tr</td>
                        <td>10</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zHolders_tr" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zLanguages</td>
                        <td>2</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zLanguages" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zPages</td>
                        <td>19</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zPages_tr</td>
                        <td>38</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages_tr" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zPagesCategories</td>
                        <td>0</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPagesCategories" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zPagesHolders</td>
                        <td>1</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPagesHolders" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zPagesHolders_tr</td>
                        <td>2</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPagesHolders_tr" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zRanks</td>
                        <td>2</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zRanks" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zRanks_tr</td>
                        <td>4</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zRanks_tr" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zTemplates</td>
                        <td>1</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zTemplates" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zTemplates_tr</td>
                        <td>2</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zTemplates_tr" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zUsers</td>
                        <td>1</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zUsers" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zViewsPage</td>
                        <td>4</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zViewsPageByUser</td>
                        <td>4</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPageByUser" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                                                        <tr>
                        <td>zViewsTotal</td>
                        <td>4</td>
                        <td>
                            <a href="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsTotal" class="zButton zHov-zShadow5 primary sweet">
                                 Düzenle
                            </a>
                        </td>
                        <td>
                                                    </td>
                    </tr>
                            </tbody>
        </table>
    </div>

        </div>

        
<footer class="font-16 text6 padT-40 bottom-50">
    <div class="inLeft">
        <p>2021 &copy; ultimate Z</p>
    </div>
    <div class="inRight">
        <p><span style="color: #dc3545;"><i class="far fa-heart"></i></span> version <b>0.2.0</b></p>
    </div>
</footer>
    </div>

    <div id="zBottom">
        

    <!-- toastify -->
    <script src="http://localhost/ultimate-z/_scripts/toastify/toastify.js"></script>
        
        
    <script>
    var entriesPerPage = "gösterilen öge sayısı";
    var searchOn = "Ara...";
    var showingOf = "Toplam [rows] ögeden [start] ila [end] arası gösteriliyor";
    showingOf = showingOf.replaceAll("[", "{").replaceAll("]", "}");
    var noRowFound = "Sonuç bulunamadı";

    $("input[type=checkbox]").change(function() {
        var clas = $(this).attr("class").split(" ")[1];
        var checked = $(this).prop("checked");
        $("."+clas).prop("checked", checked);
    });
    </script>
    <script src="http://localhost/ultimate-z/_scripts/simple-datatables/simple-datatables.js"></script>
    <script>
    
        function zPageJS() {
            // Simple Datatable
            let tables = document.querySelectorAll(".zTable");
            tables.forEach((item, i) => {
                let dataTable = new simpleDatatables.DataTable(item, {
                    columns: [
                        {select: [2,3], sortable: false},
                    ]
                });
                dataTable.on("datatable.page", function(page) {
                    $("#zContent").find("a").click(magicLinks);
                });
                dataTable.on("datatable.sort", function(column, direction) {
                    $("#zContent").find("a").click(magicLinks);
                });
            });
            zDetect();
        }
    
    zPageJS();
    </script>

    </div>
</body>
</html>
<?php }
}
