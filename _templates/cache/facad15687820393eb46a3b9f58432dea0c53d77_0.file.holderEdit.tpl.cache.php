<?php
/* Smarty version 3.1.40, created on 2022-03-10 15:46:18
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/holderEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_622a1d4acbb113_47495791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'facad15687820393eb46a3b9f58432dea0c53d77' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/holderEdit.tpl',
      1 => 1643292542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622a1d4acbb113_47495791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '74606602622a1d4ac92a95_22549828';
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holders']->value, 'holder');
$_smarty_tpl->tpl_vars['holder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['holder']->value) {
$_smarty_tpl->tpl_vars['holder']->do_else = false;
?>
    <div class="zDestroy-holder<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
 grayBack1 pad-40 zMob-pad-20 rad-5 boldMin-1" style="border-color: var(--zFormBorderColor)" data="<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
">
        <h6 class="bottom--10 top--10 left--10 right--10 font-1_5em thinText">
            <?php echo $_smarty_tpl->tpl_vars['holder']->value->name;?>

        </h6>
        <div class="text5 font-25 floatingTheRight pad-32 zMob-pad-20 index-10 top--10 right--10 hideForAdd">
            <span class="pointThis toggleParentNext">
                <i class="fas fa-chevron-down arrows" style="display:none"></i>
                <i class="fas fa-chevron-up arrows"></i>
            </span>
            <a href="#modal<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
" class="zModalLink">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="padT-20 hideForAdd">
            <div class="zModal" id="modal<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
">
                <a class="zCancel" href="#"></a>
                <div class="zModalContent rad-15">
                    <div class="pad-20">
                        <div class="modal-header bg-primary">
                            <h5 class="top-0 bottom-0 font-18">
                                <?php echo smarty_function_zThis(array('z'=>"Delete Holder"),$_smarty_tpl);?>

                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            <?php echo smarty_function_zThis(array('z'=>"Are you sure you want to delete this holder?"),$_smarty_tpl);?>

                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                <?php echo smarty_function_zThis(array('z'=>"Close"),$_smarty_tpl);?>

                            </a>
                            <a class="zButton zHov-zShadow5 primary sweet font-16 zRemove-holder<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
" href="#">
                                <span><?php echo smarty_function_zThis(array('z'=>"Accept"),$_smarty_tpl);?>
</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <input name="id_holder[]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['holder']->value->id;?>
" class="displayNone">
            <input name="id_page_holder[]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['holder']->value->id_page_holder;?>
" class="displayNone">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holder']->value->partials, 'partial', false, 'id');
$_smarty_tpl->tpl_vars['partial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['partial']->value) {
$_smarty_tpl->tpl_vars['partial']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['partial']->value['name']) {?><h5 class="bottom--15 gray2"><?php echo $_smarty_tpl->tpl_vars['partial']->value['name'];?>
</h5><?php }?>
                <div class="hiddenData displayNone">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllLangs(true), 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('h', $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->zPageGetHolder($_smarty_tpl->tpl_vars['l']->value->id,$_smarty_tpl->tpl_vars['holder']->value->id,$_smarty_tpl->tpl_vars['id_block']->value,$_smarty_tpl->tpl_vars['holder']->value->order));?>
                        <textarea name="<?php if ($_smarty_tpl->tpl_vars['partial']->value['type'] == 'image' || $_smarty_tpl->tpl_vars['partial']->value['type'] == 'images') {?>images<?php } else { ?>content<?php }?>[<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
][]" data-type="<?php echo $_smarty_tpl->tpl_vars['partial']->value['type'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['h']->value->partials[$_smarty_tpl->tpl_vars['id']->value]['content'];?>

                        </textarea>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="top-20<?php if ($_smarty_tpl->tpl_vars['partial']->value['type'] == 'link' || $_smarty_tpl->tpl_vars['partial']->value['type'] == 'option' || (($_smarty_tpl->tpl_vars['partial']->value['type'] == 'option' || $_smarty_tpl->tpl_vars['partial']->value['type'] == 'input') && (isset($_smarty_tpl->tpl_vars['partial']->value['multiple'])))) {?> zGroup<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['partial']->value['type'] == "no") {?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['partial']->value['type'] == "input") {?>
                        <input name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest;?>
][]" type="text" class="top-0 index-1 bottom-0 back-white page-title padL-45" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['partial']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2 index-1">
                            <i class="far fa-square"></i>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['partial']->value['type'] == "image") {?>
                        <input class="displayNone" value="<?php echo $_smarty_tpl->tpl_vars['partial']->value['content'];?>
">
                        <input type="file" class="filepond">
                    <?php } elseif ($_smarty_tpl->tpl_vars['partial']->value['type'] == "images") {?>
                        <div class="zTog-imagesFor<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
 pad-10 rad-5 pointThis" style="background:#f0efee">
                            <div class="zShow-imagesFor<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
"><?php echo smarty_function_zThis(array('z'=>"Click to upload your media."),$_smarty_tpl);?>
</div>
                            <div class="zShow-imagesFor<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
 displayNone"><?php echo smarty_function_zThis(array('z'=>"Hide upload panel."),$_smarty_tpl);?>
</div>
                        </div>
                        <div class="displayNone zShow-imagesFor<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
 _top--5">
                            <div class="floatingSpace widthAll height-10 boldMin-1 boldSoG2 boldNoL boldNoR boldNoB index-10" style="background:#f0efee"></div>
                            <input class="displayNone" value="<?php echo $_smarty_tpl->tpl_vars['partial']->value['content'];?>
" data-multi="true">
                            <input type="file" class="filepond">
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['partial']->value['type'] == "categorylist") {?>
                        <?php $_smarty_tpl->_assignInScope('allcats', $_smarty_tpl->tpl_vars['zCategoryTools']->value->zCategoryGetAll($_smarty_tpl->tpl_vars['zContent']->value->language->id));?>
                        <select class="pad-10 top-0 bottom-0 zCategory" name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest;?>
][]" style="background-color: white">
                            <option disabled><?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcats']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['partial']->value['content'] == $_smarty_tpl->tpl_vars['cat']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value->name;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php } elseif ($_smarty_tpl->tpl_vars['partial']->value['type'] == "link") {?>
                        <?php $_smarty_tpl->_assignInScope('contents', explode(";",$_smarty_tpl->tpl_vars['partial']->value['content']));?>
                        <label class="back7 borderForm boldMin-1 boldNoR pad-16 text6">
                            <?php echo smarty_function_zThis(array('z'=>"Link"),$_smarty_tpl);?>

                        </label>
                        <input name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest;?>
][]" type="text" class="zLink1 back-white top-0 bottom-0" placeholder="<?php echo smarty_function_zThis(array('z'=>"Link"),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['contents']->value[0];?>
">
                        <input type="text" class="zLink2 back-white top-0 bottom-0" placeholder="<?php echo smarty_function_zThis(array('z'=>"Button"),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['contents']->value[1];?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['partial']->value['type'] == "option") {?>
                        <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                            <?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>

                        </label>
                        <select class="zSelect index-1 pad-10 top-0 bottom-0" style="background-color:white" name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest;?>
][]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partial']->value["options"], 'option', false, 'key');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" <?php if (($_smarty_tpl->tpl_vars['key']->value+1) == $_smarty_tpl->tpl_vars['partial']->value['content']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php } else { ?>
                        <textarea class="summernote" name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest;?>
][]"><?php echo $_smarty_tpl->tpl_vars['partial']->value['content'];?>
</textarea>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['partial']->value['type'] == 'option' || $_smarty_tpl->tpl_vars['partial']->value['type'] == 'input') && (isset($_smarty_tpl->tpl_vars['partial']->value['multiple']))) {?>
                    <div class="multiple back7 borderForm boldMin-1 padTB-10 padLR-20 text6 pointThis index-0">
                        <div class="hollyMid"><i class="fas fa-plus"></i></div>
                    </div>
                    <?php }?>
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['partial']->value['multiple']))) {?>
                <div class="multipleDive"></div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php $_smarty_tpl->_assignInScope('modalNumber', $_smarty_tpl->tpl_vars['modalNumber']->value+1 ,false ,32);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
