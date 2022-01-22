<?php
/* Smarty version 3.1.40, created on 2022-01-22 13:41:43
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ec09975c24c5_01677340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de67654463ebbed118f4a9466ca3d8b72fb2cbd' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl',
      1 => 1642843802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../_holders/head.tpl' => 1,
    'file:_partials/loading.tpl' => 1,
    'file:_partials/sidebar.tpl' => 1,
    'file:_partials/pageHeader.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:../_holders/footer.tpl' => 1,
  ),
),false)) {
function content_61ec09975c24c5_01677340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '182792397161ec09975b9ad7_13155757';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143450521661ec09975bbba6_52166675', "zTitle");
?>
</title>
    <?php $_smarty_tpl->_subTemplateRender("file:../_holders/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class="back7">
    <?php $_smarty_tpl->_subTemplateRender("file:_partials/loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="floatingTheSpace fixed index-11 height-100 widthAll">
        <div class="height-70 widthAll back7" zMob-1200="height-100"></div>
        <div class="height-30 widthAll specGrad" zMob-1200="height-40"></div>
    </div>

    <div id="zTop"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162146600861ec09975bdd20_96278004', "zTop");
?>
</div>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="widthAll pad-32 padL-332" zMob-1200="padL-32">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80704438261ec09975beba0_82709296', "zHeader");
?>


        <div class="font-24 text4 index-20 fixed" zMob-1200="padT-30" id="zPageTitle">
            <h3 class="boldText top-10"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126677741461ec09975bfa73_19168576', "zPageTitle");
?>
</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187880529161ec09975c08e5_98235437', "zContent");
?>

        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="zFooter">
        <?php $_smarty_tpl->_subTemplateRender("file:../_holders/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="zBottom">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25181595761ec09975c1d08_48197406', "zBottom");
?>

    </div>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_143450521661ec09975bbba6_52166675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_143450521661ec09975bbba6_52166675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | zAdmin<?php
}
}
/* {/block "zTitle"} */
/* {block "zTop"} */
class Block_162146600861ec09975bdd20_96278004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_162146600861ec09975bdd20_96278004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zTop"} */
/* {block "zHeader"} */
class Block_80704438261ec09975beba0_82709296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHeader' => 
  array (
    0 => 'Block_80704438261ec09975beba0_82709296',
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
class Block_126677741461ec09975bfa73_19168576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_126677741461ec09975bfa73_19168576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;
}
}
/* {/block "zPageTitle"} */
/* {block "zContent"} */
class Block_187880529161ec09975c08e5_98235437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_187880529161ec09975c08e5_98235437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_25181595761ec09975c1d08_48197406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_25181595761ec09975c1d08_48197406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
