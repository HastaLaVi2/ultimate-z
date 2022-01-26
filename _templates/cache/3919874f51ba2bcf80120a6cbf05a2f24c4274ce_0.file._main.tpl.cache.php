<?php
/* Smarty version 3.1.40, created on 2022-01-26 13:47:47
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61f151035e91a8_05481408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3919874f51ba2bcf80120a6cbf05a2f24c4274ce' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_templates/_main.tpl',
      1 => 1643200970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_holders/head.tpl' => 1,
    'file:_admin/_partials/loading.tpl' => 1,
    'file:_holders/footer.tpl' => 1,
  ),
),false)) {
function content_61f151035e91a8_05481408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '98064699461f151035cd638_77374840';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131791896661f151035cf5a8_86770445', "zTitle");
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124879423261f151035d1bb7_98779700', "zHead");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202685331061f151035e1a24_00540894', 'zBodyClasses');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143228683561f151035e4b25_20426665', "zTop");
?>
</div>

    <div id="zBefore"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85856888261f151035e5708_84205174', "zBefore");
?>
</div>

    <div id="zContent">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104242820361f151035e6295_05890485', "zContent");
?>

    </div>

    <div id="zAfter"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182017773761f151035e6ef5_00718773', "zAfter");
?>
</div>

    <div id="zFooter">
        <?php $_smarty_tpl->_subTemplateRender("file:_holders/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="zBottom">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86363732061f151035e82c6_50567535', "zBottom");
?>

    </div>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_131791896661f151035cf5a8_86770445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_131791896661f151035cf5a8_86770445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | <?php echo $_smarty_tpl->tpl_vars['z']->value->name;
}
}
/* {/block "zTitle"} */
/* {block "zHead"} */
class Block_124879423261f151035d1bb7_98779700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_124879423261f151035d1bb7_98779700',
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
class Block_202685331061f151035e1a24_00540894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBodyClasses' => 
  array (
    0 => 'Block_202685331061f151035e1a24_00540894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'zBodyClasses'} */
/* {block "zTop"} */
class Block_143228683561f151035e4b25_20426665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_143228683561f151035e4b25_20426665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zTop"} */
/* {block "zBefore"} */
class Block_85856888261f151035e5708_84205174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBefore' => 
  array (
    0 => 'Block_85856888261f151035e5708_84205174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zBefore"} */
/* {block "zContent"} */
class Block_104242820361f151035e6295_05890485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_104242820361f151035e6295_05890485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zContent"} */
/* {block "zAfter"} */
class Block_182017773761f151035e6ef5_00718773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zAfter' => 
  array (
    0 => 'Block_182017773761f151035e6ef5_00718773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zAfter"} */
/* {block "zBottom"} */
class Block_86363732061f151035e82c6_50567535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_86363732061f151035e82c6_50567535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
