<?php
/* Smarty version 3.1.40, created on 2021-12-30 14:29:13
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/users/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61cdc239e53925_59147928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ae439147dc1428b2e4dff3e2cbb825fe2044c5' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/users/_template.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cdc239e53925_59147928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '180036681461cdc239e07590_30178092';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150794131161cdc239e2b519_74700729', "zTop");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205227477861cdc239e31b81_02639780', "zContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zTop"} */
class Block_150794131161cdc239e2b519_74700729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_150794131161cdc239e2b519_74700729',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["holders"])."/validate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "zTop"} */
/* {block "zContent"} */
class Block_205227477861cdc239e31b81_02639780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_205227477861cdc239e31b81_02639780',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <?php $_smarty_tpl->_assignInScope('allUsers', $_smarty_tpl->tpl_vars['zUserTools']->value->zUserGetAll());?>
    <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success']->value,$_smarty_tpl->tpl_vars['error']->value);?>

    <div class="betwixt-10 bottom-10">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUsers']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <div class="col-4 bottom-20">
                <?php if ($_smarty_tpl->tpl_vars['zUser']->value->id !== $_smarty_tpl->tpl_vars['user']->value->id) {?>
                <div class="floatingTheRight top--10">
                    <a href="#modal<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="zButton primary index-2 rad-30 padLR-9 padT-0 padB-2 centerText">
                        <i class="fas fa-times font-12"></i>
                    </a>
                </div>
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/profile/index.php?id_user=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                    <div class="whiteBack rad-15 pad-20">
                        <div class="inLine verMid width-70">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_picture;?>
.jpg" class="widthAll rad-half">
                        </div>
                        <div class="floatingSpace row-12 padL-110">
                            <div class="hollyMid">
                                <h5 class="top-0 bottom-0 font-20 text4"><?php echo $_smarty_tpl->tpl_vars['user']->value->nameSurname;?>
</h5>
                                <h6 class="top-0 bottom-0 font-16 text6"><?php echo $_smarty_tpl->tpl_vars['user']->value->rank_name;?>
</h6>
                            </div>
                        </div>
                        <div class="floatingTheRight row-12 padR-20">
                            <div class="hollyMid">
                                <i class="fas fa-chevron-right font-22 text6"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <a class="zButton zShadow5 primary sweet font-16 index-2 widthAll" href="#modalzCreate">
        <?php echo smarty_function_zThis(array('z'=>"Add a User"),$_smarty_tpl);?>

    </a>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUsers']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <?php ob_start();
echo smarty_function_zThis(array('z'=>"Delete"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Delete User"),$_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Are you sure you want to delete this user?"),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mSubmit'=>$_prefixVariable1,'_mForm'=>$_smarty_tpl->tpl_vars['zContent']->value->base_uri,'_mLabel'=>$_smarty_tpl->tpl_vars['user']->value->id,'_mTitle'=>$_prefixVariable2,'_mHidden'=>"<input type='text' name='user_delete' value='true'><input type='text' name='id_user' value='".((string)$_smarty_tpl->tpl_vars['user']->value->id)."'>",'_mContent'=>$_prefixVariable3), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php ob_start();
echo smarty_function_zThis(array('z'=>"Create"),$_smarty_tpl);
$_prefixVariable4 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Add a User"),$_smarty_tpl);
$_prefixVariable5 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Name"),$_smarty_tpl);
$_prefixVariable6=ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Surname"),$_smarty_tpl);
$_prefixVariable7=ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Rank"),$_smarty_tpl);
$_prefixVariable8=ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);
$_prefixVariable9=ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Email"),$_smarty_tpl);
$_prefixVariable10=ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Password"),$_smarty_tpl);
$_prefixVariable11=ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Confirm Password"),$_smarty_tpl);
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mSubmit'=>$_prefixVariable4,'_mForm'=>$_smarty_tpl->tpl_vars['zContent']->value->base_uri,'_mLabel'=>'zCreate','_mTitle'=>$_prefixVariable5,'_mFormId'=>"zUser-create-form",'_mHidden'=>"<input type='text' name='langcode' value='".((string)$_smarty_tpl->tpl_vars['zContent']->value->language->id)."'>",'_mContent'=>"
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='name'>
                ".$_prefixVariable6."
            </label>
            <input type='text' id='name' name='name' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='surname'>
                ".$_prefixVariable7."
            </label>
            <input type='text' id='surname' name='surname' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='rank'>
                ".$_prefixVariable8."
            </label>
            <select name='rank' class='top-0 bottom-0 pad-10' id='rank'>
                <option disabled>".$_prefixVariable9."</option>
                ".((string)$_smarty_tpl->tpl_vars['zTools']->value->zToolsGetRanks($_smarty_tpl->tpl_vars['zContent']->value->language->id))."
            </select>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='email'>
                ".$_prefixVariable10."
            </label>
            <input type='text' id='email' name='email' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='password'>
                ".$_prefixVariable11."
            </label>
            <input type='password' id='password' name='password' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='confirm_password'>
                ".$_prefixVariable12."
            </label>
            <input type='password' id='confirm_password' name='confirm_password' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        "), 0, true);
}
}
/* {/block "zContent"} */
}
