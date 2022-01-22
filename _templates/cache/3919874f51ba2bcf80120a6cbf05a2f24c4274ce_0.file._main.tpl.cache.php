<?php
/* Smarty version 3.1.40, created on 2022-01-22 09:49:59
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebd34790cd80_66467910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3919874f51ba2bcf80120a6cbf05a2f24c4274ce' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_templates/_main.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_holders/head.tpl' => 1,
    'file:_admin/_partials/loading.tpl' => 1,
  ),
),false)) {
function content_61ebd34790cd80_66467910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '18775304561ebd3478f0497_48320492';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167880671561ebd3478f2cf3_92661619', "zTitle");
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45599293761ebd3478f5b23_68156284', "zHead");
?>

    <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['tempDirectory']->value)."fonts/stylesheet.css")) {?>
        <!-- font libraries -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
echo $_smarty_tpl->tpl_vars['tempDirectory']->value;?>
fonts/stylesheet.css" type="text/css" charset="utf-8" />
    <?php }?>

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
    <?php }?>
</head>
<body class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166987091861ebd347905721_82290901', 'zBodyClasses');
?>
">
    <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['tempDirectory']->value)."loading.tpl")) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tempDirectory']->value)."loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:_admin/_partials/loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <div id="zTop"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41020772761ebd347908a71_53616811', "zTop");
?>
</div>

    <div id="zBefore"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191301151961ebd34790a054_40021956', "zBefore");
?>
</div>

    <div id="zContent">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130312300561ebd34790acd7_70551039', "zContent");
?>

    </div>

    <div id="zAfter"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115862245861ebd34790b663_66737095', "zAfter");
?>
</div>

    <div id="zBottom">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113899824161ebd34790be94_57499259', "zBottom");
?>

    </div>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_167880671561ebd3478f2cf3_92661619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_167880671561ebd3478f2cf3_92661619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | <?php echo $_smarty_tpl->tpl_vars['z']->value->name;
}
}
/* {/block "zTitle"} */
/* {block "zHead"} */
class Block_45599293761ebd3478f5b23_68156284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_45599293761ebd3478f5b23_68156284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:_holders/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block "zHead"} */
/* {block 'zBodyClasses'} */
class Block_166987091861ebd347905721_82290901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBodyClasses' => 
  array (
    0 => 'Block_166987091861ebd347905721_82290901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'zBodyClasses'} */
/* {block "zTop"} */
class Block_41020772761ebd347908a71_53616811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_41020772761ebd347908a71_53616811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zTop"} */
/* {block "zBefore"} */
class Block_191301151961ebd34790a054_40021956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBefore' => 
  array (
    0 => 'Block_191301151961ebd34790a054_40021956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zBefore"} */
/* {block "zContent"} */
class Block_130312300561ebd34790acd7_70551039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_130312300561ebd34790acd7_70551039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zContent"} */
/* {block "zAfter"} */
class Block_115862245861ebd34790b663_66737095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zAfter' => 
  array (
    0 => 'Block_115862245861ebd34790b663_66737095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zAfter"} */
/* {block "zBottom"} */
class Block_113899824161ebd34790be94_57499259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_113899824161ebd34790be94_57499259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
