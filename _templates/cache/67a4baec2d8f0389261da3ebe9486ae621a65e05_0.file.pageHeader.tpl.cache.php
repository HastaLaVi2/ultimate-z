<?php
/* Smarty version 3.1.39, created on 2021-11-02 07:37:51
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/pageHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6180eacf7e6888_43830281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a4baec2d8f0389261da3ebe9486ae621a65e05' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/pageHeader.tpl',
      1 => 1633373917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6180eacf7e6888_43830281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '307877276180eacf7dc904_69115475';
?>

<header class="floatingTheSpace fixed displayNone zMob1200-no index-50">
    <div class="pointThis text5 button-sidebar inLine">
        <i class="fas fa-bars font-25"></i>
    </div>
</header>
<nav class="floatingTheRight top-30 right-30 fixed index-50">
    <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
" target="_blank" class="inLine colTop pointThis right-30 rightText index-10">
        <div class="no zMob768-displayNone">
            <div class="inLine verMid font-15">
                <?php echo $_smarty_tpl->tpl_vars['zThis']->value["View"];?>

                <div class="font-12"><?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>
</div>
            </div>
            <div class="inLine verMid">
                <i class="fas fa-home padL-10 font-1_2em"></i>
            </div>
        </div>
    </a>
    <div id="zUser" class="inLine colTop pointThis zTog-userMenu index-10">
        <div class="inLine colTop rightText padR-15">
            <h5 class="top-0 bottom-0"><?php echo $_smarty_tpl->tpl_vars['zUser']->value->nameSurname;?>
</h5>
            <h6 class="top-0 bottom-0"><?php echo $_smarty_tpl->tpl_vars['zUser']->value->rank_name;?>
</h6>
        </div>
        <div class="inLine width-39">
            <img src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/user/profile/<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_picture;?>
.jpg" class="pagePic widthAll rad-half">
        </div>
    </div>
    <div class="zShow-userMenu displayNone">
        <div class="floatingTheRight whiteBack rad-15 pad-20 index-10 width-250 zShadow font-16">
            <div class="font-14 weight-700 gray3 bottom-10"><?php echo $_smarty_tpl->tpl_vars['zThis']->value["Hello"];?>
, <?php echo $_smarty_tpl->tpl_vars['zUser']->value->name;?>
!</div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
" target="_blank" class="displayNone zMob768-no">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoT boldMin-1">
                    <div class="inLine verMid">
                        <i class="fas fa-home padR-10"></i>
                    </div>
                    <div class="inLine verMid font-15">
                        <?php echo $_smarty_tpl->tpl_vars['zThis']->value["View"];?>

                        <div class="font-12"><?php echo $_smarty_tpl->tpl_vars['z']->value->name;?>
</div>
                    </div>
                </div>
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/profile/">
                <div class="left--20 right--20 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3">
                    <i class="fas fa-id-badge padR-10"></i>
                    <?php echo $_smarty_tpl->tpl_vars['zPageTools']->value->zPageGetPageName("11",$_smarty_tpl->tpl_vars['zUser']->value->id_lang);?>

                </div>
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/logout/" class="forceLink">
                <div class="left--20 right--20 bottom--20 rad-b-15 padTB-10 padLR-20 zHov-grayBack1 animSlow gray3 boldSoG1 boldNoL boldNoR boldNoB boldMin-1">
                    <i class="fas fa-sign-out-alt padR-10"></i>
                    <?php echo $_smarty_tpl->tpl_vars['zThis']->value["Log out"];?>

                </div>
            </a>
        </div>
    </div>
</nav>
<?php }
}
