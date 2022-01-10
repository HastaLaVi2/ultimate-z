<?php
/* Smarty version 3.1.40, created on 2022-01-10 17:45:38
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dc70c221ebb9_25088387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee145e4b305193bfa0799dbe5399d0e2b0bf7047' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/sidebar.tpl',
      1 => 1640422377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/logo.tpl' => 1,
  ),
),false)) {
function content_61dc70c221ebb9_25088387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),1=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageUrl.php','function'=>'smarty_function_zPageUrl',),2=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageName.php','function'=>'smarty_function_zPageName',),));
$_smarty_tpl->compiled->nocache_hash = '129410809561dc70c21f0437_70377356';
?>

<div id="zSidebar" class="toggle-sidebar width-320 heightAll animSlow index-100 colTop fixed pad-20">
    <div class="pad-32 row-12 weight-900 whiteBack rad-20 no zMob1200-zShadow hideScroll">
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="top-40">
            <ul class="cleanList font-16">
                <li class="text4 padLR-1rem weight-600"><?php echo smarty_function_zThis(array('z'=>"Menu"),$_smarty_tpl);?>
</li>

                <li class="top-0_5rem padTB-5">
                    <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"1"),$_smarty_tpl);?>
" class="pad-13 rad-10 blockThis <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideColor(array(1),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                        <i class="fas fa-th-large <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideIconColor(array(1),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
"></i>
                        <span class="padL-15"><?php echo smarty_function_zPageName(array('ID'=>"1"),$_smarty_tpl);?>
</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="#" class="pad-13 rad-10 blockThis zTogDown-side1 <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideColor(array(4,5,6,7,8,9,17,18),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                        <i class="fas fa-layer-group <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideIconColor(array(4,5,6,7,8,9,17,18),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
"></i>
                        <span class="padL-15"><?php echo smarty_function_zThis(array('z'=>"Layouts"),$_smarty_tpl);?>
</span>
                        <i class="fas fa-chevron-down inRight top-3 <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideIconColor(array(4,5,6,7,8,9,17,18),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
"></i>
                    </a>
                    <ul class="zShow-side1 font-13 padL-2rem left-2rem <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideToggleOpt(array(4,5,6,7,8,9,17,18),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                        <li class="weight-600">
                            <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"17"),$_smarty_tpl);?>
" class="weight-700 <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideLinkItem(array(17,18),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                                <?php echo smarty_function_zPageName(array('ID'=>"17"),$_smarty_tpl);?>

                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"6"),$_smarty_tpl);?>
/index.php" class="weight-700 <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideLinkItem(array(4,5,6),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                                <?php echo smarty_function_zPageName(array('ID'=>"6"),$_smarty_tpl);?>

                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"9"),$_smarty_tpl);?>
/index.php" class="weight-700 <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideLinkItem(array(7,8,9),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                                <?php echo smarty_function_zPageName(array('ID'=>"9"),$_smarty_tpl);?>

                            </a>
                        </li>
                    </ul>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"16"),$_smarty_tpl);?>
" class="pad-13 rad-10 blockThis <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideColor(array(16),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                        <i class="fas fa-photo-video <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideIconColor(array(16),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
"></i>
                        <span class="padL-15"><?php echo smarty_function_zPageName(array('ID'=>"16"),$_smarty_tpl);?>
</span>
                    </a>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['zUser']->value->id_rank == "1") {?>
                <li class="text4 padLR-1rem weight-600 padT-30"><?php echo smarty_function_zPageName(array('ID'=>"10"),$_smarty_tpl);?>
</li>

                <li class="top-0_5rem padTB-5">
                    <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"10"),$_smarty_tpl);?>
" class="pad-13 rad-10 blockThis <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideColor(array(10),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                        <i class="fas fa-cog <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideIconColor(array(10),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
"></i>
                        <span class="padL-15"><?php echo smarty_function_zPageName(array('ID'=>"10"),$_smarty_tpl);?>
</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"15"),$_smarty_tpl);?>
" class="pad-13 rad-10 blockThis <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideColor(array(15),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                        <i class="fas fa-users <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideIconColor(array(15),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
"></i>
                        <span class="padL-15"><?php echo smarty_function_zPageName(array('ID'=>"15"),$_smarty_tpl);?>
</span>
                    </a>
                </li>

                <li class="text4 padLR-1rem weight-600 padT-30"><?php echo smarty_function_zThis(array('z'=>"Advanced"),$_smarty_tpl);?>
</li>

                <li class="top-0_5rem padTB-5">
                    <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"13"),$_smarty_tpl);?>
" class="pad-13 rad-10 blockThis <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideColor(array(13,14),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                        <i class="fas fa-server <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideIconColor(array(13,14),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
"></i>
                        <span class="padL-15"><?php echo smarty_function_zPageName(array('ID'=>"13"),$_smarty_tpl);?>
</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"12"),$_smarty_tpl);?>
" class="pad-13 rad-10 blockThis <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideColor(array(12),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
">
                        <i class="fas fa-terminal <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsSideIconColor(array(12),$_smarty_tpl->tpl_vars['zPage']->value->id);?>
"></i>
                        <span class="padL-15"><?php echo smarty_function_zPageName(array('ID'=>"12"),$_smarty_tpl);?>
</span>
                    </a>
                </li>
                <?php }?>

            </ul>
        </div>
    </div>
    <div class="text5 font-25 floatingTheRight pad-32 displayNone zMob1200-no">
        <i class="button-sidebar-in pointThis fas fa-times"></i>
    </div>
</div>
<?php echo '<script'; ?>
>
function sidebarBtn() {
    if ($(window).width() < 1200) {
        $(".toggle-sidebar").css("margin-left", "-320px");
    } else {
        $(".toggle-sidebar").css("margin-left", "0");
    }
}

$(document).ready(function() {
    sidebarBtn();
    $(".button-sidebar").click(function() {
        $(".toggle-sidebar").css("margin-left", "0");
    });

    $(".button-sidebar-in").click(function() {
        $(".toggle-sidebar").css("margin-left", "-320px");
    });
});

$(window).resize(function(){
    sidebarBtn();
});
<?php echo '</script'; ?>
>
<?php }
}
