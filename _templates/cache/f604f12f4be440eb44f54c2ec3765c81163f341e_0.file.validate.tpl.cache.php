<?php
/* Smarty version 3.1.40, created on 2022-01-21 15:41:37
  from '/Users/kerimcanayaz/Sites/ultimate-z/_holders/validate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ead4319bd427_07056523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f604f12f4be440eb44f54c2ec3765c81163f341e' => 
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
function content_61ead4319bd427_07056523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '70370791761ead4319b5ed1_55087852';
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
