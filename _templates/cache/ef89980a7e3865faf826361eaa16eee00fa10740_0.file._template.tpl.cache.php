<?php
/* Smarty version 3.1.40, created on 2022-01-22 09:46:38
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/error/404/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebd27e14ddf1_55599016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef89980a7e3865faf826361eaa16eee00fa10740' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_templates/error/404/_template.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_holders/head.tpl' => 1,
  ),
),false)) {
function content_61ebd27e14ddf1_55599016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '98203552361ebd27e122637_51869067';
?>

<!DOCTYPE html>
<html lang="<?php echo smarty_function_zThis(array('z'=>"iso_code"),$_smarty_tpl);?>
">
<head>
    <title><?php echo smarty_function_zThis(array('z'=>"page-title"),$_smarty_tpl);?>
</title>
    <?php $_smarty_tpl->_subTemplateRender("file:_holders/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class="back7">
    <div class="width-760 zMob768-widthAll horMid centerText">
        <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/error/error-404.png" class="widthAll">
        <div class="text-center padB-100">
            <h1 class="font-4rem"><?php echo smarty_function_zThis(array('z'=>"not-found"),$_smarty_tpl);?>
</h1>
            <p class="gray2 font-20 bottom-50 top-50"><?php echo smarty_function_zThis(array('z'=>"not-found-text"),$_smarty_tpl);?>
</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
" class="forceLink zButton secondary sweet"><?php echo smarty_function_zThis(array('z'=>"not-found-button"),$_smarty_tpl);?>
</a>
        </div>
    </div>
</body>
</html>
<?php }
}
