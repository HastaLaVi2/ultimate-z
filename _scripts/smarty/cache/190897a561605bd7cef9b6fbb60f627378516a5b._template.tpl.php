<?php
/* Smarty version 3.1.40, created on 2021-12-25 08:14:43
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/login/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c6d2f3777a76_13947495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c19d8b0b672cc0b15ccdd1afe4e5aa38c5569b5' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/login/_template.tpl',
      1 => 1639309494,
      2 => 'file',
    ),
    '0538971dc732ac65971b8a4e8622951228ba23c9' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl',
      1 => 1640259430,
      2 => 'file',
    ),
    '573b073f619aeb439fcac73d74e676de04fada42' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/favicon.tpl',
      1 => 1640259422,
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
function content_61c6d2f3777a76_13947495 (Smarty_Internal_Template $_smarty_tpl) {
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
    
<!-- form validation -->
<script src="http://localhost/ultimate-z/_scripts/jquery/jquery.validate.min.js"></script>
<script type="text/javascript">
var formMessages = {
    name_req: "Lütfen bir ad girin.",
    name_remote: "Bu isme sahip bir kullanıcı zaten mevcut.",
    surname_req: "Lütfen bir soyad girin.",
    email_req: "Lütfen bir eposta girin.",
    password_req: "Lütfen bir şifre girin.",
    confirm_password_req: "Lütfen şifrenizi tekrar girin.",
    confirm_password_equal: "Şifreler eşleşmiyor.",
    rank_req: "Lütfen bir rütbe seçin.",
    site_name_req: "Lütfen bir site adı girin."
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
                <h1 class="font-64 boldText">Giriş Yap.</h1>
                <p class="font-27_2 gray2 bottom-48">Kendi kontrol panelini oluşturmak için bilgilerini girin.</p>

                <form id="zUser-login-form" class="zForm" method="POST" role="form" action="http://localhost/ultimate-z/_admin/login/index.php">
                    
                    <div>
                        <input name="name" id="name" type="text" class="padL-45" placeholder="Ad">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <input name="surname" id="surname" type="text" class="padL-45" placeholder="Soyadı">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <input name="password" id="password" type="password" class="padL-45" placeholder="Şifre">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="bottom-25">
                        <input type="checkbox" value="1" name="keepLoggedIn" id="keepLoggedIn">
                        <label class="top--8" for="keepLoggedIn">
                            Beni Hatırla
                        </label>
                    </div>
                    <button id="btnSubmit" class="zButton primary widthAll zShadow5">Giriş Yap</button>
                </form>
                <p class="font-27_2 gray2 top-20 bottom-48">
                    <a href="http://localhost/ultimate-z/tr/_admin/forgot/" class="forceLink">Şifreni mi Unuttun?</a>
                </p>
                <div class="centerText top-48 font-24">
                    <p class="gray3">Bizi seçtiğiniz için teşekkürler,<br><span class="boldText">ultimate Z.</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php }
}
