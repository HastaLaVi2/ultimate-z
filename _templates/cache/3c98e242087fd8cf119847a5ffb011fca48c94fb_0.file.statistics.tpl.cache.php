<?php
/* Smarty version 3.1.40, created on 2022-01-10 20:49:35
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dc9bdf4805d7_25014589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c98e242087fd8cf119847a5ffb011fca48c94fb' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/statistics.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dc9bdf4805d7_25014589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '139379031061dc9bdf47cdf1_08160870';
?>

<div class="col-4 colTop padLR-20 zMob-padB-20 font-24">
    <div class="whiteBack rad-15 pad-20 padL-2_3em">
        <i class="fas fa-eye floatingSpace top-1em pad-13 whiteText rad-10 left--10" style="background: #9694ff"></i>
        <h6 class="text6 weight-600 top-0 bottom-10"><?php echo smarty_function_zThis(array('z'=>"Total Page Views"),$_smarty_tpl);?>
</h6>
        <h6 class="top-0 bottom-0"><?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsViewsTotal();?>
</h6>
    </div>
</div>
<div class="col-4 colTop padLR-10 zMob-padB-20 font-24">
    <div class="whiteBack rad-15 pad-20 padL-2_3em">
        <i class="fas fa-user floatingSpace top-1em pad-13 whiteText rad-10 left--10" style="background: #57caeb"></i>
        <h6 class="text6 weight-600 top-0 bottom-10"><?php echo smarty_function_zThis(array('z'=>"Total Users"),$_smarty_tpl);?>
</h6>
        <h6 class="top-0 bottom-0"><?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsUsersTotal();?>
</h6>
    </div>
</div>
<div class="col-4 colTop padL-20 zMob-padB-20 font-24">
    <div class="whiteBack rad-15 pad-20 padL-2_3em">
        <i class="fas fa-bookmark floatingSpace top-1em pad-13 whiteText rad-10 left--10" style="background: #ff7976"></i>
        <h6 class="text6 weight-600 top-0 bottom-10"><?php echo smarty_function_zThis(array('z'=>"Total Pages"),$_smarty_tpl);?>
</h6>
        <h6 class="top-0 bottom-0"><?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsPagesTotal();?>
</h6>
    </div>
</div>
<?php }
}
