<?php
/* Smarty version 3.1.40, created on 2022-01-10 20:11:04
  from '/Users/kerimcanayaz/Sites/ultimate-z/_holders/2/_holder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dc92d82c5f31_59685134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '626c299bef372eef9f643e344665241cf0ea7a51' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/2/_holder.tpl',
      1 => 1633642248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dc92d82c5f31_59685134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '175161997961dc92d82bd3d4_50737034';
?>

<div class="pad-40">
    <?php if (substr($_smarty_tpl->tpl_vars['_1']->value,-3) == "mp4") {?>
    <video class="widthAll rad-20 hideRest" preload="auto" muted="" autoplay="" loop="" playsinline="" oncanplay="this.play()">
        <source src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["media"];?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['zPage']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['_1']->value;?>
" type="video/mp4"/>
    </video>
    <?php } else { ?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['zPage']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['_1']->value;?>
" class="widthAll rad-20">
    <?php }?>
</div>
<?php }
}
