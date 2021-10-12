<?php
/* Smarty version 3.1.39, created on 2021-10-07 21:40:59
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f696b9614d9_12046623',
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
function content_615f696b9614d9_12046623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '907081179615f696b957c66_82030256';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2073477143615f696b959b05_66312424', "zTitle");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2085316092615f696b95b784_07528638', "zHead");
?>
</div>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="widthAll pad-32 padL-332" zMob-1200="padL-32">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_357141566615f696b95c747_96505663', "zHeader");
?>


        <div class="font-24 text4 index-20 fixed" zMob-1200="padT-30" id="zPageTitle">
            <h3 class="boldText top-10"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1333378361615f696b95d585_39186601', "zPageTitle");
?>
</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1326490641615f696b95e356_09168284', "zContent");
?>

        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="zBottom">
        <?php $_smarty_tpl->_subTemplateRender("file:../_holders/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2134869496615f696b95f938_18574081', "zBottom");
?>

    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:_partials/loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_2073477143615f696b959b05_66312424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_2073477143615f696b959b05_66312424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | zAdmin<?php
}
}
/* {/block "zTitle"} */
/* {block "zHead"} */
class Block_2085316092615f696b95b784_07528638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_2085316092615f696b95b784_07528638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zHead"} */
/* {block "zHeader"} */
class Block_357141566615f696b95c747_96505663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHeader' => 
  array (
    0 => 'Block_357141566615f696b95c747_96505663',
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
class Block_1333378361615f696b95d585_39186601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_1333378361615f696b95d585_39186601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;
}
}
/* {/block "zPageTitle"} */
/* {block "zContent"} */
class Block_1326490641615f696b95e356_09168284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_1326490641615f696b95e356_09168284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_2134869496615f696b95f938_18574081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_2134869496615f696b95f938_18574081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
