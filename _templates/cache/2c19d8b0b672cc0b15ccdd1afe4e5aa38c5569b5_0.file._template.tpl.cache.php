<?php
/* Smarty version 3.1.40, created on 2022-01-26 10:55:25
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/login/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61f1289d2c6145_13531602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c19d8b0b672cc0b15ccdd1afe4e5aa38c5569b5' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/login/_template.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f1289d2c6145_13531602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '201123429561f1289d29f2c5_26861040';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | <?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>
</title>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["holders"])."/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["holders"])."/validate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</head>
<body class="zBack">
    <div class="col-12 heightMinAll">
        <div class="width-600 zMob-widthAll heightMinAll index-5 whiteBack">
            <div class="padLR-128 zMob768-padLR-40 padTB-80">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <h1 class="font-64 boldText"><?php echo smarty_function_zThis(array('z'=>"Log in"),$_smarty_tpl);?>
.</h1>
                <p class="font-27_2 gray2 bottom-48"><?php echo smarty_function_zThis(array('z'=>"Input your data to create your own control panel."),$_smarty_tpl);?>
</p>

                <form id="zUser-login-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success']->value,$_smarty_tpl->tpl_vars['error']->value);?>

                    <div>
                        <input name="name" id="name" type="text" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"Name"),$_smarty_tpl);?>
">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <input name="surname" id="surname" type="text" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"Surname"),$_smarty_tpl);?>
">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <input name="password" id="password" type="password" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"Password"),$_smarty_tpl);?>
">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="bottom-25">
                        <input type="checkbox" value="1" name="keepLoggedIn" id="keepLoggedIn">
                        <label class="top--8" for="keepLoggedIn">
                            <?php echo smarty_function_zThis(array('z'=>"Keep me logged in"),$_smarty_tpl);?>

                        </label>
                    </div>
                    <button id="btnSubmit" class="zButton primary widthAll zShadow5"><?php echo smarty_function_zThis(array('z'=>"Log in"),$_smarty_tpl);?>
</button>
                </form>
                <p class="font-27_2 gray2 top-20 bottom-48">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["main"];?>
_admin/forgot/" class="forceLink"><?php echo smarty_function_zThis(array('z'=>"Forgot your password?"),$_smarty_tpl);?>
</a>
                </p>
                <div class="centerText top-48 font-24">
                    <p class="gray3"><?php echo smarty_function_zThis(array('z'=>"Thanks for choosing"),$_smarty_tpl);?>
,<br><span class="boldText"><?php echo smarty_function_zThis(array('z'=>"ultimate Z."),$_smarty_tpl);?>
</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php }
}
