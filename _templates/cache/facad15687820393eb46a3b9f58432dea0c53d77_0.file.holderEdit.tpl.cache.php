<?php
/* Smarty version 3.1.39, created on 2021-11-06 13:14:33
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/holderEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61867fb91fa127_17485562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'facad15687820393eb46a3b9f58432dea0c53d77' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_partials/holderEdit.tpl',
      1 => 1632988440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61867fb91fa127_17485562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '74091709561867fb91d7038_77732820';
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
                                <?php echo $_smarty_tpl->tpl_vars['zThis']->value["Delete Holder"];?>

                            </h5>
                        </div>
                        <div class="gray2 font-15 padTB-20">
                            <?php echo $_smarty_tpl->tpl_vars['zThis']->value["Are you sure you want to delete this holder?"];?>

                        </div>
                        <div class="rightText">
                            <a class="zButton backTrans boldMin-0 sweet font-16" href="#">
                                <?php echo $_smarty_tpl->tpl_vars['zThis']->value["Close"];?>

                            </a>
                            <a class="zButton primary sweet font-16 zRemove-holder<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
" href="#">
                                <span><?php echo $_smarty_tpl->tpl_vars['zThis']->value["Accept"];?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holder']->value->content, 'content', false, 'key');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
                <div class="hiddenData displayNone">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllLangs(), 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('h', $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->zPageGetHolder($_smarty_tpl->tpl_vars['l']->value->id,$_smarty_tpl->tpl_vars['holder']->value->id,$_smarty_tpl->tpl_vars['id_block']->value,$_smarty_tpl->tpl_vars['holder']->value->order));?>
                        <textarea name="<?php if ($_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value] == 'image' || $_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value] == 'images') {?>images<?php } else { ?>content<?php }?>[<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
][]" data-type="<?php echo $_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['h']->value->content[$_smarty_tpl->tpl_vars['key']->value];?>

                        </textarea>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value] == "no") {?>
                <?php } elseif ($_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value] == "input") {?>
                    <div class="top-20">
                        <input name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang;?>
][]" type="text" class="back-white page-title padL-45" value="<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-square"></i>
                        </div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value] == "image") {?>
                    <div class="top-20">
                        <input class="displayNone" value="<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
">
                        <input type="file" class="filepond">
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value] == "images") {?>
                    <div class="top-20">
                        <input class="displayNone" value="<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
" data-multi="true">
                        <input type="file" class="filepond">
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value] == "categorylist") {?>
                    <?php $_smarty_tpl->_assignInScope('allcats', $_smarty_tpl->tpl_vars['zCategoryTools']->value->zCategoryGetAll($_smarty_tpl->tpl_vars['zContent']->value->language->id));?>
                    <div class="top-20">
                        <select class="pad-10 top-0 bottom-0 zCategory" name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang;?>
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
" <?php if ($_smarty_tpl->tpl_vars['content']->value == $_smarty_tpl->tpl_vars['cat']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value->name;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['holder']->value->types[$_smarty_tpl->tpl_vars['key']->value] == "link") {?>
                    <?php $_smarty_tpl->_assignInScope('contents', explode(";",$_smarty_tpl->tpl_vars['content']->value));?>
                    <div class="zGroup top-20">
                        <label class="back7 borderForm boldMin-1 boldNoR pad-16 text6">
                            <?php echo smarty_function_zThis(array('z'=>"Link"),$_smarty_tpl);?>

                        </label>
                        <input name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang;?>
][]" type="text" class="zLink1 back-white top-0 bottom-0" placeholder="<?php echo smarty_function_zThis(array('z'=>"Link"),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['contents']->value[0];?>
">
                        <input type="text" class="zLink2 back-white top-0 bottom-0" placeholder="<?php echo smarty_function_zThis(array('z'=>"Button"),$_smarty_tpl);?>
" value="<?php echo $_smarty_tpl->tpl_vars['contents']->value[1];?>
">
                    </div>
                <?php } else { ?>
                    <div class="top-20">
                        <textarea class="summernote" name="zContent[<?php echo $_smarty_tpl->tpl_vars['zUser']->value->id_lang;?>
][]"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
                    </div>
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
