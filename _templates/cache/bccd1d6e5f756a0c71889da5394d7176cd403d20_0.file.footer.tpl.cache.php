<?php
/* Smarty version 3.1.39, created on 2021-11-02 07:37:51
  from '/Users/kerimcanayaz/Sites/ultimate-z/_holders/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6180eacf808aa9_36910220',
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
function content_6180eacf808aa9_36910220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10681361546180eacf8068a5_72527770';
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
