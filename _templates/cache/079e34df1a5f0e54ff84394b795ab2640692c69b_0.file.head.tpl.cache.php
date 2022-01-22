<?php
/* Smarty version 3.1.40, created on 2022-01-22 08:37:41
  from '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebc255d82d50_77416918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '079e34df1a5f0e54ff84394b795ab2640692c69b' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/head.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../_holders/favicon.tpl' => 1,
    'file:_holders/favicon.tpl' => 1,
  ),
),false)) {
function content_61ebc255d82d50_77416918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '82791399161ebc255d6ea21_46352361';
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
<?php if (file_exists(((string)$_smarty_tpl->tpl_vars['tempDirectory']->value)."assets/owl.carousel.css")) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
echo $_smarty_tpl->tpl_vars['tempDirectory']->value;?>
assets/owl.carousel.css"/>
<?php } else { ?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/owl.carousel/owl.carousel.css" rel="stylesheet"/>
<?php }
if (file_exists(((string)$_smarty_tpl->tpl_vars['tempDirectory']->value)."assets/owl.theme.default.css")) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
echo $_smarty_tpl->tpl_vars['tempDirectory']->value;?>
assets/owl.theme.default.css"/>
<?php } else { ?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
<?php }
if (file_exists(((string)$_smarty_tpl->tpl_vars['tempDirectory']->value)."assets/owl.carousel.min.js")) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
echo $_smarty_tpl->tpl_vars['tempDirectory']->value;?>
assets/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/owl.carousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['zAdmin']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:../_holders/favicon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:_holders/favicon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<!-- lazysizes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/lazysizes/lazysizes.min.js" async=""><?php echo '</script'; ?>
>

<!-- single-page application functions -->
<?php if ($_smarty_tpl->tpl_vars['zAdmin']->value) {
echo '<script'; ?>
>window.zAdmin = true<?php echo '</script'; ?>
><?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/spa.js"><?php echo '</script'; ?>
>

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
<?php }
}
}
