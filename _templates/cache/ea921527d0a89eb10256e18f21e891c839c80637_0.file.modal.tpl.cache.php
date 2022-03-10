<?php
/* Smarty version 3.1.40, created on 2022-03-10 16:41:26
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_622a2a36e57b17_85396665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea921527d0a89eb10256e18f21e891c839c80637' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/modal.tpl',
      1 => 1641644877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622a2a36e57b17_85396665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '1791651724622a2a36e503c7_61320551';
?>

<?php if ($_smarty_tpl->tpl_vars['_mButton']->value) {?>
<a href="#modal<?php echo $_smarty_tpl->tpl_vars['_mLabel']->value;?>
" class="zButton zHov-zShadow5 primary sweet font-16"><?php echo $_smarty_tpl->tpl_vars['_mButton']->value;?>
</a>
<?php }?>

<div class="zModal" id="modal<?php echo $_smarty_tpl->tpl_vars['_mLabel']->value;?>
">
    <a class="zCancel" href="#"></a>
    <div class="zModalContent rad-15" zMob-768="zCol-11">
        <div class="pad-20">
            <?php if ($_smarty_tpl->tpl_vars['_mForm']->value) {?>
            <form <?php if ($_smarty_tpl->tpl_vars['_mFormId']->value) {?>id="<?php echo $_smarty_tpl->tpl_vars['_mFormId']->value;?>
"<?php }?> class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_mForm']->value;?>
">
            <?php }?>
                <div class="modal-header bg-primary">
                    <h5 class="top-0 bottom-0 font-18">
                        <?php echo $_smarty_tpl->tpl_vars['_mTitle']->value;?>

                    </h5>
                </div>
                <div class="zInside gray2 font-15 padTB-20">
                    <div class="displayNone"><?php echo $_smarty_tpl->tpl_vars['_mHidden']->value;?>
</div>
                    <?php echo $_smarty_tpl->tpl_vars['_mContent']->value;?>

                </div>
                <div class="rightText">
                    <?php if (!$_smarty_tpl->tpl_vars['_noClose']->value) {?>
                    <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                        <?php echo smarty_function_zThis(array('z'=>"Close"),$_smarty_tpl);?>

                    </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_mForm']->value) {?>
                    <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span><?php if ($_smarty_tpl->tpl_vars['_mSubmit']->value) {
echo $_smarty_tpl->tpl_vars['_mSubmit']->value;
} else {
echo smarty_function_zThis(array('z'=>"Accept"),$_smarty_tpl);
}?></span>
                    </button>
                    <?php }?>
                </div>
            <?php if ($_smarty_tpl->tpl_vars['_mForm']->value) {?>
            </form>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
