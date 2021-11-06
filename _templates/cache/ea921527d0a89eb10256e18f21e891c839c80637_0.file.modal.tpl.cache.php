<?php
/* Smarty version 3.1.39, created on 2021-11-06 21:09:47
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6186ef1b1c2817_62157616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea921527d0a89eb10256e18f21e891c839c80637' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/modal.tpl',
      1 => 1636232870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6186ef1b1c2817_62157616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '982105276186ef1b1bd0c2_51566077';
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
                        <?php echo $_smarty_tpl->tpl_vars['zThis']->value["Close"];?>

                    </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['_mForm']->value) {?>
                    <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
                        <span><?php if ($_smarty_tpl->tpl_vars['_mSubmit']->value) {
echo $_smarty_tpl->tpl_vars['_mSubmit']->value;
} else {
echo $_smarty_tpl->tpl_vars['zThis']->value["Accept"];
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
