<?php
/* Smarty version 3.1.39, created on 2021-11-01 14:44:50
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617ffd6213ce17_02959671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de67654463ebbed118f4a9466ca3d8b72fb2cbd' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl',
      1 => 1633532660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../_holders/head.tpl' => 1,
    'file:_partials/sidebar.tpl' => 1,
    'file:_partials/pageHeader.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:../_holders/footer.tpl' => 1,
    'file:_partials/loading.tpl' => 1,
  ),
),false)) {
function content_617ffd6213ce17_02959671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1887350285617ffd621347f3_77159199';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_976055255617ffd62135cd1_22808085', "zTitle");
?>
</title>
    <?php $_smarty_tpl->_subTemplateRender("file:../_holders/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class="back7">
    <div class="floatingTheSpace fixed index-11 height-100 widthAll">
        <div class="height-70 widthAll back7" zMob-1200="height-100"></div>
        <div class="height-30 widthAll specGrad" zMob-1200="height-40"></div>
    </div>

    <div id="zHead"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_446488348617ffd62137600_32331930', "zHead");
?>
</div>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="widthAll pad-32 padL-332" zMob-1200="padL-32">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1268878260617ffd621383e1_89403061', "zHeader");
?>


        <div class="font-24 text4 index-20 fixed" zMob-1200="padT-30" id="zPageTitle">
            <h3 class="boldText top-10"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1085893452617ffd62139212_19871084', "zPageTitle");
?>
</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1407024635617ffd62139fd6_23115861', "zContent");
?>

        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="zBottom">
        <?php $_smarty_tpl->_subTemplateRender("file:../_holders/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2031819750617ffd6213b962_41714564', "zBottom");
?>

    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:_partials/loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_976055255617ffd62135cd1_22808085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_976055255617ffd62135cd1_22808085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | zAdmin<?php
}
}
/* {/block "zTitle"} */
/* {block "zHead"} */
class Block_446488348617ffd62137600_32331930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_446488348617ffd62137600_32331930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zHead"} */
/* {block "zHeader"} */
class Block_1268878260617ffd621383e1_89403061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHeader' => 
  array (
    0 => 'Block_1268878260617ffd621383e1_89403061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/pageHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "zHeader"} */
/* {block "zPageTitle"} */
class Block_1085893452617ffd62139212_19871084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_1085893452617ffd62139212_19871084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;
}
}
/* {/block "zPageTitle"} */
/* {block "zContent"} */
class Block_1407024635617ffd62139fd6_23115861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_1407024635617ffd62139fd6_23115861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_2031819750617ffd6213b962_41714564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_2031819750617ffd6213b962_41714564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}