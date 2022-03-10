<?php
/* Smarty version 3.1.40, created on 2022-02-11 17:46:23
  from '/Users/kerimcanayaz/Sites/ultimate-z/_holders/validate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6206a0ef682d89_54636382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bd0e2719a892db38dab6724a7e8972cb4d0fbb9' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/validate.tpl',
      1 => 1627811510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6206a0ef682d89_54636382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '16680766216206a0ef67dbd7_35144403';
?>

<!-- form validation -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/jquery/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var formMessages = {
    name_req: "<?php echo smarty_function_zThis(array('z'=>'Please enter a name.'),$_smarty_tpl);?>
",
    name_remote: "<?php echo smarty_function_zThis(array('z'=>'A user with the exact name provided already exists.'),$_smarty_tpl);?>
",
    surname_req: "<?php echo smarty_function_zThis(array('z'=>'Please enter a surname.'),$_smarty_tpl);?>
",
    email_req: "<?php echo smarty_function_zThis(array('z'=>'Please enter an email.'),$_smarty_tpl);?>
",
    password_req: "<?php echo smarty_function_zThis(array('z'=>'Please enter a password.'),$_smarty_tpl);?>
",
    confirm_password_req: "<?php echo smarty_function_zThis(array('z'=>'Please enter password again.'),$_smarty_tpl);?>
",
    confirm_password_equal: "<?php echo smarty_function_zThis(array('z'=>'Passwords do not match.'),$_smarty_tpl);?>
",
    rank_req: "<?php echo smarty_function_zThis(array('z'=>'Please choose a rank.'),$_smarty_tpl);?>
",
    site_name_req: "<?php echo smarty_function_zThis(array('z'=>'Please enter a site name.'),$_smarty_tpl);?>
"
};
var zUsers = <?php echo $_smarty_tpl->tpl_vars['zValidate']->value;?>
;
$.validator.addMethod("alreadyexist", function(value, element, parameter) {
    return zUsers.indexOf(parameter[0] + " " + parameter[1]) == -1;
}, formMessages.name_remote);
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/validation.js"><?php echo '</script'; ?>
>
<?php }
}
