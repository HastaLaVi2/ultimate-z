<?php
/* Smarty version 3.1.39, created on 2021-09-30 19:04:00
  from '/Users/kerimcanayaz/Sites/donmezoglu/_admin/forgot/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61560a208d2588_95433577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '700793cd9ddd0d1e8d886ae724bbdd3ddac6e6c2' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/forgot/_template.tpl',
      1 => 1633028064,
      2 => 'file',
    ),
    '40f7aff480493f329007abbc66b6e4ccccaa0f5f' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_holders/head.tpl',
      1 => 1632476335,
      2 => 'file',
    ),
    'b3eb396ec15a56c8009842e744c8f084bfc612e0' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_holders/validate.tpl',
      1 => 1627811510,
      2 => 'file',
    ),
    'a6a4e335ff5f778425be51c54c6f4681ff9f8a2a' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/donmezoglu/_admin/_partials/logo.tpl',
      1 => 1626937377,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_61560a208d2588_95433577 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Forgot Password | Dönmezoğlu Bilişim</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- alternate links -->
<link rel="alternate" href="http://localhost/donmezoglu/_admin/forgot/" />
<link rel="alternate" hreflang="en" href="http://localhost/donmezoglu/en/_admin/forgot" />
<link rel="alternate" hreflang="tr" href="http://localhost/donmezoglu/tr/_admin/forgot" />

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
    
<!-- form validation -->
<script src="http://localhost/donmezoglu/_scripts/jquery/jquery.validate.min.js"></script>
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
<script src="http://localhost/donmezoglu/_scripts/validation.js"></script>
</head>
<body class="zBack">
    <div class="col-12 heightMinAll">
        <div class="width-600 zMob-widthAll heightMinAll index-5 whiteBack">
            <div class="padLR-128 zMob768-padLR-40 padTB-80">
                
<div class="bottom-10">
    <div class="text1 weight-900 font-30">ultimate Z</div>
    <div class="boldText gray2 font-13 top--5">powered by <a href="https://onucyirmibir.com" target="_blank">13/21</a></div>
</div>
                <h1 class="font-64 boldText">Şifremi Unuttum.</h1>
                <p class="font-27_2 gray2 bottom-48">Şifre sıfırlama bağlantısı için epostanızı girin.</p>

                <form id="zUser-login-form" class="zForm" method="POST" role="form" action="http://localhost/donmezoglu/_admin/forgot/index.php">
                    
                    <div>
                        <input name="email" id="email" type="email" class="padL-45" placeholder="Eposta">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <button id="btnSubmit" class="zButton primary widthAll zShadow">Gönder</button>
                </form>
                <p class="font-27_2 gray2 top-20 bottom-48">
                    <a href="http://localhost/donmezoglu/tr/_admin/login/" class="forceLink">Hesabını Hatırlıyor musun?</a>
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
