<?php
/* Smarty version 3.1.39, created on 2021-08-09 14:17:23
  from '/Users/kerimcanayaz/Sites/test/_setup/3/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611138f38388e0_89319659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3251a9f6171f6b9c65fbb97a130417d133283988' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_setup/3/_template.tpl',
      1 => 1628476604,
      2 => 'file',
    ),
    '3d4b762db8e4db2df58ec985d1ad9b3028ebebcc' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_holders/head.tpl',
      1 => 1628106980,
      2 => 'file',
    ),
    '45aca40e8a81b1737d4f7bf698d9963ca4ab0cc1' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_holders/validate.tpl',
      1 => 1627811510,
      2 => 'file',
    ),
    '4d173ab11a3aa567db2189c4654c8e272a88f73b' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/test/_admin/_partials/logo.tpl',
      1 => 1626937377,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_611138f38388e0_89319659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>zSetup</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" hreflang="en" href="http://localhost/test/" />
<link rel="alternate" hreflang="en" href="http://localhost/test/enindex.php?view=setup/3&lang=tr" />
<link rel="alternate" hreflang="tr" href="http://localhost/test/trindex.php?view=setup/3&lang=tr" />

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
    
<!-- form validation -->
<script src="http://localhost/test/_scripts/jquery/jquery.validate.min.js"></script>
<script type="text/javascript">
var formMessages = {
    name_req: "Please enter a name.",
    name_remote: "A user with the exact name provided already exists.",
    surname_req: "Please enter a surname.",
    email_req: "Please enter an email.",
    password_req: "Please enter a password.",
    confirm_password_req: "Please enter password again.",
    confirm_password_equal: "Passwords do not match.",
    rank_req: "Please choose a rank.",
    site_name_req: "Please enter a site name."
};
var zUsers = ["Kerimcan Ayaz"];
$.validator.addMethod("alreadyexist", function(value, element, parameter) {
    return zUsers.indexOf(parameter[0] + " " + parameter[1]) == -1;
}, formMessages.name_remote);
</script>
<script src="http://localhost/test/_scripts/validation.js"></script>
</head>
<body class="zBack">
    <div class="col-12 heightMinAll">
        <div class="width-600 zMob-widthAll heightMinAll index-5 whiteBack">
            <div class="padLR-128 zMob768-padLR-80 padTB-80">
                
<div class="bottom-10">
    <div class="text1 weight-900 font-30">ultimate Z</div>
    <div class="boldText gray2 font-13 top--5">powered by <a href="https://onucyirmibir.com" target="_blank">13/21</a></div>
</div>
                <h1 class="font-64">Setup.</h1>
                <p class="font-27_2 gray2 bottom-48">Create tables.</p>
                <p class="font-27_2 gray2 top-20"><a href="http://localhost/test/index.php?view=setup/2&lang=en"><i class="fas fa-chevron-left"></i> Go Back</a></p>
                <div class="rad-5 height-10 widthAll grayBack1 bottom-20 hideRest">
                    <div class="floatingSpace back3 col-8 row-12">
                    </div>
                </div>
                <form id="zUser-db-form" class="zForm" method="POST" role="form" action="http://localhost/test/index.php?view=setup/3&lang=tr">
                    <div class="help-box zShow-DBHelp whiteText animation pad-16 rad-4 bottom-10 displayNone">
                        <span></span>
                        <div class="zTog-DBHelp pointThis floatingTheRight row-12 pad-13 font-25_6">
                            <i class="far fa-times"></i>
                        </div>
                    </div>
                    <input name="create-them" type="text" class="displayNone" value="1">
                    <button id="btnSubmit" class="zButton primary widthAll zShadow">Create</button>
                </form>
                <p class="font-27_2 gray2 top-20 bottom-48"><a href="http://localhost/test/index.php?view=setup/4&lang=en">Continue <i class="fas fa-chevron-right"></i></a></p>
                <div class="centerText top-48 font-24">
                    <p class="gray3">Thanks for choosing,<br><span class="boldText">ultimate Z.</span></p>
                </div>
            </div>
        </div>
    </div>
    <script>
    $("#zUser-db-form").submit(function(e){
        e.preventDefault();

        var form = $(this);
        var post_url = form.attr("action");
        var post_data = form.serialize();
        $.ajax({
            type: "POST",
            url: post_url,
            data: post_data,
            success: function(responseText) {
                helpBox = form.find(".help-box");
                if (responseText.charAt(0) == 1) {
                    helpBox.removeClass("displayNone").removeClass("alertBack").addClass("succBack");
                    helpBox.find("span").text(responseText.substring(1));
                } else {
                    helpBox.removeClass("displayNone").removeClass("succBack").addClass("alertBack");
                    helpBox.find("span").text(responseText.substring(1));
                }
            }
        });
    });
    </script>
</body>
</html>
<?php }
}
