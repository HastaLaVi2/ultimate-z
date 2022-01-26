<?php
/* Smarty version 3.1.40, created on 2022-01-26 13:50:07
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61f1518f08d762_94205660',
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
function content_61f1518f08d762_94205660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '43404448361f1518f084733_71141431';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202532005361f1518f086559_48908819', "zTitle");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92050544661f1518f088cd3_77385161', "zTop");
?>
</div>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="widthAll pad-32 padL-332" zMob-1200="padL-32">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159562410361f1518f089c56_06775894', "zHeader");
?>


        <div class="font-24 text4 index-20 fixed" zMob-1200="padT-30" id="zPageTitle">
            <h3 class="boldText top-10"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77544416061f1518f08aba7_21564810', "zPageTitle");
?>
</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161696596561f1518f08bac2_87418961', "zContent");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127385610361f1518f08cf48_23848438', "zBottom");
?>

    </div>
</body>
</html>
<?php }
/* {block "zTitle"} */
class Block_202532005361f1518f086559_48908819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTitle' => 
  array (
    0 => 'Block_202532005361f1518f086559_48908819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | zAdmin<?php
}
}
/* {/block "zTitle"} */
/* {block "zTop"} */
class Block_92050544661f1518f088cd3_77385161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_92050544661f1518f088cd3_77385161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "zTop"} */
/* {block "zHeader"} */
class Block_159562410361f1518f089c56_06775894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHeader' => 
  array (
    0 => 'Block_159562410361f1518f089c56_06775894',
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
class Block_77544416061f1518f08aba7_21564810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_77544416061f1518f08aba7_21564810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['zPage']->value->name;
}
}
/* {/block "zPageTitle"} */
/* {block "zContent"} */
class Block_161696596561f1518f08bac2_87418961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_161696596561f1518f08bac2_87418961',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_127385610361f1518f08cf48_23848438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_127385610361f1518f08cf48_23848438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "zBottom"} */
}
