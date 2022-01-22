<?php
/* Smarty version 3.1.40, created on 2022-01-22 21:38:10
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ec794242d9a6_93956368',
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
function content_61ec794242d9a6_93956368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '195375678261ec794241dc86_82571651';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8866737961ec79424200c5_81937830', "zTitle");
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164963363261ec7942421aa4_48534706', "zHead");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164957926861ec79424290a8_59589468', 'zBodyClasses');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148923893561ec794242b111_66650059', "zTop");
?>
</div>

    <div id="zBefore"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176751485361ec794242b8e2_20622792', "zBefore");
?>
</div>

    <div id="zContent">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213204693861ec794242c077_62426120', "zContent");
?>

    </div>

    <div id="zAfter"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143528295061ec794242c877_15875027', "zAfter");
?>
</div>

    <div id="zBottom">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17843067961ec794242cfd0_53524834', "zBottom");
?>

    </div>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_8866737961ec79424200c5_81937830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_8866737961ec79424200c5_81937830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | <?php echo $_smarty_tpl->tpl_vars['z']->value->name;
}
}
/* {/block "zTitle"} */
/* {block "zHead"} */
class Block_164963363261ec7942421aa4_48534706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_164963363261ec7942421aa4_48534706',
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
class Block_164957926861ec79424290a8_59589468 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBodyClasses' => 
  array (
    0 => 'Block_164957926861ec79424290a8_59589468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'zBodyClasses'} */
/* {block "zTop"} */
class Block_148923893561ec794242b111_66650059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_148923893561ec794242b111_66650059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zTop"} */
/* {block "zBefore"} */
class Block_176751485361ec794242b8e2_20622792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBefore' => 
  array (
    0 => 'Block_176751485361ec794242b8e2_20622792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zBefore"} */
/* {block "zContent"} */
class Block_213204693861ec794242c077_62426120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_213204693861ec794242c077_62426120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zContent"} */
/* {block "zAfter"} */
class Block_143528295061ec794242c877_15875027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zAfter' => 
  array (
    0 => 'Block_143528295061ec794242c877_15875027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zAfter"} */
/* {block "zBottom"} */
class Block_17843067961ec794242cfd0_53524834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_17843067961ec794242cfd0_53524834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
