<?php
/* Smarty version 3.1.39, created on 2021-08-12 22:39:09
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/categories/create/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6115a30d879d52_81090012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e9c4ad18f1d222ff66b7285e37eb1ddad59285' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/categories/create/_template.tpl',
      1 => 1627157598,
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
      1 => 1628106980,
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
function content_6115a30d879d52_81090012 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Category | zAdmin</title>
    
        
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" hreflang="en" href="http://localhost/ultimate-z/_admin/layouts/categories/create/" />
<link rel="alternate" hreflang="en" href="http://localhost/ultimate-z/en/_admin/layouts/categories/create" />
<link rel="alternate" hreflang="tr" href="http://localhost/ultimate-z/tr/_admin/layouts/categories/create" />

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
<script src="http://localhost/ultimate-z/_scripts/ultimate-z/z.js"></script>

<!-- owl.carousel -->
<link href="http://localhost/ultimate-z/_scripts/owl.carousel/owl.carousel.css" rel="stylesheet"/>
<link href="http://localhost/ultimate-z/_scripts/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
<script src="http://localhost/ultimate-z/_scripts/owl.carousel/owl.carousel.min.js"></script>

<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="http://localhost/ultimate-z/_favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://localhost/ultimate-z/_favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://localhost/ultimate-z/_favicon/favicon-16x16.png">
<link rel="manifest" href="http://localhost/ultimate-z/_favicon/site.webmanifest">
<link rel="mask-icon" href="http://localhost/ultimate-z/_favicon/safari-pinned-tab.svg" color="#000000">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">

<!-- dragula -->
<link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/dragula/dragula.min.css"/>
<script src="http://localhost/ultimate-z/_scripts/dragula/dragula.min.js"></script>


    <!-- toastify -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/toastify/toastify.css">
    
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
                <li class="text4 padLR-1rem weight-600">Menu</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-th-large text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Dashboard</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="#" class="pad-13 rad-10 blockThis zTogDown-side1 back5 whiteText">
                        <i class="fas fa-layer-group whiteText"></i>
                        <span class="padL-15 back5 whiteText">Layouts</span>
                        <i class="fas fa-chevron-down inRight top-3 whiteText"></i>
                    </a>
                    <ul class="zShow-side1 font-13 padL-2rem left-2rem toggled">
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/design/" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Design
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/pages/" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Pages
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/ultimate-z/_admin/layouts/categories/" class="weight-700 text5">
                                Categories
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/media/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-photo-video text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Media</span>
                    </a>
                </li>

                                <li class="text4 padLR-1rem weight-600 padT-30">Preferences</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/preferences/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-cog text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Preferences</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/users/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-users text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Users</span>
                    </a>
                </li>

                <li class="text4 padLR-1rem weight-600 padT-30">Advanced</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/advanced/database/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-server text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Database</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/ultimate-z/_admin/advanced/run-queries/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-terminal text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Run Queries</span>
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
                View
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
            <h6 class="top-0 bottom-0">Administrator</h6>
        </div>
        <div class="inLine width-39">
            <img src="http://localhost/ultimate-z/_media/user/profile/1.jpg" class="widthAll rad-half">
        </div>
    </div>
    <div class="zShow-userMenu displayNone">
        <div class="floatingTheRight whiteBack rad-15 pad-20 index-10 width-250 zShadow font-16">
            <div class="font-14 weight-700 gray3 bottom-10">Hello, Kerimcan!</div>
            <a href="http://localhost/ultimate-z/" target="_blank" class="displayNone zMob768-no">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoT boldMin-1">
                    <div class="inLine verMid">
                        <i class="fas fa-home padR-10"></i>
                    </div>
                    <div class="inLine verMid font-15">
                        View
                        <div class="font-12">ultimate Z</div>
                    </div>
                </div>
            </a>
            <a href="http://localhost/ultimate-z/_admin/profile/">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3">
                    <i class="fas fa-id-badge padR-10"></i>
                    Profile
                </div>
            </a>
            <a href="http://localhost/ultimate-z/_admin/logout/">
                <div class="left--20 right--20 bottom--20 rad-b-15 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoB boldMin-1">
                    <i class="fas fa-sign-out-alt padR-10"></i>
                    Log out
                </div>
            </a>
        </div>
    </div>
</nav>
<div class="padB-20 displayNone zMob1200-no"></div>
        

        <div class="font-24 text4">
            <h3 class="boldText">Create Category</h3>
        </div>

        <div class="font0">
            
            
    <div class="col-12">
        <nav>
            <ol class="cleanList">
                <li><a href="http://localhost/ultimate-z/_admin/layouts/categories/" class="inLine font-16">
                    <i class="fas fa-caret-left"></i>
                    Categories
                </a></li>
            </ol>
        </nav>

        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText">Add New Category</h4>
            <form id="zPage-edit-form" class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/layouts/categories/create/index.php">
                <div class='zShow-alert succBack whiteText animation zAlert bottom-20 font-16'>Change has been made.<div class='zTog-alert pointThis floatingTheRight'><i class='far fa-times'></i></div></div>
                <div>
                    <div class="zCol-4 zMob-zCol-12">
                        <div class="zGroup bottom-20">
                            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="change_lang">
                                Select Language
                            </label>
                            <select class="pad-10 top-0 bottom-0" id="change_lang" name="change_lang">
                                <option disabled>Choose...</option>
                                <option value='1'selected>English</option><option value='2'>Türkçe</option>
                            </select>
                        </div>
                        <script>
                        $("#change_lang").change(function(){
                            $(".divFor").css("display", "none");
                            $(".divFor"+$("#change_lang").val()).css("display", "block");
                        });
                        </script>
                    </div>
                </div>
                                    <div class="divFor1 divFor" style="">
                        <div><input name="id_lang[1]" id="id_lang_1"
                                    type="text" value="1" style="display:none"></div>
                        <div class="bottom-10">
                            <input name="category_name[1]" id="category_name_1" type="text"
                                   class="page-title padL-45" placeholder="Title">
                            <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                    </div>
                                    <div class="divFor2 divFor" style="display:none">
                        <div><input name="id_lang[2]" id="id_lang_2"
                                    type="text" value="2" style="display:none"></div>
                        <div class="bottom-10">
                            <input name="category_name[2]" id="category_name_2" type="text"
                                   class="page-title padL-45" placeholder="Title">
                            <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                    </div>
                                <button class="zButton primary widthAll zShadow top-20">Create</button>
            </form>
        </div>
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
        
    </bottom>
</body>
</html>
<?php }
}
