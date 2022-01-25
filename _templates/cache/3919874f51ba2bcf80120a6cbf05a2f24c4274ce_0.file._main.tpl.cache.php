<?php
/* Smarty version 3.1.40, created on 2022-01-25 08:28:41
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61efb4b9089556_27959528',
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
function content_61efb4b9089556_27959528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '36088157961efb4b907a5a4_95855210';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104081135861efb4b907c0a6_04371138', "zTitle");
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185089568061efb4b907d992_10190224', "zHead");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67971113861efb4b9084d71_12266504', 'zBodyClasses');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64306662961efb4b9086d85_21560044', "zTop");
?>
</div>

    <div id="zBefore"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23660641861efb4b9087520_92884151', "zBefore");
?>
</div>

    <div id="zContent">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161282054961efb4b9087c93_81082372', "zContent");
?>

    </div>

    <div id="zAfter"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204256316061efb4b9088482_77622352', "zAfter");
?>
</div>

    <div id="zBottom">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26937083661efb4b9088bc3_74384822', "zBottom");
?>

    </div>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_104081135861efb4b907c0a6_04371138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_104081135861efb4b907c0a6_04371138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | <?php echo $_smarty_tpl->tpl_vars['z']->value->name;
}
}
/* {/block "zTitle"} */
/* {block "zHead"} */
class Block_185089568061efb4b907d992_10190224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_185089568061efb4b907d992_10190224',
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
class Block_67971113861efb4b9084d71_12266504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBodyClasses' => 
  array (
    0 => 'Block_67971113861efb4b9084d71_12266504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'zBodyClasses'} */
/* {block "zTop"} */
class Block_64306662961efb4b9086d85_21560044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_64306662961efb4b9086d85_21560044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zTop"} */
/* {block "zBefore"} */
class Block_23660641861efb4b9087520_92884151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBefore' => 
  array (
    0 => 'Block_23660641861efb4b9087520_92884151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zBefore"} */
/* {block "zContent"} */
class Block_161282054961efb4b9087c93_81082372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_161282054961efb4b9087c93_81082372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zContent"} */
/* {block "zAfter"} */
class Block_204256316061efb4b9088482_77622352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zAfter' => 
  array (
    0 => 'Block_204256316061efb4b9088482_77622352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zAfter"} */
/* {block "zBottom"} */
class Block_26937083661efb4b9088bc3_74384822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_26937083661efb4b9088bc3_74384822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
