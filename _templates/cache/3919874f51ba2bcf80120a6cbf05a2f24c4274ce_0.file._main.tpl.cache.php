<?php
/* Smarty version 3.1.40, created on 2022-01-22 08:37:41
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebc255d68fd4_97377338',
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
function content_61ebc255d68fd4_97377338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '113037781761ebc255d55ba5_12835804';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19158906361ebc255d584f3_12027929', "zTitle");
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16883225461ebc255d5a098_21309411', "zHead");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54817536661ebc255d62f86_40407400', 'zBodyClasses');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181599666561ebc255d65358_90130656', "zTop");
?>
</div>

    <div id="zBefore"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15863785061ebc255d65b99_29493008', "zBefore");
?>
</div>

    <div id="zContent">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105242866561ebc255d66467_92052186', "zContent");
?>

    </div>

    <div id="zAfter"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46910886761ebc255d67508_70670953', "zAfter");
?>
</div>

    <div id="zBottom">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59092902961ebc255d67e35_68140040', "zBottom");
?>

    </div>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_19158906361ebc255d584f3_12027929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_19158906361ebc255d584f3_12027929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | <?php echo $_smarty_tpl->tpl_vars['z']->value->name;
}
}
/* {/block "zTitle"} */
/* {block "zHead"} */
class Block_16883225461ebc255d5a098_21309411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_16883225461ebc255d5a098_21309411',
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
class Block_54817536661ebc255d62f86_40407400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBodyClasses' => 
  array (
    0 => 'Block_54817536661ebc255d62f86_40407400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'zBodyClasses'} */
/* {block "zTop"} */
class Block_181599666561ebc255d65358_90130656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_181599666561ebc255d65358_90130656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zTop"} */
/* {block "zBefore"} */
class Block_15863785061ebc255d65b99_29493008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBefore' => 
  array (
    0 => 'Block_15863785061ebc255d65b99_29493008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zBefore"} */
/* {block "zContent"} */
class Block_105242866561ebc255d66467_92052186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_105242866561ebc255d66467_92052186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zContent"} */
/* {block "zAfter"} */
class Block_46910886761ebc255d67508_70670953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zAfter' => 
  array (
    0 => 'Block_46910886761ebc255d67508_70670953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zAfter"} */
/* {block "zBottom"} */
class Block_59092902961ebc255d67e35_68140040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_59092902961ebc255d67e35_68140040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
