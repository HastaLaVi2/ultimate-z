<?php
/* Smarty version 3.1.39, created on 2021-08-20 21:55:27
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/table/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612024cf73e006_89269137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874ba74eb8061e9737deb3ec0cdeadd9aa154d32' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/table/_template.tpl',
      1 => 1627598224,
      2 => 'file',
    ),
    '2de67654463ebbed118f4a9466ca3d8b72fb2cbd' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl',
      1 => 1628783121,
      2 => 'file',
    ),
    '0538971dc732ac65971b8a4e8622951228ba23c9' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl',
      1 => 1629329360,
      2 => 'file',
    ),
    'ee145e4b305193bfa0799dbe5399d0e2b0bf7047' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/sidebar.tpl',
      1 => 1628797148,
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
      1 => 1627030915,
      2 => 'file',
    ),
    'ea921527d0a89eb10256e18f21e891c839c80637' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/modal.tpl',
      1 => 1629131068,
      2 => 'file',
    ),
    '37ad690d114aa609e1e968d0e1276ea0a862870d' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/footer.tpl',
      1 => 1626945317,
      2 => 'file',
    ),
    'bccd1d6e5f756a0c71889da5394d7176cd403d20' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/footer.tpl',
      1 => 1627891352,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_612024cf73e006_89269137 (Smarty_Internal_Template $_smarty_tpl) {
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
<link rel="alternate" hreflang="en" href="http://localhost/ultimate-z/en/_admin/advanced/database/tableindex.php?table=zPages" />
<link rel="alternate" hreflang="tr" href="http://localhost/ultimate-z/tr/_admin/advanced/database/tableindex.php?table=zPages" />

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
<link rel="mask-icon" href="http://localhost/ultimate-z/_favicon/safari-pinned-tab.svg" color="#b91d47">
<link rel="shortcut icon" href="http://localhost/ultimate-z/_favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#b91d47">
<meta name="msapplication-TileImage" content="http://localhost/ultimate-z/_favicon/mstile-144x144.png">
<meta name="msapplication-config" content="http://localhost/ultimate-z/_favicon/browserconfig.xml">
<meta name="theme-color" content="#b91d47">


    <!-- dragula -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/dragula/dragula.min.css"/>
    <script src="http://localhost/ultimate-z/_scripts/dragula/dragula.min.js"></script>

    <!-- toastify -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/toastify/toastify.css">

    <!-- imagetracer -->
    <script src="http://localhost/ultimate-z/_scripts/imagetracer/imagetracer_v1.2.6.js"></script>

    <!-- html2canvas -->
    <script src="http://localhost/ultimate-z/_scripts/html2canvas/html2canvas.min.js"></script>
    
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/simple-datatables/style.css">

</head>
<body class="back7">
    
<div class="toggle-sidebar width-320 heightAll animSlow index-11 colTop fixed pad-20">
    <div class="pad-32 row-12 weight-900 whiteBack rad-20 no zMob1200-zShadow hideScroll">
        
<div class="bottom-10">
    <div class="text1 weight-900 font-30">ultimate Z</div>
    <div class="boldText gray2 font-13 top--5">powered by <a href="https://onucyirmibir.com" target="_blank">13/21</a></div>
</div>
        <div class="top-40">
            <ul class="cleanList font-16">
                <li class="text4 padLR-1rem weight-600">Menü</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-th-large text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Gösterge Paneli</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="#" class="pad-13 rad-10 blockThis zTogDown-side1 zHov-grayBack1 animSlow text4">
                        <i class="fas fa-layer-group text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Düzen</span>
                        <i class="fas fa-chevron-down inRight top-3 text6"></i>
                    </a>
                    <ul class="zShow-side1 font-13 padL-2rem left-2rem displayNone">
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/design/" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Tasarım
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/pages/" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Sayfalar
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/categories/" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Kategoriler
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/media/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-photo-video text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Medya</span>
                    </a>
                </li>

                                <li class="text4 padLR-1rem weight-600 padT-30">Seçenekler</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/preferences/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-cog text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Seçenekler</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/users/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-users text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Kullanıcılar</span>
                    </a>
                </li>

                <li class="text4 padLR-1rem weight-600 padT-30">İleri Düzey</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/advanced/database/" class="pad-13 rad-10 blockThis back5 whiteText">
                        <i class="fas fa-server whiteText"></i>
                        <span class="padL-15 back5 whiteText">Veritabanı</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/advanced/run-queries/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-terminal text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Sorgu Çalıştır</span>
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
    <div class="widthAll pad-32 padL-332 zMob1200-padL32">
        
            
<header class="inLeft displayNone zMob1200-no index-2">
    <div class="pointThis text5 button-sidebar inLine">
        <i class="fas fa-bars font-25"></i>
    </div>
</header>
<nav class="inRight">
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
    <div class="inLine colTop pointThis zTog-userMenu index-10">
        <div class="inLine colTop rightText padR-15">
            <h5 class="top-0 bottom-0">Kerimcan Ayaz</h5>
            <h6 class="top-0 bottom-0">Yönetici</h6>
        </div>
        <div class="inLine width-39">
            <img src="http://localhost/ultimate-z/_media/user/profile/1.jpg" class="widthAll rad-half">
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
            <a href="http://localhost/ultimate-z/_admin/logout/">
                <div class="left--20 right--20 bottom--20 rad-b-15 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoB boldMin-1">
                    <i class="fas fa-sign-out-alt padR-10"></i>
                    Çıkış Yap
                </div>
            </a>
        </div>
    </div>
</nav>
<div class="padB-20 displayNone zMob1200-no"></div>
        

        <div class="font-24 text4">
            <h3 class="boldText">Tablo: zPages</h3>
        </div>

        <div class="font0">
            
            
    <nav>
        <ol class="cleanList">
            <li><a href="http://localhost/ultimate-z/_admin/advanced/database/" class="inLine font-16">
                <i class="fas fa-caret-left"></i>
                Veritabanı
            </a></li>
        </ol>
    </nav>

    <div class="whiteBack rad-15 pad-20 font-16">
        
                        <table class="zTable">
            <thead>
                <tr>
                                                                                                        <th>id_page</th>
                                                            <th>url</th>
                                                            <th>area</th>
                                                            <th>id_template</th>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <th class="zEdit">Düzenle</th>
                    <th class="zDelete">Sil</th>
                </tr>
            </thead>
            <tbody>
                                    <tr>
                                                                                                                                                                                                <td>1</td>
                                                                                                            <td>/_admin</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal0" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal0">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='1'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>2</td>
                                                                                                            <td>/_admin/login</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal1" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal1">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='2'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='2'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/login'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>3</td>
                                                                                                            <td>/_admin/forgot</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal2" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal2">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='3'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='3'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/forgot'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>4</td>
                                                                                                            <td>/_admin/layouts/pages/create</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal3" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal3">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='4'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='4'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/layouts/pages/create'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>5</td>
                                                                                                            <td>/_admin/layouts/pages/edit</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal4" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal4">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='5'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='5'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/layouts/pages/edit'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>6</td>
                                                                                                            <td>/_admin/layouts/pages</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal5" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal5">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='6'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='6'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/layouts/pages'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>7</td>
                                                                                                            <td>/_admin/layouts/categories/create</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal6" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal6">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='7'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='7'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/layouts/categories/create'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>8</td>
                                                                                                            <td>/_admin/layouts/categories/edit</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal7" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal7">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='8'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='8'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/layouts/categories/edit'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>9</td>
                                                                                                            <td>/_admin/layouts/categories</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal8" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal8">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='9'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='9'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/layouts/categories'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>10</td>
                                                                                                            <td>/_admin/preferences</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal9" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal9">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='10'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='10'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/preferences'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>11</td>
                                                                                                            <td>/_admin/profile</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal10" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal10">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='11'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='11'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/profile'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>12</td>
                                                                                                            <td>/_admin/advanced/run-queries</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal11" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal11">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='12'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='12'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/advanced/run-queries'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>13</td>
                                                                                                            <td>/_admin/advanced/database</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal12" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal12">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='13'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='13'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/advanced/database'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>14</td>
                                                                                                            <td>/_admin/advanced/database/table</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal13" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal13">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='14'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='14'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/advanced/database/table'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>15</td>
                                                                                                            <td>/_admin/users</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal14" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal14">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='15'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='15'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/users'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>16</td>
                                                                                                            <td>/_admin/media</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal15" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal15">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='16'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='16'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/media'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>1001</td>
                                                                                                            <td>/</td>
                                                                                                            <td>front</td>
                                                                                                            <td>1</td>
                                                <td class="zEdit">
                            
<a href="#modal16" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal16">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='1001'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='1001'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='front'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='1'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
                                                                                                                                                                                                <td>17</td>
                                                                                                            <td>/_admin/layouts/design</td>
                                                                                                            <td>back</td>
                                                                                                            <td>0</td>
                                                <td class="zEdit">
                            
<a href="#modal17" class="zButton primary sweet font-16">Düzenle</a>

<div class="zModal" id="modal17">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15">
        <div class="pad-20">
                        <form  class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/advanced/database/table/index.php?table=zPages">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Edit Row
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type='text' name='type' value='edit_row'><input type='text' name='key' value='id_page'><input type='text' name='keyValue' value='17'></div>
                    
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_page'>
                                        id_page
                                    </label>
                                    
                                        <input type='text' name='id_page' class='top-0 bottom-0 pad-10' value='17'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='url'>
                                        url
                                    </label>
                                    
                                        <input type='text' name='url' class='top-0 bottom-0 pad-10' value='/_admin/layouts/design'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='area'>
                                        area
                                    </label>
                                    
                                        <input type='text' name='area' class='top-0 bottom-0 pad-10' value='back'>
                                    
                                </div>
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='id_template'>
                                        id_template
                                    </label>
                                    
                                        <input type='text' name='id_template' class='top-0 bottom-0 pad-10' value='0'>
                                    
                                </div>
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton primary sweet font-16">
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
        <p><span style="color: #dc3545;"><i class="far fa-heart"></i></span> version <b>1.0</b></p>
    </div>
</footer>
    </div>

    <bottom>
        
            

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
        // Simple Datatable
        let tables = document.querySelectorAll(".zTable");
        tables.forEach((item, i) => {
            let dataTable = new simpleDatatables.DataTable(item, {
                columns: [
                    {select: [4, 5], sortable: false},
                ]
            });
        });
    </script>

    </bottom>
</body>
</html>
<?php }
}
