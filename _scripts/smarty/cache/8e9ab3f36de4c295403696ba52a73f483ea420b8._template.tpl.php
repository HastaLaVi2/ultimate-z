<?php
/* Smarty version 3.1.39, created on 2021-10-04 19:16:52
  from '/Users/kerimcanayaz/Sites/donmezoglu/_admin/profile/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b5324a29470_54012294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '304081d1b78ce4b43ff498658030df0efc9ba2cc' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/profile/_template.tpl',
      1 => 1633374471,
      2 => 'file',
    ),
    'acbd76f6876cdbaa570d77b5b6d304b7f17c9b1c' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/_main.tpl',
      1 => 1632935496,
      2 => 'file',
    ),
    '40f7aff480493f329007abbc66b6e4ccccaa0f5f' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_holders/head.tpl',
      1 => 1633363618,
      2 => 'file',
    ),
    'a0ca51565637ae48cc370c75311b1dee663fbaa4' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/_partials/loading.tpl',
      1 => 1633374762,
      2 => 'file',
    ),
    'b4f50aaf535f7bcf47da920244f18dd903100408' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/_partials/sidebar.tpl',
      1 => 1631451975,
      2 => 'file',
    ),
    'a6a4e335ff5f778425be51c54c6f4681ff9f8a2a' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/_partials/logo.tpl',
      1 => 1626937377,
      2 => 'file',
    ),
    'f44ad6e5c3d0ff53ddc7942e2334e03b7eb56289' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/_partials/pageHeader.tpl',
      1 => 1633373917,
      2 => 'file',
    ),
    '3bf2110a91f5606040f1595ba75338397b12aa24' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/_partials/footer.tpl',
      1 => 1633364388,
      2 => 'file',
    ),
    '444db15c668b0eed8f7d019366d5644a3cf804c8' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_holders/footer.tpl',
      1 => 1630787909,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_615b5324a29470_54012294 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Profil | zAdmin</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" href="http://localhost/donmezoglu/_admin/profile/" />
<link rel="alternate" hreflang="en" href="http://localhost/donmezoglu/en/_admin/profileindex.php?id_user=1" />
<link rel="alternate" hreflang="tr" href="http://localhost/donmezoglu/tr/_admin/profileindex.php?id_user=1" />

<!-- font libraries -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- jquery -->
<script src="http://localhost/donmezoglu/_scripts/jquery/jquery-3.6.0.min.js"></script>
<script src="http://localhost/donmezoglu/_scripts/jquery/jquery.lazy.min.js"></script>
<script src="http://localhost/donmezoglu/_scripts/jquery/jquery.lazy.plugins.min.js"></script>

<!-- font-awesome -->
<link rel="stylesheet" href="http://localhost/donmezoglu/_scripts/fontawesome/css/all.min.css"/>

<!-- the ultimate z -->
<link rel="stylesheet" type="text/css" href="http://localhost/donmezoglu/_scripts/ultimate-z/z.min.css"/>
<script src="http://localhost/donmezoglu/_scripts/ultimate-z/z.min.js"></script>

<!-- owl.carousel -->
<link href="http://localhost/donmezoglu/_scripts/owl.carousel/owl.carousel.css" rel="stylesheet"/>
<link href="http://localhost/donmezoglu/_scripts/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
<script src="http://localhost/donmezoglu/_scripts/owl.carousel/owl.carousel.min.js"></script>

<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="http://localhost/donmezoglu/_favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://localhost/donmezoglu/_favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="http://localhost/donmezoglu/_favicon/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://localhost/donmezoglu/_favicon/favicon-16x16.png">
<link rel="manifest" href="http://localhost/donmezoglu/_favicon/site.webmanifest">
<link rel="mask-icon" href="http://localhost/donmezoglu/_favicon/safari-pinned-tab.svg" color="#2d89ef">
<link rel="shortcut icon" href="http://localhost/donmezoglu/_favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="http://localhost/donmezoglu/_favicon/mstile-144x144.png">
<meta name="msapplication-config" content="http://localhost/donmezoglu/_favicon/browserconfig.xml">
<meta name="theme-color" content="#2d89ef">


    <!-- dragula -->
    <link rel="stylesheet" href="http://localhost/donmezoglu/_scripts/dragula/dragula.min.css"/>
    <script src="http://localhost/donmezoglu/_scripts/dragula/dragula.min.js"></script>

    <!-- toastify -->
    <link rel="stylesheet" href="http://localhost/donmezoglu/_scripts/toastify/toastify.css">

    <!-- imagetracer -->
    <script src="http://localhost/donmezoglu/_scripts/imagetracer/imagetracer_v1.2.6.js"></script>

    <!-- html2canvas -->
    <script src="http://localhost/donmezoglu/_scripts/html2canvas/html2canvas.min.js"></script>

    <!-- admin javascript functions -->
    <script src="http://localhost/donmezoglu/_scripts/admin.js"></script>
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

<div id="zLoad0_1" class="floatingSpace mortalW-8 widthAll heightAll fixed font-24 index-100"></div>
<div id="zLoad0_2" class="floatingSpace back7 widthAll heightAll fixed font-24 index-101">
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

    <div id="zHead"></div>

    
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
                    <a href="http://localhost/donmezoglu/_admin" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
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
                            <a href="http://localhost/donmezoglu/_admin/layouts/design" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Tasarım
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/donmezoglu/_admin/layouts/pages" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Sayfalar
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/donmezoglu/_admin/layouts/categories" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Kategoriler
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/donmezoglu/_admin/media" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-photo-video text6"></i>
                        <span class="padL-15">Medya</span>
                    </a>
                </li>

                                <li class="text4 padLR-1rem weight-600 padT-30">Seçenekler</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/donmezoglu/_admin/preferences" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-cog text6"></i>
                        <span class="padL-15">Seçenekler</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/donmezoglu/_admin/users" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-users text6"></i>
                        <span class="padL-15">Kullanıcılar</span>
                    </a>
                </li>

                <li class="text4 padLR-1rem weight-600 padT-30">İleri Düzey</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/donmezoglu/_admin/advanced/database" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-server text6"></i>
                        <span class="padL-15">Veritabanı</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/donmezoglu/_admin/advanced/run-queries" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
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
    <a href="http://localhost/donmezoglu/" target="_blank" class="inLine colTop pointThis right-30 rightText index-10">
        <div class="no zMob768-displayNone">
            <div class="inLine verMid font-15">
                Görüntüle
                <div class="font-12">Dönmezoğlu Bilişim</div>
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
            <img src="http://localhost/donmezoglu/_media/user/profile/4.jpg" class="pagePic widthAll rad-half">
        </div>
    </div>
    <div class="zShow-userMenu displayNone">
        <div class="floatingTheRight whiteBack rad-15 pad-20 index-10 width-250 zShadow font-16">
            <div class="font-14 weight-700 gray3 bottom-10">Merhaba, Kerimcan!</div>
            <a href="http://localhost/donmezoglu/" target="_blank" class="displayNone zMob768-no">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoT boldMin-1">
                    <div class="inLine verMid">
                        <i class="fas fa-home padR-10"></i>
                    </div>
                    <div class="inLine verMid font-15">
                        Görüntüle
                        <div class="font-12">Dönmezoğlu Bilişim</div>
                    </div>
                </div>
            </a>
            <a href="http://localhost/donmezoglu/_admin/profile/">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3">
                    <i class="fas fa-id-badge padR-10"></i>
                    Profil
                </div>
            </a>
            <a href="http://localhost/donmezoglu/_admin/logout/" class="forceLink">
                <div class="left--20 right--20 bottom--20 rad-b-15 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoB boldMin-1">
                    <i class="fas fa-sign-out-alt padR-10"></i>
                    Çıkış Yap
                </div>
            </a>
        </div>
    </div>
</nav>
        

        <div class="font-24 text4 index-20 fixed" zMob-1200="padT-30" id="zPageTitle">
            <h3 class="boldText top-10">Profil</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            
            
        <div class="col-3 colTop padR-10 zMob-padB-20">
                <div class="whiteBack rad-15 pad-20 font-16 ">
            <h4 class="font-19 top-0 text4 boldText">Profili Değiştir</h4>
            <form id="zUser-change-avatar-form" class="zForm" method="POST" role="form" action="http://localhost/donmezoglu/_admin/profile/index.php?id_user=1">
                
                <input name="id_user" id="id_user" type="text" value="1" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-avatar" style="display:none">
                <div class="font0">
                    <div class="zCol-6 zMob990-zCol-4 padR-2">
                        <input type="radio" name="avatar[]" id="avatar1" class="avatar-input displayNone" value="1" >
                        <label for="avatar1" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="http://localhost/donmezoglu/_media/user/profile/1.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar2" class="avatar-input displayNone" value="2" >
                        <label for="avatar2" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="http://localhost/donmezoglu/_media/user/profile/2.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2 zMob990-padL-2">
                        <input type="radio" name="avatar[]" id="avatar3" class="avatar-input displayNone" value="3" >
                        <label for="avatar3" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="http://localhost/donmezoglu/_media/user/profile/3.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padR-2">
                        <input type="radio" name="avatar[]" id="avatar4" class="avatar-input displayNone" value="4" checked>
                        <label for="avatar4" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="http://localhost/donmezoglu/_media/user/profile/4.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar5" class="avatar-input displayNone" value="5" >
                        <label for="avatar5" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="http://localhost/donmezoglu/_media/user/profile/5.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2">
                        <input type="radio" name="avatar[]" id="avatar6" class="avatar-input displayNone" value="6" >
                        <label for="avatar6" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="http://localhost/donmezoglu/_media/user/profile/6.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2">
                        <input type="radio" name="avatar[]" id="avatar7" class="avatar-input displayNone" value="7" >
                        <label for="avatar7" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="http://localhost/donmezoglu/_media/user/profile/7.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar8" class="avatar-input displayNone" value="8" >
                        <label for="avatar8" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="http://localhost/donmezoglu/_media/user/profile/8.jpg" style="float:left">
                        </label>
                    </div>
                    <script>
                        $(".avatar-input + label").css("cursor", "pointer");
                        $(".avatar-input:checked + label").css("border", "5px solid #3950a2");
                        $(".avatar-input:checked + label img").css("border", "2px solid #dce7f1");
                        $('input[type=radio]').change(function() {
                            $(".avatar-input + label").css("border", "none");
                            $(".avatar-input + label img").css("border", "none");
                            $(".avatar-input:checked + label").css("border", "5px solid #3950a2");
                            $(".avatar-input:checked + label img").css("border", "2px solid #dce7f1");
                        });
                    </script>
                </div>
                <button class="zButton primary widthAll zShadow">Tamamla</button>
            </form>
        </div>
    </div>
    <div class="col-9 padL-10 zMob-padB-20">
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText">Dili Değiştir</h4>
            <form id="zUser-change-language-form" class="zForm" method="POST" role="form" action="http://localhost/donmezoglu/_admin/profile/index.php?id_user=1">
                
                <input name="id_user" id="id_user" type="text" value="1" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-language" style="display:none">
                <div class="zGroup bottom-20">
                    <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="id_lang">
                        Bir Dil Seç
                    </label>
                    <select class="pad-10 top-0 bottom-0" id="id_lang" name="id_lang">
                        <option disabled>Seç...</option>
                        <option value='1'>English</option><option value='2'selected>Türkçe</option>
                    </select>
                </div>
                <button class="zButton primary widthAll zShadow">Tamamla</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText">Epostayı Değiştir</h4>
            <form id="zUser-change-email-form" class="zForm" method="POST" role="form" action="http://localhost/donmezoglu/_admin/profile/index.php?id_user=1">
                
                <input name="id_user" id="id_user" type="text" value="1" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-email" style="display:none">
                <div class="bottom-20">
                    <input name="email_new" id="email_new" type="email" class="padL-45" placeholder="Eposta" value="kerimcanayaz@gmail.com">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-envelope"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow">Tamamla</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText">Adı Değiştir</h4>
            <form id="zUser-change-name-form" class="zForm" method="POST" role="form" action="http://localhost/donmezoglu/_admin/profile/index.php?id_user=1">
                
                <input name="id_user" id="id_user" type="text" value="1" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-name" style="display:none">
                <div class="bottom-20">
                    <input name="name_new" id="name_new" type="text" class="padL-45" placeholder="Ad">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-user"></i>
                    </div>
                </div>
                <div class="bottom-20">
                    <input name="surname_new" id="surname_new" type="text" class="padL-45" placeholder="Soyadı">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-user"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow">Tamamla</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText">Şifre Değiştir</h4>
            <form id="zUser-change-password-form" class="zForm" method="POST" role="form" action="http://localhost/donmezoglu/_admin/profile/index.php?id_user=1">
                
                <input name="id_user" id="id_user" type="text" value="1" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-password" style="display:none">
                <div class="bottom-20">
                    <input name="password" id="password" type="password" class="padL-45" placeholder="Eski Şifre">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                </div>
                <div class="bottom-20">
                    <input name="password_new" id="password_new" type="password" class="padL-45" placeholder="Yeni Şifre">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow">Tamamla</button>
            </form>
        </div>
    </div>

        </div>

        
<footer class="font-16 text6 padT-40 bottom-50">
    <div class="inLeft">
        <p>2021 &copy; ultimate Z</p>
    </div>
    <div class="inRight">
        <p><span style="color: #dc3545;"><i class="far fa-heart"></i></span> version <b>0.1.2</b></p>
    </div>
</footer>
    </div>

    <div id="zBottom">
        

    <!-- toastify -->
    <script src="http://localhost/donmezoglu/_scripts/toastify/toastify.js"></script>
        
        
    <script>
        function zPageJS() {
            // submit form functions
            $(".zForm").submit(function(e) {
                e.preventDefault();

                var form = $(this).clone();
                if (form.find("select")) {
                    form.find("select").each(function() {
                        var name = $(this).attr("name");
                        var value = $("#"+name+" option").filter(":selected").val();
                        $(this).val(value);
                    });
                }
                var post_url = form.attr("action");
                var post_data = form.serialize();
                var form_type = $(this).find("#form_type").val();

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                                                if (form_type == "change-name" || form_type == "change-avatar") {
                            $("#zUser").load(window.location.href + " #zUser > *");
                        }
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

        document.addEventListener("DOMContentLoaded", function(event) {
            zPageJS();
        });
    </script>

    </div>
</body>
</html>
<?php }
}
