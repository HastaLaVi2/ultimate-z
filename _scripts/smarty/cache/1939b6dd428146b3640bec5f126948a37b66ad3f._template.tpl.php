<?php
/* Smarty version 3.1.40, created on 2022-01-10 22:53:00
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/media/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dcb8cc16aca7_65264597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '757775edbf7bf0ed26119b2b5b400d1fac21dc11' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/media/_template.tpl',
      1 => 1641853804,
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
function content_61dcb8cc16aca7_65264597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Medya | zAdmin</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" href="http://localhost/ultimate-z/_admin/media/" />
<link rel="alternate" hreflang="en" href="http://localhost/ultimate-z/en/_admin/media" />
<link rel="alternate" hreflang="tr" href="http://localhost/ultimate-z/tr/_admin/media" />

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
    <style>
    #upload_progress { padding: 4px 0;}
    #upload_progress > div { padding:3px 0;}
    .progress_track { display:inline-block;width:200px;height:10px;border:1px solid #333;margin: 0 4px 0 10px;}
    .progress { background-color: #82CFFA;height:10px; }
    .is_dir .size { color:transparent;font-size:0;}
    .is_dir .size:before { content: "--"; font-size:14px;color:#333;}
    .is_dir .download{ visibility: hidden}
    .custom-menu li { padding: 8px 12px;cursor: pointer;}
    .custom-menu li:hover { background-color: var(--color7);}
    </style>
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/simple-datatables/style.css">
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
                    <a href="http://localhost/ultimate-z/_admin/media" class="pad-13 rad-10 blockThis back5 color-white">
                        <i class="fas fa-photo-video whiteText"></i>
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
            <h3 class="boldText top-10">Medya</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            
            
    <ul class="font-15 display-none hideRest floatingSpace index-1000 noWrap whiteBack rad-10 zShadow2 cleanList">
        <li data-action = "first">First thing</li>
        <li data-action = "second">Second thing</li>
        <li data-action = "third">Third thing</li>
    </ul>
    <nav>
        <div id="breadcrumb" class="padB-8 font-16">&nbsp;</div>
    </nav>
    <section class="whiteBack rad-15 pad-20 font-16">
        <input id="hashchange" type="text" class="display-none">
        <input id="copy_files" type="text" class="display-none">
        <input id="cut_files" type="text" class="display-none">
        <div id="upload_progress"></div>
        <div id="actions" class="padB-10">
                        <span class="upload pointThis text5 boldText padR-10">
                <label for="fragdrop" class="pointThis">
                    <i class="fas fa-upload padR-5"></i> dosya yükle
                </label>
                <input id="fragdrop" type="file" multiple class="displayNone" />
            </span>
                                    <a class="create padR-10" href="#modalForCreate">
                <i class="fas fa-plus padR-5"></i> yeni klasör
            </a>
                        <span class="copy pointNo gray2 boldText padR-10">
                <i class="fas fa-copy padR-5"></i> kopyala
            </span>
            <span class="cut pointNo gray2 boldText padR-10">
                <i class="fas fa-cut padR-5"></i> kes
            </span>
            <span class="paste pointNo gray2 boldText padR-10">
                <i class="fas fa-paste padR-5"></i> yapıştır
            </span>
            <a class="rename hideActions display-none padR-10" href="#modalForRename">
                <i class="fas fa-pen padR-5"></i> yeniden adlandır
            </a>
            <a class="download forceLink hideActions display-none padR-10">
                <i class="fas fa-download padR-5"></i> indir
            </a>
            <span class="delete hideActions display-none pointThis text5 boldText">
                <i class="fas fa-trash-alt padR-5"></i> sil
            </span>
        </div>
        <table id="table" class="zTable">
            <thead>
                <tr>
                    <th class="width-20">
                        <input type="checkbox" class="zCheckbox allBoxes boldMin-2 left--8 rad-5 pad-10">
                    </th>
                    <th>Ad</th>
                    <th>Boyut</th>
                    <th>Son değiştirilme</th>
                    <th>İzinler</th>
                </tr>
            </thead>
            <tbody id="list">
            </tbody>
        </table>
    </section>
    

<div class="zModal" id="modalForView">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Preview
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
    

<div class="zModal" id="modalForCreate">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form id="mkdir" class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/media/index.php">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Yeni Klasör Oluştur
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"></div>
                    <input id="dirname" class="pad-10" type=text name=name value="" />
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Oluştur</span>
                    </button>
                                    </div>
                        </form>
                    </div>
    </div>
</div>
    

<div class="zModal" id="modalForRename">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
                        <form id="renaming" class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/media/index.php">
                            <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        Yeni Bir Ad Girin
                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><input type=text name=file /></div>
                    <input id="dirname" class="pad-10" type=text name=new value="" />
                </div>
                <div class="rightText">
                                        <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        Kapat
                    </a>
                                                            <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span>Tamamla</span>
                    </button>
                                    </div>
                        </form>
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
        
        
<script>
function zPageJS_media() {
    let dataTable;
    var XSRF = (document.cookie.match('(^|; )_z_xsrf=([^;]*)')||0)[2];
    var MAX_UPLOAD_SIZE = 20971520;
    $("#hashchange").on("change", function() {
        list();
    });
    list();

    function table() {
        // Simple Datatable
        let tables = document.querySelectorAll(".zTable");

        if (dataTable && typeof(dataTable) == "object") {
            var newFolder = $("#list").clone().html();
            dataTable.destroy();
            $("#list").html(newFolder);
        }

        tables.forEach((item, i) => {
            dataTable = new simpleDatatables.DataTable(item, {
                columns: [
                    { select: [0], sortable: false},
                ]
            });
            dataTable.on("datatable.page", function(page) {
                $("#zContent").find("a").click(magicLinks);
                tableFunctions();
            });
            dataTable.on("datatable.sort", function(column, direction) {
                $("#zContent").find("a").click(magicLinks);
                tableFunctions();
            });
        });

        zDetect();
        tableFunctions();

        $(".allBoxes").click(function() {
            var checkBoxes = $("#list .zCheckbox");
            checkBoxes.prop("checked", $("#list .zCheckbox:checked").length != checkBoxes.length ? true : false);
            checkboxActions();
        });

        $(".hideActions").each(function() {
            if(!$(this).hasClass("display-none")) $(this).addClass("display-none");
        });

        $("#breadcrumb a").click(function() {
            $("#hashchange").val($(this).attr("data-href")).trigger("change");
        });
    }

    function tableFunctions() {
        $("#list a").click(function() {
            var el = $(this);
            if (el.attr("type") == "dir") {
                $("#hashchange").val(el.attr("data-href")).trigger("change");
            } else {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/ultimate-z/_admin/media/index.php",
                    data: { "do":"preview",name:el.text(),xsrf:XSRF,file:el.attr("data-file")},
                    error: function(r) {
                        var params = JSON.parse(r.responseText.slice(0, -1));
                        window.location.assign("#modalForView");
                        var title = $("#modalForView .modal-header h5").clone().text(el.text());
                        $("#modalForView .modal-header").html(title[0].outerHTML
                            +"<span class='font-12'>"+formatFileSize(params[2])+"</span>");
                        var html = params[1] == "img"
                            ? "<img src='"+params[0]+"' style='max-height: 60vh;max-width: 100%'>"
                            : "";
                        $("#modalForView .zInside").html(html);
                    },
                    dataType: "json"
                });
            }
        });

        $("#list .zCheckbox").change(checkboxActions);
    }

    function checkboxActions() {
        var actions = $("#actions");
        var count = $("#list .zCheckbox:checked");
        var del = actions.find(".delete");
        var dow = actions.find(".download");
        var ren = actions.find(".rename");
        var copy = actions.find(".copy");
        var cut = actions.find(".cut");
        var delAr = [], dowAr = [], allAr = [], theresIsDelete = false;

        if (count.length) {
            count.each(function() {
                if (!$(this).hasClass("allBoxes")) {
                    var data = $(this).parent().parent();
                    var file = data.attr("data-file");
                    var deletable = data.attr("data-deletable");
                    var download = data.attr("data-download");

                    if(deletable && deletable == "true") { delAr.push(file)} else { theresIsDelete = true}
                    dowAr.push(download);
                    allAr.push(file);
                }
            });
            if (theresIsDelete == false) {
                del.removeClass("display-none").attr("data-file", JSON.stringify(delAr));
            } else {
                if(!del.hasClass("display-none")) del.addClass("display-none");
            }
            dow.removeClass("display-none").attr("href", "?do=download&file=" + JSON.stringify(dowAr));
            if (count.length == 1 && theresIsDelete == false) {
                ren.removeClass("display-none");
            } else {
                if(!ren.hasClass("display-none")) ren.addClass("display-none");
            }
            if (delAr[0]) {
                $("#renaming input[name=file]").val(delAr[0]);
                $("#renaming input[name=new]").val(delAr[0].split("/").reverse()[0]);
            }
            copy.removeClass("pointNo").addClass("pointThis text5").attr("data-file", JSON.stringify(allAr));
            if (theresIsDelete == false) {
                cut.removeClass("pointNo").addClass("pointThis text5").attr("data-file", JSON.stringify(allAr));
            } else {
                if(!cut.hasClass("pointNo")) cut.removeClass("pointThis text5").addClass("pointNo");
            }
        } else {
           $(".hideActions").each(function() {
               if(!$(this).hasClass("display-none")) $(this).addClass("display-none");
           });
           copy.addClass("pointNo").removeClass("pointThis text5");
           cut.addClass("pointNo").removeClass("pointThis text5");
        }
        $(".allBoxes").prop("checked", count.length == $("#list .zCheckbox").length ? true : false);
    }

    $("#actions").on("click", ".delete", function() {
        $.ajax({
            type: "POST",
            url: "http://localhost/ultimate-z/_admin/media/index.php",
            data: { "do": "delete", file: $(this).attr("data-file"), xsrf: XSRF},
            error: function(e) {
                list();
                $(".hideActions").each(function() {
                    if(!$(this).hasClass("display-none")) $(this).addClass("display-none");
                });
            },
            dataType: "json"
        });
        return false;
    });

    $("#actions").on("click", ".paste", function() {
        var action = $(this).attr("data-action");
        $.ajax({
            type: "POST",
            url: "http://localhost/ultimate-z/_admin/media/index.php",
            data: { "do": "paste", file: $(this).attr("data-file"), xsrf: XSRF, action: action, location: $("#hashchange").val()},
            error: function() {
                list();
                $(".hideActions").each(function() {
                    if(!$(this).hasClass("display-none")) $(this).addClass("display-none");
                });
                if(action == "cut") {
                    $("#actions").find(".paste").addClass("pointNo").removeClass("pointThis text5");
                }
             },
            dataType: "json"
        });
        return false;
    });

    $("#actions").on("click", ".copy", function() {
        var data = $(this).attr("data-file");
        $("#copy_files").val(data);
        $("#actions").find(".paste").removeClass("pointNo").addClass("pointThis text5")
                     .attr("data-action", "copy").attr("data-file", data);
         Toastify({
             text: 'Dosyalar başarıyla kopyalandı.',
             duration: 3000,
         }).showToast();
    });

    $("#actions").on("click", ".cut", function() {
        var data = $(this).attr("data-file");
        $("#copy_files").val(data);
        $("#actions").find(".paste").removeClass("pointNo").addClass("pointThis text5")
                     .attr("data-action", "cut").attr("data-file", data);
        Toastify({
            text: 'Dosyalar başarıyla kesildi.',
            duration: 3000,
        }).showToast();
    });

    $("#renaming").submit(function(e) {
        var newName = $(this).find("[name=new]").val();
        var file = $(this).find("[name=file]").val();
        var zInside = $(this).find(".zInside");
        e.preventDefault();
        if (newName.length) {
            $.ajax({
                type: "POST",
                url: "http://localhost/ultimate-z/_admin/media/index.php",
                data: { "do": "rename", new: newName, xsrf:XSRF, file: file},
                error: function(e) {
                    if (IsJsonString(e.responseText)) {
                        var res = JSON.parse(e.responseText);
                        Toastify({
                            text: res.error.msg,
                            duration: 3000,
                            backgroundColor: "#f3616d",
                        }).showToast();
                    } else { zInside.find(".error").remove();list();window.location.assign("#");}
                },
                dataType: "json"
            });
        }
        return false;
    });

    $("#mkdir").submit(function(e) {
        var hashval = $("#hashchange").val().substr(1),
            $dir = $(this).find("[name=name]");
        e.preventDefault();
        if ($dir.val().length) {
            $.ajax({
                type: "POST",
                url: "http://localhost/ultimate-z/_admin/media/index.php",
                data: { "do":"mkdir",name:$dir.val(),xsrf:XSRF,file:hashval},
                error: function() {
                    list();
                    window.location.assign("#");
                },
                dataType: "json"
            });
        }
        $dir.val("");
        return false;
    });

        $("input[type=file]").change(function(e) {
        e.preventDefault();
        $.each(this.files,function(k,file) {
            uploadFile(file);
        });
    });
    function uploadFile(file) {
        var folder = $("#hashchange").val().substr(1);

        if (file.size > MAX_UPLOAD_SIZE) {
            var $error_row = renderFileSizeErrorRow(file,folder);
            $("#upload_progress").append($error_row);
            window.setTimeout(function(){ $error_row.fadeOut();},5000);
            return false;
        }

        var $row = renderFileUploadRow(file,folder);
        $("#upload_progress").append($row);
        var fd = new FormData();
        fd.append("file_data",file);
        fd.append("file",folder);
        fd.append("xsrf",XSRF);
        fd.append("do", "upload");
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "http://localhost/ultimate-z/_admin/media/index.php");
        xhr.onload = function() {
            $row.remove();
            list();
        };
        xhr.upload.onprogress = function(e){
            if(e.lengthComputable) {
                $row.find(".progress").css("width", (e.loaded/e.total*100 | 0)+'%' );
            }
        };
        xhr.send(fd);
    }
    function renderFileUploadRow(file,folder) {
        return $row = $("<div/>")
            .append( $('<span class="fileuploadname" />').text( (folder ? folder+'/':'')+file.name))
            .append( $('<div class="progress_track"><div class="progress"></div></div>')  )
            .append( $('<span class="size" />').text(formatFileSize(file.size)) )
    };
    function renderFileSizeErrorRow(file,folder) {
        Toastify({
            text: "Error: " + (folder ? folder+'/':'')+ file.name + ' file size - <b>'
                    + formatFileSize(file.size) + '</b>'
                    +' exceeds max upload size of <b>' + formatFileSize(MAX_UPLOAD_SIZE) + '</b>',
            duration: 3000,
            backgroundColor: "#f3616d",
        }).showToast();
    }
    
    function list() {
        var $tbody = $("#list");
        var hashval = $("#hashchange").length ? $("#hashchange").val().substr(1) : null;
        $.get('?do=list&file='+ hashval,function(data) {
            $tbody.empty();
            $('#breadcrumb').empty().html(renderBreadcrumbs(hashval));
            if(data.success) {
                $.each(data.results,function(k,v){
                    v.path = v.path.replace("../../_media/", "").replace("./", "");
                    if (v.path == "hidden_drive") { v.is_deleteable = false}
                    $tbody.append(renderFileRow(v));
                });
                !data.results.length && $tbody.append('<tr><td class="empty" colspan=5>Bu klasör boş.</td></tr>')
                data.is_writable ? $('body').removeClass('no_write') : $("body").addClass("no_write");
            } else {
                console.warn(data.error.msg);
            }
            table();
        }, "json");
    }

    function renderFileRow(data) {
        var $link = $('<a class="name" />')
            .attr("href", "#")
            .attr("data-href", data.is_dir ? "#" + data.path : "#")
            .text(data.name == "hidden_drive" ? "Gizli bellek" : data.name).attr("data-file", data.path).attr("type", data.is_dir ? "dir" : "file");
        var allow_direct_link = 'true'
            if (!data.is_dir && !allow_direct_link)  $link.css('pointer-events','none');
        var perms = [];
        if(data.is_readable) perms.push('read');
        if(data.is_writable) perms.push('write');
        if(data.is_executable) perms.push('exec');
        var $html = $('<tr />')
            .attr("data-file", data.path)
            .attr("data-download", data.path)
            .addClass(data.is_dir ? "is_dir" : "")
            .append("<td class='select'><input type='checkbox' class='zCheckbox boldMin-2 rad-5 pad-10'></td>")
            .append( $('<td class="first" />').append(data.is_dir ? "<i class='fas fa-folder font-24 gray2 padR-15'></i>" : "<i class='fas fa-file font-24 gray2 padR-15'></i>").append($link) )
            .append( $('<td/>').attr('data-sort',data.is_dir ? -1 : data.size)
                .html($('<span class="size" />').text(formatFileSize(data.size))) )
            .append( $('<td/>').attr('data-sort',data.mtime).text(formatTimestamp(data.mtime)) )
            .append( $('<td/>').text(perms.join('+')) );
        if(data.is_deleteable) $html.attr("data-deletable", "true");
        return $html;
    }

    function renderBreadcrumbs(path) {
        var base = "",
            $html = $('<div/>').append( $('<a href=#>Medya</a></div>') );
        $.each(path.split("/"),function(k,v){
            if(v) {
                var v_as_text = v;
                $html.append( $('<span/>').html(' <i class="fas fa-caret-right"></i> ') )
                    .append( $('<a/>').attr("href", "#").attr('data-href','#'+base+v).text(v_as_text == "hidden_drive" ? "Gizli bellek" : v_as_text) );
                base += v + '/';
            }
        });
        return $html;
    }

    function IsJsonString(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    }

    function formatTimestamp(unix_timestamp) {
        $.ajax({
            "async": false,
            "url": "http://localhost/ultimate-z/_scripts/apexcharts/locales/tr.json",
            "dataType": "json",
            "success": function (data) {
                window.apexLang = data;
            }
        });
        var m = window.apexLang.options.shortMonths;
        var d = new Date(unix_timestamp*1000);
        return [m[d.getMonth()]," ",d.getDate(),", ",d.getFullYear()," ",
            (d.getHours() % 12 || 12),":",(d.getMinutes() < 10 ? "0" : "")+d.getMinutes(),
            " ",d.getHours() >= 12 ? "PM" : "AM"].join("");
    }

    function formatFileSize(bytes) {
        var s = ["bytes", "KB","MB","GB","TB","PB","EB"];
        for(var pos = 0;bytes >= 1000; pos++,bytes /= 1024);
        var d = Math.round(bytes*10);
        return pos ? [parseInt(d/10),".",d%10," ",s[pos]].join("") : bytes + " bytes";
    }

    // copied from: https://jsfiddle.net/u2kJq/241/
    // Trigger action when the contexmenu is about to be shown
    $("#zContent").on("contextmenu", function (event) {

        // Avoid the real one
        event.preventDefault();

        // Show contextmenu
        $(".custom-menu").finish().toggle(100).

        // In the right position (the mouse)
        css({
            top: event.pageY - 32 + "px",
            left: event.pageX - 332 + "px"
        });
    });


    // If the document is clicked somewhere
    $("#zContent").on("mousedown", function (e) {

        // If the clicked element is not the menu
        if (!$(e.target).parents(".custom-menu").length > 0) {

            // Hide it
            $(".custom-menu").hide(100);
        }
    });


    // If the menu element is clicked
    $(".custom-menu li").click(function(){
        // This is the triggered action name
        switch($(this).attr("data-action")) {

            // A case for each action. Your actions here
            case "first": alert("first"); break;
            case "second": alert("second"); break;
            case "third": alert("third"); break;
        }

        // Hide it AFTER the action was triggered
        $(".custom-menu").hide(100);
    });

    functionIsRunning = true;
}

var functionIsRunning = false;

$(document).ready(function() {
    if (!functionIsRunning) {
        zPageJS_media();
    }
});
</script>

    </div>
</body>
</html>
<?php }
}
