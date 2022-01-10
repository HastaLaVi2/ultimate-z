<?php
/* Smarty version 3.1.40, created on 2022-01-10 20:10:58
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/edit/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dc92d2c01b10_17970076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58dbafc348f66d6fbb9f4aa21f93ea96fff54b8e' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/edit/_template.tpl',
      1 => 1641845245,
      2 => 'file',
    ),
    '2de67654463ebbed118f4a9466ca3d8b72fb2cbd' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
    '0538971dc732ac65971b8a4e8622951228ba23c9' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl',
      1 => 1640422377,
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
    'facad15687820393eb46a3b9f58432dea0c53d77' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/holderEdit.tpl',
      1 => 1641843839,
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
      1 => 1630787909,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_61dc92d2c01b10_17970076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Sayfayı Düzenle | zAdmin</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" href="http://localhost/ultimate-z/_admin/layouts/pages/edit/" />
<link rel="alternate" hreflang="en" href="http://localhost/ultimate-z/en/_admin/layouts/pages/editindex.php?id_page=1001" />
<link rel="alternate" hreflang="tr" href="http://localhost/ultimate-z/tr/_admin/layouts/pages/editindex.php?id_page=1001" />

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
<script>window.zAdmin = true</script><script src="http://localhost/ultimate-z/_scripts/spa.js"></script>

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
    <!-- summernote -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/summernote/summernote-lite.min.css">

    <!-- filepond -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/filepond/filepond.css">
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/filepond/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.css">
    <style>
    .hideForAddTop .hideForAdd { display: none;}
    .note-btn { font-size: 12px !important; height: auto !important; padding: 8px !important;}
    </style>
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
                    <a href="#" class="pad-13 rad-10 blockThis zTogDown-side1 back5 color-white">
                        <i class="fas fa-layer-group whiteText"></i>
                        <span class="padL-15">Düzen</span>
                        <i class="fas fa-chevron-down inRight top-3 whiteText"></i>
                    </a>
                    <ul class="zShow-side1 font-13 padL-2rem left-2rem toggled">
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/design" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Tasarım
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/pages/index.php" class="weight-700 text5">
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
                    <a href="http://localhost/ultimate-z/_admin/advanced/database" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-server text6"></i>
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
            <h3 class="boldText top-10">Sayfayı Düzenle</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            
            
    <div class="col-12">
        <nav>
            <ol class="cleanList">
                <li><a href="http://localhost/ultimate-z/_admin/layouts/pages/index.php" class="inLine font-16">
                    <i class="fas fa-caret-left"></i>
                    Sayfalar
                </a></li>
            </ol>
        </nav>

        <div class="whiteBack rad-15 pad-20 font-16">
            <form id="zPage-edit-form" class="zForm" method="POST" role="form" enctype="multipart/form-data" action="http://localhost/ultimate-z/_admin/layouts/pages/edit/index.php?id_page=1001">
                
                <div>
                    <div class="inLeft index-10">
                        <h4 class="font-19 top-0 bottom-0 text6 boldText">Bu sayfayı düzenliyorsunuz:</h4>
                        <h4 class="font-19 top-0 text4 boldText">
                            Anasayfa
                            <span class="font-14"><a href="http://localhost/ultimate-z/tr/" target="_blank">[Sayfayı Görüntüle]</a></span>
                        </h4>
                    </div>
                    <div class="rightText padB-15">
                        <div class="inLine width-350 zMob-widthAll">
                            <div class="zGroup bottom-20">
                                <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="id_lang">
                                    Bir Dil Seç
                                </label>
                                <select class="zSelect pad-10 top-0 bottom-0" id="change_lang" name="change_lang">
                                    <option disabled>Seç...</option>
                                    <option value='1'>English</option><option value='2'selected>Türkçe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div><input name="id_page" id="id_page" type="text" value="1001" style="display:none"></div>
                <div class="col-8 colTop padR-10 padT-10" zMob-1024="padR-0">
                    <h6 class="bottom-10 top-0 font-1em">Başlık</h6>
                    <div class="bottom-10">
                        <input name="page_url" id="page_url" type="text" class="padL-45" value="/" placeholder="Başında / ifadesi olan bir URL girin">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-file-code"></i>
                        </div>
                    </div>
                                            <div class="divFor1 divFor" style="display: none">
                            <div><input name="id_lang[1]" id="id_lang_1"
                                        type="text" value="1" style="display:none"></div>
                            <div class="bottom-10">
                                <input name="page_name[1]" id="page_name_1" type="text"
                                       class="padL-45" value="Home" placeholder="Başlık">
                                <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                        </div>
                                            <div class="divFor2 divFor" style="">
                            <div><input name="id_lang[2]" id="id_lang_2"
                                        type="text" value="2" style="display:none"></div>
                            <div class="bottom-10">
                                <input name="page_name[2]" id="page_name_2" type="text"
                                       class="padL-45" value="Anasayfa" placeholder="Başlık">
                                <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                        </div>
                                        <h6 class="bottom-10 top-0 font-1em">Meta Açıklaması</h6>
                    <p>Eğer bir meta açıklaması girmezseniz, sayfadaki ilk bulunan metin geçerli olacaktır.</p>
                                            <div class="divFor1 divFor" style="display: none">
                            <div class="bottom-10">
                                <input name="page_meta[1]" id="page_meta_1" type="text" class="padL-45" value="ultimate Z">
                                <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                    <i class="fas fa-keyboard"></i>
                                </div>
                            </div>
                        </div>
                                            <div class="divFor2 divFor" style="">
                            <div class="bottom-10">
                                <input name="page_meta[2]" id="page_meta_2" type="text" class="padL-45" value="ultimate Z">
                                <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                    <i class="fas fa-keyboard"></i>
                                </div>
                            </div>
                        </div>
                                    </div>
                <div class="col-4 colTop padL-10 padT-10" zMob-1024="padL-0">
                    <h6 class="bottom-12 top-0 font-1em">Durum</h6>
                    <div>
                        <input class="zSwitch" type="checkbox" name="page_status" id="page_status"
                        value="enabled" checked>
                        <label for="page_status">Sayfa durumu</label>
                        <div class="font-13">Sayfanın aktif olarak görüntülenip görüntülenemeyeceğini belirleyin.</div>
                    </div>
                    <h6 class="bottom-12 top-12 font-1em">Alt Sayfa</h6>
                    <div>
                        <input class="zSwitch" type="checkbox" name="not_a_subpage" id="not_a_subpage"
                        value="enabled" checked>
                        <label for="not_a_subpage">Bir alt sayfa değil.</label>
                        <div class="font-13">Eğer bu sayfanın, başka bir sayfanın alt sayfası olmasını istiyorsanız, bu tuşa basın.</div>
                    </div>
                    <select class="zSelect pad-10 top-12 bottom-20 disabledInput" id="change_subpage" name="change_subpage">
                        <option selected>Seç...</option>
                        <option value='1002'>Moda</option><option value='1003'>1001</option>
                    </select>
                    <script>
                    $("#not_a_subpage").change(function() {
                        $("#change_subpage").toggleClass("disabledInput");
                    });
                    </script>
                    <h6 class="bottom-0 top-0 font-1em">Kategori</h6>
                    <ul class="cleanList nextToEach bottom-10"><li class="padL-0"><div><input type="checkbox" id="checkbox1" name="categories[]" value="1"checked><label for="checkbox1">Menü</label></div></li></ul>
                </div>
                <h6 class="bottom-10 top-0 font-1em">Tutucular</h6>
                <div>
                    <div class="col-12 back7 bottom-20 pad-20 centerText pointThis rad-5 gray2" id="AddNewHolder">
                        Yeni Bir Tutucu Ekle
                    </div>
                    <div id="dragulaAdd" class="hideScroll col-4 colTop padR-20 zMob-padR-0 between-20 bottom-20 hideForAddTop" style="display: none">
                                                
    <div class="zDestroy-holder1 grayBack1 pad-40 zMob-pad-20 rad-5 boldMin-1" style="border-color: var(--zFormBorderColor)" data="1">
        <h6 class="bottom--10 top--10 left--10 right--10 font-1_5em thinText">
            Metin
        </h6>
        <div class="text5 font-25 floatingTheRight pad-32 zMob-pad-20 index-10 top--10 right--10 hideForAdd">
            <span class="pointThis toggleParentNext">
                <i class="fas fa-chevron-down arrows" style="display:none"></i>
                <i class="fas fa-chevron-up arrows"></i>
            </span>
            <a href="#modal1" class="zModalLink">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="padT-20 hideForAdd">
            <div class="zModal" id="modal1">
                <a class="zCancel" href="#"></a>
                <div class="zModalContent rad-15">
                    <div class="pad-20">
                        <div class="modal-header bg-primary">
                            <h5 class="top-0 bottom-0 font-18">
                                Tutucuyu Sil
                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            Bu tutucuyu silmek istediğinize emin misiniz?
                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                Kapat
                            </a>
                            <a class="zButton zHov-zShadow5 primary sweet font-16 zRemove-holder1" href="#">
                                <span>Evet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <input name="id_holder[]" type="text" value="1" class="displayNone">
            <input name="id_page_holder[]" type="text" value="" class="displayNone">
                            <div class="hiddenData displayNone">
                                                                    <textarea name="content[1][]" data-type="text">
                            
                        </textarea>
                                                                    <textarea name="content[2][]" data-type="text">
                            
                        </textarea>
                                    </div>
                                    <div class="top-20">
                        <textarea class="summernote" name="zContent[2][]"></textarea>
                    </div>
                                    </div>
    </div>
        <div class="zDestroy-holder2 grayBack1 pad-40 zMob-pad-20 rad-5 boldMin-1" style="border-color: var(--zFormBorderColor)" data="2">
        <h6 class="bottom--10 top--10 left--10 right--10 font-1_5em thinText">
            Görsel
        </h6>
        <div class="text5 font-25 floatingTheRight pad-32 zMob-pad-20 index-10 top--10 right--10 hideForAdd">
            <span class="pointThis toggleParentNext">
                <i class="fas fa-chevron-down arrows" style="display:none"></i>
                <i class="fas fa-chevron-up arrows"></i>
            </span>
            <a href="#modal2" class="zModalLink">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="padT-20 hideForAdd">
            <div class="zModal" id="modal2">
                <a class="zCancel" href="#"></a>
                <div class="zModalContent rad-15">
                    <div class="pad-20">
                        <div class="modal-header bg-primary">
                            <h5 class="top-0 bottom-0 font-18">
                                Tutucuyu Sil
                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            Bu tutucuyu silmek istediğinize emin misiniz?
                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                Kapat
                            </a>
                            <a class="zButton zHov-zShadow5 primary sweet font-16 zRemove-holder2" href="#">
                                <span>Evet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <input name="id_holder[]" type="text" value="2" class="displayNone">
            <input name="id_page_holder[]" type="text" value="" class="displayNone">
                            <div class="hiddenData displayNone">
                                                                    <textarea name="images[1][]" data-type="images">
                            
                        </textarea>
                                                                    <textarea name="images[2][]" data-type="images">
                            
                        </textarea>
                                    </div>
                                    <div class="top-20">
                        <div class="zTog-imagesFor2 pad-10 rad-5 pointThis" style="background:#f0efee">
                            <div class="zShow-imagesFor2">Medya yüklemek için tıklayın.</div>
                            <div class="zShow-imagesFor2 displayNone">Yükleme ekranını gizle.</div>
                        </div>
                        <div class="displayNone zShow-imagesFor2 _top--5">
                            <div class="floatingSpace widthAll height-10 boldMin-1 boldSoG2 boldNoL boldNoR boldNoB index-10" style="background:#f0efee"></div>
                            <input class="displayNone" value="" data-multi="true">
                            <input type="file" class="filepond">
                        </div>
                    </div>
                                    </div>
    </div>
        <div class="zDestroy-holder3 grayBack1 pad-40 zMob-pad-20 rad-5 boldMin-1" style="border-color: var(--zFormBorderColor)" data="3">
        <h6 class="bottom--10 top--10 left--10 right--10 font-1_5em thinText">
            Kategori Listesi
        </h6>
        <div class="text5 font-25 floatingTheRight pad-32 zMob-pad-20 index-10 top--10 right--10 hideForAdd">
            <span class="pointThis toggleParentNext">
                <i class="fas fa-chevron-down arrows" style="display:none"></i>
                <i class="fas fa-chevron-up arrows"></i>
            </span>
            <a href="#modal3" class="zModalLink">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="padT-20 hideForAdd">
            <div class="zModal" id="modal3">
                <a class="zCancel" href="#"></a>
                <div class="zModalContent rad-15">
                    <div class="pad-20">
                        <div class="modal-header bg-primary">
                            <h5 class="top-0 bottom-0 font-18">
                                Tutucuyu Sil
                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            Bu tutucuyu silmek istediğinize emin misiniz?
                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                Kapat
                            </a>
                            <a class="zButton zHov-zShadow5 primary sweet font-16 zRemove-holder3" href="#">
                                <span>Evet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <input name="id_holder[]" type="text" value="3" class="displayNone">
            <input name="id_page_holder[]" type="text" value="" class="displayNone">
                            <div class="hiddenData displayNone">
                                                                    <textarea name="content[1][]" data-type="categorylist">
                            
                        </textarea>
                                                                    <textarea name="content[2][]" data-type="categorylist">
                            
                        </textarea>
                                    </div>
                                                        <div class="top-20">
                        <select class="pad-10 top-0 bottom-0 zCategory" name="zContent[2][]" style="background-color: white">
                            <option disabled>Seç...</option>
                                                            <option value="1" >Menü</option>
                                                    </select>
                    </div>
                                    </div>
    </div>
        <div class="zDestroy-holder4 grayBack1 pad-40 zMob-pad-20 rad-5 boldMin-1" style="border-color: var(--zFormBorderColor)" data="4">
        <h6 class="bottom--10 top--10 left--10 right--10 font-1_5em thinText">
            Etiket
        </h6>
        <div class="text5 font-25 floatingTheRight pad-32 zMob-pad-20 index-10 top--10 right--10 hideForAdd">
            <span class="pointThis toggleParentNext">
                <i class="fas fa-chevron-down arrows" style="display:none"></i>
                <i class="fas fa-chevron-up arrows"></i>
            </span>
            <a href="#modal4" class="zModalLink">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="padT-20 hideForAdd">
            <div class="zModal" id="modal4">
                <a class="zCancel" href="#"></a>
                <div class="zModalContent rad-15">
                    <div class="pad-20">
                        <div class="modal-header bg-primary">
                            <h5 class="top-0 bottom-0 font-18">
                                Tutucuyu Sil
                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            Bu tutucuyu silmek istediğinize emin misiniz?
                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                Kapat
                            </a>
                            <a class="zButton zHov-zShadow5 primary sweet font-16 zRemove-holder4" href="#">
                                <span>Evet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <input name="id_holder[]" type="text" value="4" class="displayNone">
            <input name="id_page_holder[]" type="text" value="" class="displayNone">
                            <div class="hiddenData displayNone">
                                                                    <textarea name="content[1][]" data-type="input">
                            
                        </textarea>
                                                                    <textarea name="content[2][]" data-type="input">
                            
                        </textarea>
                                    </div>
                                    <div class="top-20">
                        <input name="zContent[2][]" type="text" class="back-white page-title padL-45" value="">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-square"></i>
                        </div>
                    </div>
                                    </div>
    </div>
        <div class="zDestroy-holder5 grayBack1 pad-40 zMob-pad-20 rad-5 boldMin-1" style="border-color: var(--zFormBorderColor)" data="5">
        <h6 class="bottom--10 top--10 left--10 right--10 font-1_5em thinText">
            Slayt
        </h6>
        <div class="text5 font-25 floatingTheRight pad-32 zMob-pad-20 index-10 top--10 right--10 hideForAdd">
            <span class="pointThis toggleParentNext">
                <i class="fas fa-chevron-down arrows" style="display:none"></i>
                <i class="fas fa-chevron-up arrows"></i>
            </span>
            <a href="#modal5" class="zModalLink">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="padT-20 hideForAdd">
            <div class="zModal" id="modal5">
                <a class="zCancel" href="#"></a>
                <div class="zModalContent rad-15">
                    <div class="pad-20">
                        <div class="modal-header bg-primary">
                            <h5 class="top-0 bottom-0 font-18">
                                Tutucuyu Sil
                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            Bu tutucuyu silmek istediğinize emin misiniz?
                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                Kapat
                            </a>
                            <a class="zButton zHov-zShadow5 primary sweet font-16 zRemove-holder5" href="#">
                                <span>Evet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <input name="id_holder[]" type="text" value="5" class="displayNone">
            <input name="id_page_holder[]" type="text" value="" class="displayNone">
                            <div class="hiddenData displayNone">
                                                                    <textarea name="content[1][]" data-type="input">
                            
                        </textarea>
                                                                    <textarea name="content[2][]" data-type="input">
                            
                        </textarea>
                                    </div>
                                    <div class="top-20">
                        <input name="zContent[2][]" type="text" class="back-white page-title padL-45" value="">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-square"></i>
                        </div>
                    </div>
                                            <div class="hiddenData displayNone">
                                                                    <textarea name="images[1][]" data-type="image">
                            
                        </textarea>
                                                                    <textarea name="images[2][]" data-type="image">
                            
                        </textarea>
                                    </div>
                                    <div class="top-20">
                        <input class="displayNone" value="">
                        <input type="file" class="filepond">
                    </div>
                                            <div class="hiddenData displayNone">
                                                                    <textarea name="content[1][]" data-type="text">
                            
                        </textarea>
                                                                    <textarea name="content[2][]" data-type="text">
                            
                        </textarea>
                                    </div>
                                    <div class="top-20">
                        <textarea class="summernote" name="zContent[2][]"></textarea>
                    </div>
                                    </div>
    </div>
                        </div>
                    <div id="dragula" class="hideScroll hideRest col-12 colTop between-20">
                                                                            <div class="dragula pad-20 padT-40 back7 rad-5 between-20">
                                                                
    <div class="zDestroy-holder6 grayBack1 pad-40 zMob-pad-20 rad-5 boldMin-1" style="border-color: var(--zFormBorderColor)" data="6">
        <h6 class="bottom--10 top--10 left--10 right--10 font-1_5em thinText">
            Etiket
        </h6>
        <div class="text5 font-25 floatingTheRight pad-32 zMob-pad-20 index-10 top--10 right--10 hideForAdd">
            <span class="pointThis toggleParentNext">
                <i class="fas fa-chevron-down arrows" style="display:none"></i>
                <i class="fas fa-chevron-up arrows"></i>
            </span>
            <a href="#modal6" class="zModalLink">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="padT-20 hideForAdd">
            <div class="zModal" id="modal6">
                <a class="zCancel" href="#"></a>
                <div class="zModalContent rad-15">
                    <div class="pad-20">
                        <div class="modal-header bg-primary">
                            <h5 class="top-0 bottom-0 font-18">
                                Tutucuyu Sil
                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            Bu tutucuyu silmek istediğinize emin misiniz?
                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                Kapat
                            </a>
                            <a class="zButton zHov-zShadow5 primary sweet font-16 zRemove-holder6" href="#">
                                <span>Evet</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <input name="id_holder[]" type="text" value="4" class="displayNone">
            <input name="id_page_holder[]" type="text" value="1" class="displayNone">
                            <div class="hiddenData displayNone">
                                                                    <textarea name="content[1][]" data-type="input">
                            welcome to the ultimate Z!
                        </textarea>
                                                                    <textarea name="content[2][]" data-type="input">
                            ultimate Z'ye hoş geldiniz!
                        </textarea>
                                    </div>
                                    <div class="top-20">
                        <input name="zContent[2][]" type="text" class="back-white page-title padL-45" value="ultimate Z&#039;ye hoş geldiniz!">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-square"></i>
                        </div>
                    </div>
                                    </div>
    </div>
                                    <div class="blockTitle floatingSpace text6 font-14 boldText top-10 left-10">
                                    Blok 1
                                </div>
                            </div>
                                            </div>
                </div>
                <div class="ButtonPos1 IWantItDownR padR-32 widthAll fixed index-10 padL-332" zMob-1200="padL-32">
                    <div class="padB-20 padLR-20 whiteBack">
                        <button class="zButton primary widthAll zShadow5">Kaydet</button>
                    </div>
                </div>
                <div class="ButtonPos2">
                    <button class="zButton primary widthAll zShadow5 top-20">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
    

<div class="zModal" id="modalForUpload">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Hata
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"></div>
                    
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                        </div>
                    </div>
    </div>
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

    <div id="zBottom">
        

    <!-- toastify -->
    <script src="http://localhost/ultimate-z/_scripts/toastify/toastify.js"></script>
        
        
    <!-- summernote -->
    <script src="http://localhost/ultimate-z/_scripts/summernote/summernote-lite.min.js"></script>
        <script src="http://localhost/ultimate-z/_scripts/summernote/lang/summernote-tr-TR.min.js"></script>
    
    <!-- filepond plugins -->
    <script src="http://localhost/ultimate-z/_scripts/filepond/filepond-plugin-file-validate-size.js"></script>
    <script src="http://localhost/ultimate-z/_scripts/filepond/filepond-plugin-file-validate-type.js"></script>
    <script src="http://localhost/ultimate-z/_scripts/filepond/filepond-plugin-file-rename.js"></script>
    <script src="http://localhost/ultimate-z/_scripts/filepond/filepond-plugin-image-preview.js"></script>
    <script src="http://localhost/ultimate-z/_scripts/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.js"></script>

    <!-- filepond -->
    <script src="http://localhost/ultimate-z/_scripts/filepond/locale/tr-TR.js"></script>
    <script src="http://localhost/ultimate-z/_scripts/filepond/filepond.js"></script>

    <script>
        function dragulaEvery() {
            var containers = $(".dragula").toArray();

            // dragula affect: copy a holder from left column to right
            dragula([document.querySelector("#dragulaAdd"), containers], {
                isContainer: function (el) {
                    return el.classList.contains("dragula");
                },
                copy: function (el, source) {
                    return source === document.querySelector("#dragulaAdd");
                },
                accepts: function (el, target) {
                    return target !== document.querySelector("#dragulaAdd");
                },
                moves: function (el, container, handle) {
                    var searchPond = $(handle).closest(".filepond");
                    var searchSummer = $(handle).closest(".note-editor");
                    if (searchPond.length || searchSummer.length || handle.nodeName == "INPUT" ||
                        handle.classList.contains("filepond") || handle.classList.contains("blockTitle")) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }).on("drag", function (el) {
                // when dragging a holder we do not want the content to be visible
                el.querySelectorAll(".hideForAdd").forEach(function(value, i) {
                    value.style.display = "none";
                });
            }).on("out", function (el, container, source) {
                // make the content visible again
                var hides = el.querySelectorAll(".hideForAdd");
                if ($(el).find(".fa-chevron-up").css("display") !== "none") {
                    hides[1].style.display = "";
                }
                hides[0].style.display = "";

                var blockTitle = $(el).parent().find(".blockTitle");
                if (blockTitle.is(":first-child")) {
                    blockTitle.remove();
                    $(el).parent().append(blockTitle);
                }

                if (source.getAttribute("id") == "dragulaAdd") {
                    el.setAttribute("update", "true");
                }
            }).on("dragend", function (el) {
                // the data attribute tells us the old modalNumber of our holder,
                // because on page load, holders on the left column has their own
                // modalNumber values, but when they are copied to the actual page,
                // we need to change it with a new modalNumber
                var data = el.getAttribute("data");

                if (el.getAttribute("update") == "true") {
                    $(el).find(".zTog-downHolder" + data).removeClass("zTog-downHolder" + data).addClass("zTog-downHolder" + modalNumber);
                    $(el).find(".zShow-downHolder" + data).removeClass("zShow-downHolder" + data).addClass("zShow-downHolder" + modalNumber);
                    $(el).find(".zTog-imagesFor" + data).removeClass("zTog-imagesFor" + data).addClass("zTog-imagesFor" + modalNumber);
                    $(el).find(".zShow-imagesFor" + data).removeClass("zShow-imagesFor" + data).addClass("zShow-imagesFor" + modalNumber);

                    // time to update the modalNumber
                    el.querySelectorAll(".zModal")[0].setAttribute("id", "modal" + modalNumber);
                    el.querySelectorAll(".zModalLink")[0].setAttribute("href", "#modal" + modalNumber);
                    el.classList.remove("zDestroy-holder"+data);
                    el.classList.add("zDestroy-holder"+modalNumber);
                    var remove = el.querySelectorAll("[class*=zRemove]")[0];
                    remove.classList.remove("zRemove-holder"+data);
                    remove.classList.add("zRemove-holder"+modalNumber);
                    remove.setAttribute("zRemove", "false");

                    // now lets increase the modalNumber value for the next arrival
                    modalNumber = Number(modalNumber) + 1;
                    el.setAttribute("update", "false");

                    toggleParentNext($(el).find(".toggleParentNext"));

                    $(el).find(".note-editor").remove();
                    summernoteStart($(el).find(".summernote"));
                }

                // functions that need a rerun after a copy
                zRemove();
                zBetween();
                zTog();
                runFilePond();
                summernoteKeyup($(el).find(".note-editable"));
                storeCat();
            });
        }

        // this function helps storing the current entered data to hidden fields
        function storingData(now) {
            // select main div for holders
            var dragula = $("#dragula");

            // the zContent-classed are always holds the visible language info,
            // so we should select them
            var storeThis = dragula.find("[name^='zContent[']");
            if (storeThis.length) {
                // "now" value entered to this function stands for current language id
                // and by defining "prev", we get the language id just before the language change
                // on language change, we need to store the previous language info to hidden fields
                var prev = storeThis.attr("name").replace("zContent[", "").replace("][]", "");
                dragula.find("[name^='zContent["+prev+"]']").each(function(i, v) {
                    // this is zContent-classed div
                    var cur = $(v);
                    // this is the previous language's hidden field to store the data
                    var old = $(v).parent().prev().find("[name^='content["+prev+"]']");
                    // this is the current language's hidden field to set the data
                    var nowo = $(v).parent().prev().find("[name^='content["+now+"]']");

                    if (cur.hasClass("zLink1")) {
                        old.val(cur.val() + ";" + cur.next().val());
                        $(v).parent().prev().children().each(function() {
                            var already = $(this).val().split(";");
                            already[0] = cur.val();
                            already = already.join(";");
                            $(this).val(already);
                        });

                        var nowo = nowo.val().split(";");

                        cur.val(nowo[0]);
                        cur.next().val(nowo[1]);
                    } else {
                        // store the previous language's data to hidden field
                        old.val(cur.val());
                        // retrieve the current language's data from hidden field
                        cur.val(nowo.val().trim());
                    }

                    // if we have summernote on our holder, we should do this trick
                    if (cur.hasClass("summernote")) {
                        cur.summernote("code", nowo.val().trim());
                    }
                    // this is a BUG: don't know why, but sometimes
                    // summernote doubles itself, but when that happens, remove the second
                    if (cur.next().next().hasClass("note-editor note-frame")) {
                        cur.next().next().remove();
                    }

                    // finally update the zContent language id
                    cur.attr("name", "zContent["+now+"][]");
                });
            }
        }

        // when a user writes on summernote, update the hidden textarea as well
        function summernoteKeyup(element) {
            element.keyup(function() {
                var value = $(this).prop("innerHTML");
                $(this).closest(".note-frame").prev().html(value);
            });
        }

        function storeCat() {
            $(".zCategory").on("change", function() {
                var value = $(this).val();

                $(this).parent().prev().children().each(function() {
                    $(this).val(value);
                });
            });
        }

        // this is to upload an image to server,
        // used both by summernote and filepond
        function uploadImage(image, summernote, filepond, e) {
            // create a new formdata
            var data = new FormData();
            // send the page id to server, because we will create a folder for it
            data.set("zPage", "1001");
            if (filepond) {
                data.set("filepond", "true");
            }
            data.set("langcode", "tr");
            // send the file to server
            var newName = slug(image.name.replace(/\.[^/.]+$/, "")) + "." + image.name.replace(/^[^/.]+\./, "");
            var newFile = new File([image], newName, { type: image.type});
            data.append("fileToUpload", newFile);
            $.ajax({
                url: "http://localhost/ultimate-z/_media/upload.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(filename) {
                    // this is an image tag to insert into a summernote after upload
                    var image = $("<img>").attr("src", "http://localhost/ultimate-z/_media/uploads/1001/" + filename).addClass("img-fluid");
                    if (summernote) {
                        // if a summernote uploaded the file, insert the image tag
                        summernote.summernote("insertNode", image[0]);
                    } else if (filepond) {
                        var filepondID = e.detail.file.id;
                        $(filepond).find("#filepond--item-" + filepondID).find("legend").text(filename);
                        $(filepond).find("#filepond--item-" + filepondID).find(".filepond--file-info-main").text(filename);
                        updateFilepond(e);
                        console.log(filename);
                    }
                },
                error: function(data) {
                    // if upload gives an error,
                    // woke the modalForUpload
                    $("#modalForUpload").find(".zInside").text(data.responseText);
                    window.location.assign("#modalForUpload");
                }
            });
        }

        // start the pond, filepond
        function runFilePond() {
            if ($(document.getElementById("dragula")).length) {
                document.getElementById("dragula").querySelectorAll(".filepond").forEach(function(v, i) {
                    var loaded = $(v).prev();
                    var value = v.previousElementSibling.value;
                    var multi = loaded.attr("data-multi");
                    if (value !== "") {
                        var files = [];
                        for (let i=0; i < value.split(";").length; i++) {
                            files.push({
                                source: "../../../../_media/uploads/1001/"+value.split(";")[i],
                                options: {
                                    type: "local"
                                }
                            });
                        }
                        var load = {
                            load: (uniqueFileId, load) => {
                                // you would get the file data from your server here
                                fetch(uniqueFileId)
                                .then(res => res.blob())
                                .then(load);
                            }
                        };
                    }
                    if (loaded.attr("data-filepond-loaded") !== "true") {
                        FilePond.create(v, {
                            allowImagePreview: true,
                            imagePreviewMaxFileSize: "500kb",
                            allowMultiple: (multi == "true" ? true : false),
                            allowReorder: (multi == "true" ? true : false),
                            maxFileSize: "20MB",
                            acceptedFileTypes: ["image/webp", "image/png", "image/jpg", "image/jpeg", "image/gif", "video/mp4", "video/m4v"],
                            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                                // Do custom type detection here and return with promise
                                resolve(type);
                            }),
                            files: (files ? files : null),
                            server: (load ? load : null)
                        });
                    }

                    if (loaded.closest("#dragula").length) {
                        loaded.attr("data-filepond-loaded", true);
                    }
                });

                // set filepond server
                FilePond.setOptions({
                    server: "./",
                });

                filepondCallbacks();
            }
        }

        function updateFilepond(e) {
            var elem = $(e.detail.pond.element.get());
            // getting the files
            var files = e.detail.pond.getFiles();
            var finalOrder = [];

            files.forEach(function(item) {
                var filename = $(e.target).find("#filepond--item-" + item.id).find("legend").text();
                finalOrder.push(filename);
            });

            elem.closest(".top-20").prev().children().each(function () {
                $(this).val(finalOrder.join(";"));
            });
        }

        // callbacks for filepond
        function filepondCallbacks() {
            $("#dragula").find("div.filepond").each(function() {
                var firstID = $(this).find(".filepond--assistant").attr("id");

                if (!window.pondIDS.includes(firstID)) {
                    // when a file added in a filepond, we will have to upload it
                    // to server
                    $(this).on("FilePond:processfilestart", function(e) {
                        // getting the files
                        var files = e.detail.pond.getFiles();
                        // calling the uploading service
                        uploadImage(e.detail.file.file, null, e.target, e);
                    });

                    $(this).on("FilePond:removefile", updateFilepond);
                    $(this).on("FilePond:reorderfiles", updateFilepond);
                }

                if (firstID) {
                    window.pondIDS.push(firstID);
                }
            });
        }

        function toggleParentNext(element) {
            element.click(function() {
                $(this).find(".arrows").toggle();
                $(this).parent().next().toggle();
            });
        }

        // start all summernotes
        function summernoteStart(element) {
            element.summernote({
                lang: "tr-TR",
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontname', ['fontname', 'fontsize', 'color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['picture', ['picture', 'link', 'video', 'table']],
                    ['view', ['fullscreen', 'codeview']],
                ],
                tabsize: 1,
                callbacks: {
                    onImageUpload: function(files) {
                        for (let i=0; i < files.length; i++) {
                            uploadImage(files[i], $(this));
                        }
                    }
                }
            });
        }

        // this is the modal number, each holder has a cross button,
        // to remove the holder itself, so they all need a unique id
        var modalNumber = "7";

        function zPageJS() {
            toggleParentNext($(".toggleParentNext"));

            dragulaEvery();

            // on language change
            $("#change_lang").change(function(){
                // lets get new language code
                var now = $(this).val();

                // we should store newly added data to the hidden fields
                storingData(now);

                // hide other language fields, bring the selected language
                $(".divFor").css("display", "none");
                $(".divFor"+now).css("display", "block");
            });

            summernoteStart($(".summernote"));
            summernoteKeyup($(".note-editable"));
            storeCat();

            // register filepond plugins
            FilePond.registerPlugin(
                // validates the size of the file...
                FilePondPluginFileValidateSize,
                // validates the file type...
                FilePondPluginFileValidateType,
                // preview the image file type...
                FilePondPluginImagePreview,
                // preview the vide file type...
                FilePondPluginMediaPreview,
                // rename
                FilePondPluginFileRename,
            );

            // set filepond language
            FilePond.setOptions(window["tr-TR"]);

            window.pondIDS = [];

            runFilePond();

            // add new holder button
            $("#AddNewHolder").click(function() {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $(this).offset().top - 100
                }, 500);

                var dragula = $("#dragula");
                var dragulaAdd = $("#dragulaAdd");

                dragulaAdd.toggle();
                dragula.toggleClass("col-8").toggleClass("col-12");
                var calcPX = ($(window).width() > 1024)
                    ? ($(window).height() - 180 - $(this).height() - $(".ButtonPos2").height() + "px")
                    : "40vh";

                if (dragulaAdd.css("display") !== "none") {
                    var count = dragula.children().length;
                    var newHeight = (dragulaAdd.height() - ((count-1)*20)) / count;
                    dragula.children().css("min-height", newHeight);
                    dragulaAdd.css({
                        "height": calcPX,
                        "overflow": "scroll"
                    });
                    dragula.css({
                        "height": calcPX,
                        "overflow": "scroll"
                    });
                } else {
                    dragula.children().css("min-height", "100%");
                    dragula.css("height", "auto");
                }
            });

            // submit form functions
            $("#zPage-edit-form").submit(function(e) {
                e.preventDefault();
                var now = $("#change_lang").val();
                storingData(now);
                storeCat();

                var form = $(this).clone();
                if (form.find("select")) {
                    form.find("select").each(function() {
                        var name = $(this).attr("name");
                        var value = $("[name='"+name+"'] option").filter(":selected").val();
                        $(this).val(value);
                    });
                }
                form.find("#dragulaAdd").remove();
                $("#dragula").children().each(function(i) {
                    var z = $("<input>")
                        .attr("name", "block"+i).val($(this).children().length-1);
                    form.append(z);
                });
                form.find("input[name='filepond']").remove();
                var post_url = form.attr("action");
                var post_data = form.serialize();

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

        document.addEventListener("DOMContentLoaded", function(event) {
            zPageJS();
        });
    </script>

    </div>
</body>
</html>
<?php }
}
