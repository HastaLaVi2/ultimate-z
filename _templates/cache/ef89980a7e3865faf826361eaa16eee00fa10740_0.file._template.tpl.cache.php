<?php
/* Smarty version 3.1.39, created on 2021-11-01 14:44:28
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/error/404/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617ffd4c6faf74_36399234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef89980a7e3865faf826361eaa16eee00fa10740' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_templates/error/404/_template.tpl',
      1 => 1627811511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_holders/head.tpl' => 1,
  ),
),false)) {
function content_617ffd4c6faf74_36399234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '123184832617ffd4c6dea26_22705482';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zThis']->value["iso_code"];?>
">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['zThis']->value["page-title"];?>
</title>
    <?php $_smarty_tpl->_subTemplateRender("file:_holders/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class="back7">
    <div class="width-760 zMob768-widthAll horMid centerText">
        <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/error/error-404.png" class="widthAll">
        <div class="text-center padB-100">
            <h1 class="font-4rem"><?php echo $_smarty_tpl->tpl_vars['zThis']->value["not-found"];?>
</h1>
            <p class="gray2 font-20 bottom-50 top-50"><?php echo $_smarty_tpl->tpl_vars['zThis']->value["not-found-text"];?>
</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
" class="zButton secondary sweet"><?php echo $_smarty_tpl->tpl_vars['zThis']->value["not-found-button"];?>
</a>
        </div>
    </div>
</body>
</html>
<?php }
}