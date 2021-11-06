<?php
/* Smarty version 3.1.39, created on 2021-11-06 14:35:13
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618692a14a64d7_16447302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c98e242087fd8cf119847a5ffb011fca48c94fb' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/statistics.tpl',
      1 => 1626945324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618692a14a64d7_16447302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1402626774618692a149fe23_16706809';
?>

<div class="col-4 colTop padLR-20 zMob-padB-20 font-24">
    <div class="whiteBack rad-15 pad-20 padL-2_3em">
        <i class="fas fa-eye floatingSpace top-1em pad-13 whiteText rad-10 left--10" style="background: #9694ff"></i>
        <h6 class="text6 weight-600 top-0 bottom-10"><?php echo $_smarty_tpl->tpl_vars['zThis']->value["Total Page Views"];?>
</h6>
        <h6 class="top-0 bottom-0"><?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsViewsTotal();?>
</h6>
    </div>
</div>
<div class="col-4 colTop padLR-10 zMob-padB-20 font-24">
    <div class="whiteBack rad-15 pad-20 padL-2_3em">
        <i class="fas fa-user floatingSpace top-1em pad-13 whiteText rad-10 left--10" style="background: #57caeb"></i>
        <h6 class="text6 weight-600 top-0 bottom-10"><?php echo $_smarty_tpl->tpl_vars['zThis']->value["Total Users"];?>
</h6>
        <h6 class="top-0 bottom-0"><?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsUsersTotal();?>
</h6>
    </div>
</div>
<div class="col-4 colTop padL-20 zMob-padB-20 font-24">
    <div class="whiteBack rad-15 pad-20 padL-2_3em">
        <i class="fas fa-bookmark floatingSpace top-1em pad-13 whiteText rad-10 left--10" style="background: #ff7976"></i>
        <h6 class="text6 weight-600 top-0 bottom-10"><?php echo $_smarty_tpl->tpl_vars['zThis']->value["Total Pages"];?>
</h6>
        <h6 class="top-0 bottom-0"><?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsPagesTotal();?>
</h6>
    </div>
</div>
<?php }
}
