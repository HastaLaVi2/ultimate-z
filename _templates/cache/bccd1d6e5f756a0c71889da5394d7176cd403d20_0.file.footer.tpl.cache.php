<?php
/* Smarty version 3.1.40, created on 2022-01-10 17:45:38
  from '/Users/kerimcanayaz/Sites/ultimate-z/_holders/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dc70c22d9075_03252314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bccd1d6e5f756a0c71889da5394d7176cd403d20' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/footer.tpl',
      1 => 1630787909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dc70c22d9075_03252314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '125633326861dc70c22d6db2_68582260';
?>

<?php if (!$_smarty_tpl->tpl_vars['zAdmin']->value) {?>
    
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['zAdmin']->value) {?>
    <!-- toastify -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/toastify/toastify.js"><?php echo '</script'; ?>
>
<?php }
}
}
