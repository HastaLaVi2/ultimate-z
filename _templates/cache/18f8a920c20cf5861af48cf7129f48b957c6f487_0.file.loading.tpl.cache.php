<?php
/* Smarty version 3.1.40, created on 2021-12-25 08:52:07
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/loading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c6dbb7d86563_26472592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f8a920c20cf5861af48cf7129f48b957c6f487' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/loading.tpl',
      1 => 1640421401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c6dbb7d86563_26472592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '55597697661c6dbb7d84377_54092547';
?>

<div id="zLoad1" class="floatingSpace displayNone mortalW-8 widthAll heightAll fixed font-24 index-12"></div>
<div id="zLoad2" class="floatingSpace displayNone back7 widthAll heightAll fixed font-24 index-13 <?php if ($_smarty_tpl->tpl_vars['zAdmin']->value) {?>padL-332 zMob1200-padL-0<?php }?>">
    <div class="hollyMid">
        <center>
            <div class="clockInfinite back6 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
            <div class="xclockInfinite back2 top--90 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
        </center>
    </div>
</div>

<div id="zLoad0_1" class="zPreLoadOut floatingSpace widthAll heightAll"></div>
<div id="zLoad0_2" class="zPreLoadIn back7 floatingSpace widthAll heightAll">
    <div class="hollyMid">
        <center>
            <div class="clockInfinite back6 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
            <div class="xclockInfinite back2 top--90 square-90 rad-20 pad-3">
                <div class="back7 widthAll row-12 rad-17"></div>
            </div>
            <div class="padT-20 text1">
                <?php if ($_smarty_tpl->tpl_vars['zAdmin']->value) {?>ultimate Z<?php } else {
echo $_smarty_tpl->tpl_vars['z']->value->name;
}?>
            </div>
        </center>
    </div>
</div>
<?php }
}
