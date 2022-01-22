<?php
/* Smarty version 3.1.40, created on 2022-01-22 09:49:36
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/table/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebd330e11ba0_67652767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874ba74eb8061e9737deb3ec0cdeadd9aa154d32' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/table/_template.tpl',
      1 => 1642844600,
      2 => 'file',
    ),
    '2de67654463ebbed118f4a9466ca3d8b72fb2cbd' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl',
      1 => 1642843802,
      2 => 'file',
    ),
    '0538971dc732ac65971b8a4e8622951228ba23c9' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl',
      1 => 1642844056,
      2 => 'file',
    ),
    '573b073f619aeb439fcac73d74e676de04fada42' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/favicon.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
    'a1024cb52edf47d66bf10c48f378e40c156099d3' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/loading.tpl',
      1 => 1640874529,
      2 => 'file',
    ),
    'ee145e4b305193bfa0799dbe5399d0e2b0bf7047' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/sidebar.tpl',
      1 => 1640422377,
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
      1 => 1640422377,
      2 => 'file',
    ),
    'ea921527d0a89eb10256e18f21e891c839c80637' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/modal.tpl',
      1 => 1641644877,
      2 => 'file',
    ),
    '37ad690d114aa609e1e968d0e1276ea0a862870d' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/footer.tpl',
      1 => 1641388364,
      2 => 'file',
    ),
    'bccd1d6e5f756a0c71889da5394d7176cd403d20' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/footer.tpl',
      1 => 1642844528,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_61ebd330e11ba0_67652767 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Tablo | zAdmin</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" href="http://localhost/ultimate-z/_admin/advanced/database/table/" />
<link rel="alternate" hreflang="en" href="http://localhost/ultimate-z/en/_admin/advanced/database/tableindex.php?table=zViewsPage" />
<link rel="alternate" hreflang="tr" href="http://localhost/ultimate-z/tr/_admin/advanced/database/tableindex.php?table=zViewsPage" />

<!-- font libraries -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- jquery -->
<script src="http://localhost/ultimate-z/_scripts/jquery/jquery-3.6.0.min.js"></script>

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
<link rel="mask-icon" href="http://localhost/ultimate-z/_favicon/safari-pinned-tab.svg" color="#99154e">
<link rel="shortcut icon" href="http://localhost/ultimate-z/_favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#99154e">
<meta name="msapplication-TileImage" content="http://localhost/ultimate-z/_favicon/mstile-144x144.png">
<meta name="msapplication-config" content="http://localhost/ultimate-z/_favicon/browserconfig.xml">
<meta name="theme-color" content="#99154e">

<!-- lazysizes -->
<script src="http://localhost/ultimate-z/_scripts/lazysizes/lazysizes.min.js" async=""></script>

<!-- single-page application functions -->
<script>window.zAdmin = true</script><script src="http://localhost/ultimate-z/_scripts/spa_v1.js"></script>

    <!-- dragula -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/dragula/dragula.min.css"/>
    <script src="http://localhost/ultimate-z/_scripts/dragula/dragula.min.js"></script>

    <!-- toastify -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/toastify/toastify.css">

    <!-- imagetracer -->
    <script src="http://localhost/ultimate-z/_scripts/imagetracer/imagetracer_v1.2.6.js"></script>

    <!-- html2canvas -->
    <script src="http://localhost/ultimate-z/_scripts/html2canvas/html2canvas.min.js"></script>
</head>
<body class="back7">
    
<div id="zLoad1" zEffect="slide" class="floatingSpace displayNone mortalW-8 widthAll heightAll fixed font-24 index-12"></div>
<div id="zLoad2" zEffect="slide" class="floatingSpace displayNone back7 widthAll heightAll fixed font-24 index-13 padL-332 zMob1200-padL-0">
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

<div id="zLoad0_1" zEffect="slide" class="zPreLoadOut floatingSpace widthAll heightAll"></div>
<div id="zLoad0_2" zEffect="slide" class="zPreLoadIn back7 floatingSpace widthAll heightAll">
    <div class="hollyMid">
        <center>
            <div class="clockInfinite back6 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
            <div class="xclockInfinite back2 top--90 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
            <div class="padT-20 text1">
                ultimate Z            </div>
        </center>
    </div>
</div>

    <div class="floatingTheSpace fixed index-11 height-100 widthAll">
        <div class="height-70 widthAll back7" zMob-1200="height-100"></div>
        <div class="height-30 widthAll specGrad" zMob-1200="height-40"></div>
    </div>

    <div id="zTop">
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
            <h3 class="boldText top-10">Tablo: zViewsPage</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            
            
    <nav>
        <ol class="cleanList">
            <li><a href="http://localhost/ultimate-z/_admin/advanced/database" class="inLine font-16">
                <i class="fas fa-caret-left"></i>
                Veritabanı
            </a></li>
        </ol>
    </nav>

    <div class="whiteBack rad-15 pad-20 font-16">
        
                        <table class="zTable" no_sort="4-5">
            <thead>
                <tr>
                                                                                                        <th>id_views_page</th>
                                                            <th>id_page</th>
                                                            <th>value</th>
                                                            <th>date</th>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <th class="zEdit">Düzenle</th>
                    <th class="zDelete">Sil</th>
                </tr>
            </thead>
            <tbody>
                                    <tr>
                                                                                                                                                                                                                            <td>121</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>2</td>
                                                                                                                                        <td>2022-01-21</td>
                                                <td class="zEdit">
                            
<a href="#modal0" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal0">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='121'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='121'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>2</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-21'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>120</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2022-01-20</td>
                                                <td class="zEdit">
                            
<a href="#modal1" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal1">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='120'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='120'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-20'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>119</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2022-01-10</td>
                                                <td class="zEdit">
                            
<a href="#modal2" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal2">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='119'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='119'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-10'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>118</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>7</td>
                                                                                                                                        <td>2022-01-10</td>
                                                <td class="zEdit">
                            
<a href="#modal3" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal3">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='118'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='118'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>7</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-10'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>117</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2022-01-09</td>
                                                <td class="zEdit">
                            
<a href="#modal4" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal4">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='117'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='117'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-09'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>116</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2022-01-07</td>
                                                <td class="zEdit">
                            
<a href="#modal5" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal5">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='116'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='116'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-07'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>115</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>9</td>
                                                                                                                                        <td>2022-01-06</td>
                                                <td class="zEdit">
                            
<a href="#modal6" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal6">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='115'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='115'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>9</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-06'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>114</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2022-01-05</td>
                                                <td class="zEdit">
                            
<a href="#modal7" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal7">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='114'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='114'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-05'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>113</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>2</td>
                                                                                                                                        <td>2022-01-03</td>
                                                <td class="zEdit">
                            
<a href="#modal8" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal8">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='113'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='113'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>2</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-03'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>112</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2022-01-02</td>
                                                <td class="zEdit">
                            
<a href="#modal9" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal9">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='112'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='112'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-02'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>111</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2022-01-01</td>
                                                <td class="zEdit">
                            
<a href="#modal10" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal10">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='111'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='111'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-01'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>110</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>3</td>
                                                                                                                                        <td>2022-01-01</td>
                                                <td class="zEdit">
                            
<a href="#modal11" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal11">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='110'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='110'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>3</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-01'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>109</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>2</td>
                                                                                                                                        <td>2021-12-30</td>
                                                <td class="zEdit">
                            
<a href="#modal12" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal12">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='109'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='109'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>2</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-30'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>107</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>16</td>
                                                                                                                                        <td>2021-12-30</td>
                                                <td class="zEdit">
                            
<a href="#modal13" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal13">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='107'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='107'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>16</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-30'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>106</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>4</td>
                                                                                                                                        <td>2021-12-28</td>
                                                <td class="zEdit">
                            
<a href="#modal14" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal14">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='106'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='106'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>4</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-28'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>105</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-12-27</td>
                                                <td class="zEdit">
                            
<a href="#modal15" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal15">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='105'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='105'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-27'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>104</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>44</td>
                                                                                                                                        <td>2021-12-26</td>
                                                <td class="zEdit">
                            
<a href="#modal16" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal16">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='104'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='104'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>44</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-26'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>103</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>9</td>
                                                                                                                                        <td>2021-12-25</td>
                                                <td class="zEdit">
                            
<a href="#modal17" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal17">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='103'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='103'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>9</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-25'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>102</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>2</td>
                                                                                                                                        <td>2021-12-23</td>
                                                <td class="zEdit">
                            
<a href="#modal18" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal18">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='102'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='102'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>2</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-23'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>101</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-12-21</td>
                                                <td class="zEdit">
                            
<a href="#modal19" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal19">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='101'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='101'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-21'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>100</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-12-20</td>
                                                <td class="zEdit">
                            
<a href="#modal20" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal20">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='100'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='100'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-20'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>99</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>5</td>
                                                                                                                                        <td>2021-12-17</td>
                                                <td class="zEdit">
                            
<a href="#modal21" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal21">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='99'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='99'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>5</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-17'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>98</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-12-16</td>
                                                <td class="zEdit">
                            
<a href="#modal22" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal22">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='98'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='98'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-16'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>97</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-12-12</td>
                                                <td class="zEdit">
                            
<a href="#modal23" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal23">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='97'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='97'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-12'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>96</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>45</td>
                                                                                                                                        <td>2021-12-10</td>
                                                <td class="zEdit">
                            
<a href="#modal24" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal24">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='96'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='96'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>45</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-10'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>95</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>71</td>
                                                                                                                                        <td>2021-12-07</td>
                                                <td class="zEdit">
                            
<a href="#modal25" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal25">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='95'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='95'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>71</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-07'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>94</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>14</td>
                                                                                                                                        <td>2021-12-06</td>
                                                <td class="zEdit">
                            
<a href="#modal26" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal26">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='94'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='94'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>14</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-06'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>93</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>7</td>
                                                                                                                                        <td>2021-12-05</td>
                                                <td class="zEdit">
                            
<a href="#modal27" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal27">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='93'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='93'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>7</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-05'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>92</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>8</td>
                                                                                                                                        <td>2021-12-03</td>
                                                <td class="zEdit">
                            
<a href="#modal28" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal28">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='92'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='92'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>8</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-03'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>91</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>6</td>
                                                                                                                                        <td>2021-12-03</td>
                                                <td class="zEdit">
                            
<a href="#modal29" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal29">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='91'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='91'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>6</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-03'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>90</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>6</td>
                                                                                                                                        <td>2021-12-02</td>
                                                <td class="zEdit">
                            
<a href="#modal30" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal30">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='90'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='90'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>6</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-02'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>88</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-12-01</td>
                                                <td class="zEdit">
                            
<a href="#modal31" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal31">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='88'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='88'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-01'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>87</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>7</td>
                                                                                                                                        <td>2021-12-01</td>
                                                <td class="zEdit">
                            
<a href="#modal32" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal32">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='87'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='87'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>7</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-12-01'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>86</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>18</td>
                                                                                                                                        <td>2021-11-30</td>
                                                <td class="zEdit">
                            
<a href="#modal33" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal33">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='86'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='86'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>18</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-30'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>85</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>5</td>
                                                                                                                                        <td>2021-11-29</td>
                                                <td class="zEdit">
                            
<a href="#modal34" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal34">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='85'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='85'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>5</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-29'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>84</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-11-26</td>
                                                <td class="zEdit">
                            
<a href="#modal35" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal35">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='84'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='84'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-26'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>82</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>2</td>
                                                                                                                                        <td>2021-11-25</td>
                                                <td class="zEdit">
                            
<a href="#modal36" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal36">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='82'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='82'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>2</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-25'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>81</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>15</td>
                                                                                                                                        <td>2021-11-25</td>
                                                <td class="zEdit">
                            
<a href="#modal37" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal37">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='81'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='81'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>15</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-25'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>79</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>6</td>
                                                                                                                                        <td>2021-11-23</td>
                                                <td class="zEdit">
                            
<a href="#modal38" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal38">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='79'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='79'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>6</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-23'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>78</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>18</td>
                                                                                                                                        <td>2021-11-23</td>
                                                <td class="zEdit">
                            
<a href="#modal39" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal39">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='78'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='78'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>18</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-23'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>77</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-11-21</td>
                                                <td class="zEdit">
                            
<a href="#modal40" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal40">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='77'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='77'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-21'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>76</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>37</td>
                                                                                                                                        <td>2021-11-21</td>
                                                <td class="zEdit">
                            
<a href="#modal41" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal41">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='76'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='76'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>37</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-21'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>75</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>17</td>
                                                                                                                                        <td>2021-11-16</td>
                                                <td class="zEdit">
                            
<a href="#modal42" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal42">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='75'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='75'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>17</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-16'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>74</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-11-15</td>
                                                <td class="zEdit">
                            
<a href="#modal43" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal43">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='74'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='74'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-15'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>72</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-11-12</td>
                                                <td class="zEdit">
                            
<a href="#modal44" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal44">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='72'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='72'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-12'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>71</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>55</td>
                                                                                                                                        <td>2021-11-12</td>
                                                <td class="zEdit">
                            
<a href="#modal45" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal45">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='71'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='71'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>55</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-12'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>69</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>12</td>
                                                                                                                                        <td>2021-11-09</td>
                                                <td class="zEdit">
                            
<a href="#modal46" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal46">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='69'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='69'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>12</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-09'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>68</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>21</td>
                                                                                                                                        <td>2021-11-09</td>
                                                <td class="zEdit">
                            
<a href="#modal47" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal47">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='68'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='68'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>21</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-09'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>67</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-11-08</td>
                                                <td class="zEdit">
                            
<a href="#modal48" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal48">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='67'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='67'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-08'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>66</td>
                                                                                                                                        <td>1002</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-11-08</td>
                                                <td class="zEdit">
                            
<a href="#modal49" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal49">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='66'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='66'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1002'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-08'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>65</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>6</td>
                                                                                                                                        <td>2021-11-06</td>
                                                <td class="zEdit">
                            
<a href="#modal50" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal50">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='65'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='65'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>6</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-06'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>64</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>2</td>
                                                                                                                                        <td>2021-11-02</td>
                                                <td class="zEdit">
                            
<a href="#modal51" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal51">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='64'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='64'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>2</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-11-02'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>63</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2021-10-12</td>
                                                <td class="zEdit">
                            
<a href="#modal52" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal52">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='63'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='63'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-10-12'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>62</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>6</td>
                                                                                                                                        <td>2021-10-07</td>
                                                <td class="zEdit">
                            
<a href="#modal53" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal53">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='62'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='62'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>6</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2021-10-07'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
                    </tr>
                                    <tr>
                                                                                                                                                                                                                            <td>122</td>
                                                                                                                                        <td>1001</td>
                                                                                                                                        <td>1</td>
                                                                                                                                        <td>2022-01-22</td>
                                                <td class="zEdit">
                            
<a href="#modal54" class="zButton zHov-zShadow5 primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal54">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zViewsPage">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_views_page'><input type='text' name='keyValue' value='122'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_views_page'>
                                        id_views_page
                                    </label>
                                    
                                        <input type='text' name='id_views_page' class='top-0 bottom-0 pad-10' value='122'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='value'>
                                        value
                                    </label>
                                    
                                        <textarea name='value' class='top-0 bottom-0 pad-10' style='min-height: 200px'>1</textarea>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='date'>
                                        date
                                    </label>
                                    
                                        <input type='text' name='date' class='top-0 bottom-0 pad-10' value='2022-01-22'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Kaydet</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
                        </td>
                        <td class="zDelete"></td>
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
        <p><span style="color: #dc3545;"><i class="far fa-heart"></i></span> version <b>0.2.3</b></p>
    </div>
</footer>
    </div>

    <div id="zFooter">
        

    <!-- toastify -->
    <script src="http://localhost/ultimate-z/_scripts/toastify/toastify.js"></script>

    <!-- simple-datatables -->
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
    function zTable() {
        // create simple datatables
        window.zTables = [];
        var tables = document.querySelectorAll(".zTable");
        tables.forEach((item, i) => {
            var jItem = $(item);
            var columns = jItem.attr("no_sort") ? { select: jItem.attr("no_sort").split("-"), sortable: false} : {};
            var dataTable = new simpleDatatables.DataTable(item, {
                columns: [columns]
            });
            dataTable.on("datatable.page", function(page) {
                jItem.find("a").click(magicLinks);
            });
            dataTable.on("datatable.sort", function(column, direction) {
                jItem.find("a").click(magicLinks);
            });
            window.zTables.push(dataTable);
        });
    }
    </script>
    <script>
    $(window).on("load", function () {
        zTable();
        zDetect();
        // do we have extra javascript function to be run on the new page?
        // let's run it if we do, but we need to check if we have a function on the page at all.
        var zPageJSS = [];

        for (var x in window) {
            if (typeof window[x] === "function" && x.indexOf("zPageJS") === 0) {
                zPageJSS.push(x);
            }
        }
        zPageJSS.forEach(function(item) {
            window[item]();
        });
    });
    </script>
    </div>

    <div id="zBottom">
        
        
    <script>
        function submitForm() {
            $(".zForm").submit(function(e) {
                e.preventDefault();
                var post_url = $(this).attr("action");
                var post_data = $(this).serialize();

                var json = $(this).serializeArray();
                var final = {};
                $.map(json, function(n, i){
                    final[n["name"]] = n["value"];
                });

                console.log(final);

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000
                        }).showToast();
                    },
                    error: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000,
                            backgroundColor: "#f3616d",
                        }).showToast();
                    },
                });
            });
        }
        function zPageJS() {
            submitForm();
            window.zTables.forEach((item, i) => {
                item.on("datatable.page", function(page) {
                    submitForm();
                });
                item.on("datatable.sort", function(column, direction) {
                    submitForm();
                });
            });
        }
    </script>

    </div>
</body>
</html>
<?php }
}
