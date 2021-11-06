<?php
/* Smarty version 3.1.39, created on 2021-11-06 14:35:13
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/user_card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618692a14879c7_94291033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00713257cf9551af20df90b209cc4ee0ca5ac7bb' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/user_card.tpl',
      1 => 1636207784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618692a14879c7_94291033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '99375321618692a1483962_43299916';
?>

<div class="whiteBack rad-15 pad-20">
    <div class="font0 padB-20">
        <div class="width-70">
            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_picture;?>
.jpg" class="widthAll rad-half">
        </div>
        <div class="floatingSpace padL-85 padT-10">
            <h5 class="top-0 bottom-0 font-20 text4"><?php echo $_smarty_tpl->tpl_vars['zUser']->value->nameSurname;?>
</h5>
            <h6 class="top-0 bottom-0 font-16 text6"><?php echo $_smarty_tpl->tpl_vars['zUser']->value->rank_name;?>
</h6>
        </div>
    </div>

    <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/logout/" class="forceLink weight-400">
        <div class="back5 zHov-back2 animation font-16 centerText whiteText bottom--20 left--20 right--20 pad-8 rad-c3-15 rad-c4-15 zShadow5">
            <i class="fas fa-sign-out-alt"></i>
            <?php echo $_smarty_tpl->tpl_vars['zThis']->value["Log out"];?>

        </div>
    </a>
</div>
<?php }
}
