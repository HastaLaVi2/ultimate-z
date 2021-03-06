<?php
/* Smarty version 3.1.40, created on 2022-03-10 15:28:24
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/login/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_622a1918aa1458_44828110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c19d8b0b672cc0b15ccdd1afe4e5aa38c5569b5' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/login/_template.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
    '0538971dc732ac65971b8a4e8622951228ba23c9' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl',
      1 => 1645698748,
      2 => 'file',
    ),
    '573b073f619aeb439fcac73d74e676de04fada42' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/favicon.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
    'f604f12f4be440eb44f54c2ec3765c81163f341e' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/validate.tpl',
      1 => 1627811510,
      2 => 'file',
    ),
    '0858768a9f44129c1b02f0fefb43d98e29f9ca91' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/logo.tpl',
      1 => 1626937377,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_622a1918aa1458_44828110 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Log in | ultimate Z</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" href="http://localhost/ultimate-z/_admin/login/" />
<link rel="alternate" hreflang="en" href="http://localhost/ultimate-z/en/_admin/login" />
<link rel="alternate" hreflang="tr" href="http://localhost/ultimate-z/tr/_admin/login" />

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
<script defer src="http://localhost/ultimate-z/_scripts/ultimate-z/z.min.js"></script>

<!-- owl.carousel -->
    <link href="http://localhost/ultimate-z/_scripts/owl.carousel/owl.carousel.css" rel="stylesheet"/>
    <link href="http://localhost/ultimate-z/_scripts/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
    <script defer src="http://localhost/ultimate-z/_scripts/owl.carousel/owl.carousel.min.js"></script>

    
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
<script defer src="http://localhost/ultimate-z/_scripts/lazysizes/lazysizes.min.js" async=""></script>

<!-- single-page application functions -->
<script>window.zAdmin = true</script><script defer src="http://localhost/ultimate-z/_scripts/spa_v1.js"></script>

    <!-- dragula -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/dragula/dragula.min.css"/>
    <script defer src="http://localhost/ultimate-z/_scripts/dragula/dragula.min.js"></script>

    <!-- toastify -->
    <link rel="stylesheet" href="http://localhost/ultimate-z/_scripts/toastify/toastify.css">

    <!-- imagetracer -->
    <script defer src="http://localhost/ultimate-z/_scripts/imagetracer/imagetracer_v1.2.6.js"></script>

    <!-- html2canvas -->
    <script defer src="http://localhost/ultimate-z/_scripts/html2canvas/html2canvas.min.js"></script>
    
<!-- form validation -->
<script src="http://localhost/ultimate-z/_scripts/jquery/jquery.validate.min.js"></script>
<script type="text/javascript">
var formMessages = {
    name_req: "L??tfen bir ad girin.",
    name_remote: "Bu isme sahip bir kullan??c?? zaten mevcut.",
    surname_req: "L??tfen bir soyad girin.",
    email_req: "L??tfen bir eposta girin.",
    password_req: "L??tfen bir ??ifre girin.",
    confirm_password_req: "L??tfen ??ifrenizi tekrar girin.",
    confirm_password_equal: "??ifreler e??le??miyor.",
    rank_req: "L??tfen bir r??tbe se??in.",
    site_name_req: "L??tfen bir site ad?? girin."
};
var zUsers = ["Kerimcan Ayaz"];
$.validator.addMethod("alreadyexist", function(value, element, parameter) {
    return zUsers.indexOf(parameter[0] + " " + parameter[1]) == -1;
}, formMessages.name_remote);
</script>
<script src="http://localhost/ultimate-z/_scripts/validation.js"></script>
</head>
<body class="zBack">
    <div class="col-12 heightMinAll">
        <div class="width-600 zMob-widthAll heightMinAll index-5 whiteBack">
            <div class="padLR-128 zMob768-padLR-40 padTB-80">
                
<div class="bottom-10">
    <div class="text1 weight-900 font-30">ultimate Z</div>
    <div class="boldText gray2 font-13 top--5">powered by <a href="https://onucyirmibir.com" target="_blank">13/21</a></div>
</div>
                <h1 class="font-64 boldText">Giri?? Yap.</h1>
                <p class="font-27_2 gray2 bottom-48">Kendi kontrol panelini olu??turmak i??in bilgilerini girin.</p>

                <form id="zUser-login-form" class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/login/index.php">
                    
                    <div>
                        <input name="name" id="name" type="text" class="padL-45" placeholder="Ad">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <input name="surname" id="surname" type="text" class="padL-45" placeholder="Soyad??">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <input name="password" id="password" type="password" class="padL-45" placeholder="??ifre">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="bottom-25">
                        <input type="checkbox" value="1" name="keepLoggedIn" id="keepLoggedIn">
                        <label class="top--8" for="keepLoggedIn">
                            Beni Hat??rla
                        </label>
                    </div>
                    <button id="btnSubmit" class="zButton primary widthAll zShadow5">Giri?? Yap</button>
                </form>
                <p class="font-27_2 gray2 top-20 bottom-48">
                    <a href="http://localhost/ultimate-z/tr/_admin/forgot/" class="forceLink">??ifreni mi Unuttun?</a>
                </p>
                <div class="centerText top-48 font-24">
                    <p class="gray3">Bizi se??ti??iniz i??in te??ekk??rler,<br><span class="boldText">ultimate Z.</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php }
}
