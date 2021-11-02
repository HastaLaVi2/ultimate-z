<?php
/* Smarty version 3.1.39, created on 2021-11-02 08:45:50
  from '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6180fabe86acd6_91157066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0538971dc732ac65971b8a4e8622951228ba23c9' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl',
      1 => 1633381842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6180fabe86acd6_91157066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5440409876180fabe850cc2_99812293';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php if ($_smarty_tpl->tpl_vars['zPage']->value->meta && $_smarty_tpl->tpl_vars['zPage']->value->meta !== '') {?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['zPage']->value->meta;?>
" />
<?php }?>

<!-- alternate links -->
<link rel="alternate" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->current;?>
" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllLangs(), 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
<link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['l']->value->iso_code;?>
" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["change_lang_".((string)$_smarty_tpl->tpl_vars['l']->value->iso_code)];?>
" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<!-- font libraries -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- jquery -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/jquery/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/jquery/jquery.lazy.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/jquery/jquery.lazy.plugins.min.js"><?php echo '</script'; ?>
>

<!-- font-awesome -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/fontawesome/css/all.min.css"/>

<!-- the ultimate z -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/ultimate-z/z.min.css"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/ultimate-z/z.min.js"><?php echo '</script'; ?>
>

<!-- owl.carousel -->
<link href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/owl.carousel/owl.carousel.css" rel="stylesheet"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/owl.carousel/owl.carousel.min.js"><?php echo '</script'; ?>
>

<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon-16x16.png">
<link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/site.webmanifest">
<link rel="mask-icon" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/safari-pinned-tab.svg" color="#2d89ef">
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/favicon.ico">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/mstile-144x144.png">
<meta name="msapplication-config" content="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["favicon"];?>
/browserconfig.xml">
<meta name="theme-color" content="#2d89ef">

<?php if (!$_smarty_tpl->tpl_vars['zAdmin']->value) {?>
    <!-- font libraries -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/fonts/stylesheet.css" type="text/css" charset="utf-8" />

    <!-- custom css/javascript libraries -->
    <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['zContent']->value->srcFull["templates"])."/assets/styles.css")) {?>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["templates"];?>
/assets/styles.css"/>
    <?php }?>
    <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['zContent']->value->srcFull["templates"])."/assets/javascript.js")) {?>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["templates"];?>
/assets/javascript.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['tempDirectory']->value)."assets/styles.css")) {?>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
echo $_smarty_tpl->tpl_vars['tempDirectory']->value;?>
assets/styles.css"/>
    <?php }?>
    <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['tempDirectory']->value)."assets/javascript.js")) {?>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
echo $_smarty_tpl->tpl_vars['tempDirectory']->value;?>
assets/javascript.js"><?php echo '</script'; ?>
>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['zAdmin']->value) {?>
    <!-- dragula -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/dragula/dragula.min.css"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/dragula/dragula.min.js"><?php echo '</script'; ?>
>

    <!-- toastify -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/toastify/toastify.css">

    <!-- imagetracer -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/imagetracer/imagetracer_v1.2.6.js"><?php echo '</script'; ?>
>

    <!-- html2canvas -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/html2canvas/html2canvas.min.js"><?php echo '</script'; ?>
>

    <!-- admin javascript functions -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/admin.js"><?php echo '</script'; ?>
>
<?php }
}
}
