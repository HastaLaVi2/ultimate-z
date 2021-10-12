<?php
/* Smarty version 3.1.39, created on 2021-08-09 14:21:23
  from '/Users/kerimcanayaz/Sites/test/_admin/layouts/pages/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611139e3367b98_15764910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '169b098eab806e21d2a81fdfddb7f4da23dfdec8' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_admin/layouts/pages/_template.tpl',
      1 => 1627597816,
      2 => 'file',
    ),
    '401398f9352134440a3b8cb1b57296ba51b57522' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_admin/_main.tpl',
      1 => 1627243956,
      2 => 'file',
    ),
    '3d4b762db8e4db2df58ec985d1ad9b3028ebebcc' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_holders/head.tpl',
      1 => 1628106980,
      2 => 'file',
    ),
    '48ce9f77ed2cf6adb45ad47fee8da980e80ac4af' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_admin/_partials/sidebar.tpl',
      1 => 1628253416,
      2 => 'file',
    ),
    '4d173ab11a3aa567db2189c4654c8e272a88f73b' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_admin/_partials/logo.tpl',
      1 => 1626937377,
      2 => 'file',
    ),
    'ef5289f9e70212143dea7b89d52f7426d3e33896' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_admin/_partials/pageHeader.tpl',
      1 => 1627030915,
      2 => 'file',
    ),
    '6759ad39d6a49ea650aa2d5d73767012d74b0024' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_admin/_partials/footer.tpl',
      1 => 1626945317,
      2 => 'file',
    ),
    'a78c29f125616750435413d166d6d8c928c2f4f8' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_holders/footer.tpl',
      1 => 1627891352,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_611139e3367b98_15764910 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pages | zAdmin</title>
    
        
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" hreflang="en" href="http://localhost/test/_admin/layouts/pages/" />
<link rel="alternate" hreflang="en" href="http://localhost/test/en/_admin/layouts/pages" />
<link rel="alternate" hreflang="tr" href="http://localhost/test/tr/_admin/layouts/pages" />

<!-- font libraries -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- jquery -->
<script src="http://localhost/test/_scripts/jquery/jquery-3.6.0.min.js"></script>

<!-- font-awesome -->
<link rel="stylesheet" href="http://localhost/test/_scripts/fontawesome/css/all.min.css"/>

<!-- the ultimate z -->
<link rel="stylesheet" type="text/css" href="http://localhost/test/_scripts/ultimate-z/z.min.css"/>
<script src="http://localhost/test/_scripts/ultimate-z/z.js"></script>

<!-- owl.carousel -->
<link href="http://localhost/test/_scripts/owl.carousel/owl.carousel.css" rel="stylesheet"/>
<link href="http://localhost/test/_scripts/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
<script src="http://localhost/test/_scripts/owl.carousel/owl.carousel.min.js"></script>

<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="http://localhost/test/_favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://localhost/test/_favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://localhost/test/_favicon/favicon-16x16.png">
<link rel="manifest" href="http://localhost/test/_favicon/site.webmanifest">
<link rel="mask-icon" href="http://localhost/test/_favicon/safari-pinned-tab.svg" color="#000000">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">

<!-- dragula -->
<link rel="stylesheet" href="http://localhost/test/_scripts/dragula/dragula.min.css"/>
<script src="http://localhost/test/_scripts/dragula/dragula.min.js"></script>


    <!-- toastify -->
    <link rel="stylesheet" href="http://localhost/test/_scripts/toastify/toastify.css">
    
    <link rel="stylesheet" href="http://localhost/test/_scripts/simple-datatables/style.css">

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
                    <a href="http://localhost/test/_admin/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
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
                            <a href="http://localhost/test/_admin/layouts/pages/" class="weight-700 text5">
                                Pages
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="http://localhost/test/_admin/layouts/categories/" class="weight-700 animSlow text4 zHov-text5 zHov-padL-5">
                                Categories
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/test/_admin/media/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-photo-video text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Media</span>
                    </a>
                </li>

                                <li class="text4 padLR-1rem weight-600 padT-30">Preferences</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/test/_admin/preferences/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-cog text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Preferences</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/test/_admin/users/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-users text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Users</span>
                    </a>
                </li>

                <li class="text4 padLR-1rem weight-600 padT-30">Advanced</li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/test/_admin/advanced/database/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
                        <i class="fas fa-server text6"></i>
                        <span class="padL-15 zHov-grayBack1 animSlow text4">Database</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="http://localhost/test/_admin/advanced/run-queries/" class="pad-13 rad-10 blockThis zHov-grayBack1 animSlow text4">
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
    <a href="http://localhost/test/" target="_blank" class="inLine colTop pointThis right-30 rightText index-10">
        <div class="no zMob768-displayNone">
            <div class="inLine verMid font-15">
                View
                <div class="font-12">Deneme</div>
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
            <img src="http://localhost/test/_media/user/profile/1.jpg" class="widthAll rad-half">
        </div>
    </div>
    <div class="zShow-userMenu displayNone">
        <div class="floatingTheRight whiteBack rad-15 pad-20 index-10 width-250 zShadow font-16">
            <div class="font-14 weight-700 gray3 bottom-10">Hello, Kerimcan!</div>
            <a href="http://localhost/test/" target="_blank" class="displayNone zMob768-no">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoT boldMin-1">
                    <div class="inLine verMid">
                        <i class="fas fa-home padR-10"></i>
                    </div>
                    <div class="inLine verMid font-15">
                        View
                        <div class="font-12">Deneme</div>
                    </div>
                </div>
            </a>
            <a href="http://localhost/test/_admin/profile/">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3">
                    <i class="fas fa-id-badge padR-10"></i>
                    Profile
                </div>
            </a>
            <a href="http://localhost/test/_admin/logout/">
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
            <h3 class="boldText">Pages</h3>
        </div>

        <div class="font0">
            
            
    <div class="col-12">
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText">Page List</h4>
            
            <a href="http://localhost/test/_admin/layouts/pages/create/" class="zButton primary sweet font-16">
                <i class="fas fa-plus-square right-10"></i>
                Add New Page
            </a>
            <div class="top-20"></div>
            <table class="zTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Template</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr>
                            <td>1</td>
                            <td>Home</td>
                            <td>zHome</td>
                            <td>
                                <a href="http://localhost/test/_admin/layouts/pages/edit/index.php?id_page=1001" class="zButton primary sweet">
                                     Edit
                                </a>
                            </td>
                            <td>
                                                            </td>
                        </tr>
                                    </tbody>
            </table>
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
    <script src="http://localhost/test/_scripts/toastify/toastify.js"></script>
        
    <script>
    var entriesPerPage = "entries per page";
    var searchOn = "Search...";
    var showingOf = "Showing [start] to [end] of [rows] entries";
    showingOf = showingOf.replaceAll("[", "{").replaceAll("]", "}");
    var noRowFound = "No entries found";

    $("input[type=checkbox]").change(function() {
        var clas = $(this).attr("class").split(" ")[1];
        var checked = $(this).prop("checked");
        $("."+clas).prop("checked", checked);
    });
    </script>
    <script src="http://localhost/test/_scripts/simple-datatables/simple-datatables.js"></script>
    
    <script>
        // Simple Datatable
        let tables = document.querySelectorAll(".zTable");
        tables.forEach((item, i) => {
            let dataTable = new simpleDatatables.DataTable(item, {
                columns: [
                    {select: [3,4], sortable: false},
                ]
            });
        });
    </script>

    </bottom>
</body>
</html>
<?php }
}
