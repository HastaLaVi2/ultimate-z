<?php
/* Smarty version 3.1.40, created on 2022-02-11 17:46:22
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/0/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6206a0ee882548_57348519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3816e5df53c9bb3b67bb90a8dc4069e03e62af0' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_templates/0/_template.tpl',
      1 => 1643410456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6206a0ee882548_57348519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '3926790836206a0ee851cc5_79956454';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16301275356206a0ee86ea86_17519297', "zTop");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18431216216206a0ee876a51_52995626', "zBodyClasses");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10718814846206a0ee877694_39121725', "zContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zTop"} */
class Block_16301275356206a0ee86ea86_17519297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_16301275356206a0ee86ea86_17519297',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["holders"])."/validate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "zTop"} */
/* {block "zBodyClasses"} */
class Block_18431216216206a0ee876a51_52995626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBodyClasses' => 
  array (
    0 => 'Block_18431216216206a0ee876a51_52995626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
back7<?php
}
}
/* {/block "zBodyClasses"} */
/* {block "zContent"} */
class Block_10718814846206a0ee877694_39121725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_10718814846206a0ee877694_39121725',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

<?php if ($_smarty_tpl->tpl_vars['zPage']->value->id == "998") {
} elseif ($_smarty_tpl->tpl_vars['zPage']->value->id == "999") {?>
<div class="pad-50">
    <form id="zUser-create-form" class="zForm width-500 horMid rad-20 whiteBack pad-20" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="name">
                <?php echo smarty_function_zThis(array('z'=>"Name"),$_smarty_tpl);?>

            </label>
            <input type="text" id="name" name="name" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="surname">
                <?php echo smarty_function_zThis(array('z'=>"Surname"),$_smarty_tpl);?>

            </label>
            <input type="text" id="surname" name="surname" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="rank">
                <?php echo smarty_function_zThis(array('z'=>"Rank"),$_smarty_tpl);?>

            </label>
            <select name="rank" class="top-0 bottom-0 pad-10" id="rank">
                <option disabled><?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>
</option>
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetRanks($_smarty_tpl->tpl_vars['zContent']->value->language->id);?>

            </select>
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="email">
                <?php echo smarty_function_zThis(array('z'=>"Email"),$_smarty_tpl);?>

            </label>
            <input type="text" id="email" name="email" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="password">
                <?php echo smarty_function_zThis(array('z'=>"Password"),$_smarty_tpl);?>

            </label>
            <input type="password" id="password" name="password" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="confirm_password">
                <?php echo smarty_function_zThis(array('z'=>"Confirm Password"),$_smarty_tpl);?>

            </label>
            <input type="password" id="confirm_password" name="confirm_password" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
            <span><?php echo smarty_function_zThis(array('z'=>"Create"),$_smarty_tpl);?>
</span>
        </button>
    </form>
</div>
<?php }
}
}
/* {/block "zContent"} */
}
