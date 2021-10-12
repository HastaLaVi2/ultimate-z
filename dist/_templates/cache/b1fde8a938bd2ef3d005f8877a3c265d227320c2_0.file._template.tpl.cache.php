<?php
/* Smarty version 3.1.39, created on 2021-10-12 16:48:11
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/1/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165bc4b846a60_74197719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1fde8a938bd2ef3d005f8877a3c265d227320c2' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_templates/1/_template.tpl',
      1 => 1633642066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_holders/head.tpl' => 1,
    'file:_holders/".((string)$_smarty_tpl->tpl_vars[\'holder\']->value->id)."/_holder.tpl' => 1,
  ),
),false)) {
function content_6165bc4b846a60_74197719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20965047226165bc4b8021d5_55320625';
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['zPage']->value->name;?>
 | <?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>
</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <?php $_smarty_tpl->_subTemplateRender("file:_holders/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
    <?php $_smarty_tpl->_assignInScope('holders', $_smarty_tpl->tpl_vars['zPage']->value->zPageGetHolders($_smarty_tpl->tpl_vars['zContent']->value->language->id,1));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holders']->value, 'holder');
$_smarty_tpl->tpl_vars['holder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['holder']->value) {
$_smarty_tpl->tpl_vars['holder']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holder']->value->content, 'content', false, 'k');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope("_".((string)($_smarty_tpl->tpl_vars['k']->value+1)), ((string)$_smarty_tpl->tpl_vars['content']->value));?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!-- zHolder: <?php echo $_smarty_tpl->tpl_vars['holder']->value->name;?>
 -->
        <?php $_smarty_tpl->_subTemplateRender("file:_holders/".((string)$_smarty_tpl->tpl_vars['holder']->value->id)."/_holder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, true);
?>
        <!-- zHolder: <?php echo $_smarty_tpl->tpl_vars['holder']->value->name;?>
 -->
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html>
<?php }
}
