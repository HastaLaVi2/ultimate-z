<?php
/* Smarty version 3.1.40, created on 2022-01-22 11:54:02
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebf05ad700a9_92497372',
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
function content_61ebf05ad700a9_92497372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '106287547361ebf05ad63a52_82730344';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12756701361ebf05ad662d6_90195292', "zTitle");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34032194061ebf05ad69510_72647894', "zTop");
?>
</div>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="widthAll pad-32 padL-332" zMob-1200="padL-32">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18028743861ebf05ad6a682_48898312', "zHeader");
?>


        <div class="font-24 text4 index-20 fixed" zMob-1200="padT-30" id="zPageTitle">
            <h3 class="boldText top-10"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61472335861ebf05ad6c126_50390688', "zPageTitle");
?>
</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79805108461ebf05ad6d749_51893638', "zContent");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207338618861ebf05ad6f550_66392671', "zBottom");
?>

    </div>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_12756701361ebf05ad662d6_90195292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_12756701361ebf05ad662d6_90195292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | zAdmin<?php
}
}
/* {/block "zTitle"} */
/* {block "zTop"} */
class Block_34032194061ebf05ad69510_72647894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_34032194061ebf05ad69510_72647894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zTop"} */
/* {block "zHeader"} */
class Block_18028743861ebf05ad6a682_48898312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHeader' => 
  array (
    0 => 'Block_18028743861ebf05ad6a682_48898312',
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
class Block_61472335861ebf05ad6c126_50390688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_61472335861ebf05ad6c126_50390688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;
}
}
/* {/block "zPageTitle"} */
/* {block "zContent"} */
class Block_79805108461ebf05ad6d749_51893638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_79805108461ebf05ad6d749_51893638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_207338618861ebf05ad6f550_66392671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_207338618861ebf05ad6f550_66392671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
