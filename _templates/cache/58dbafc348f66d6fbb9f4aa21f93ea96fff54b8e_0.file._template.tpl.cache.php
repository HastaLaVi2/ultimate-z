<?php
/* Smarty version 3.1.40, created on 2022-03-10 15:46:18
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/edit/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_622a1d4ab4a736_48585350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58dbafc348f66d6fbb9f4aa21f93ea96fff54b8e' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/edit/_template.tpl',
      1 => 1644576233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/modal.tpl' => 1,
  ),
),false)) {
function content_622a1d4ab4a736_48585350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '1254541247622a1d4aac4043_34482010';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1850132907622a1d4aadf827_27948147', "zTop");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_764342400622a1d4aae8179_38395953', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1326274247622a1d4ab2db49_00269710', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zTop"} */
class Block_1850132907622a1d4aadf827_27948147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_1850132907622a1d4aadf827_27948147',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/summernote/summernote-lite.min.css">

    <!-- filepond -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.css">
    <style>
    .hideForAddTop .hideForAdd { display: none;}
    .note-btn { font-size: 12px !important; height: auto !important; padding: 8px !important;}
    </style>
<?php
}
}
/* {/block "zTop"} */
/* {block "zContent"} */
class Block_764342400622a1d4aae8179_38395953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_764342400622a1d4aae8179_38395953',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageUrl.php','function'=>'smarty_function_zPageUrl',),1=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageName.php','function'=>'smarty_function_zPageName',),2=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="col-12">
        <nav>
            <ol class="cleanList">
                <li><a href="<?php echo smarty_function_zPageUrl(array('ID'=>"6"),$_smarty_tpl);?>
/index.php" class="inLine font-16">
                    <i class="fas fa-caret-left"></i>
                    <?php echo smarty_function_zPageName(array('ID'=>"6"),$_smarty_tpl);?>

                </a></li>
            </ol>
        </nav>

        <div class="whiteBack rad-15 pad-20 font-16">
            <form id="zPage-edit-form" class="zForm" method="POST" role="form" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success']->value,$_smarty_tpl->tpl_vars['error']->value);?>

                <div>
                    <div class="inLeft index-10">
                        <h4 class="font-19 top-0 bottom-0 text6 boldText"><?php echo smarty_function_zThis(array('z'=>"Editing page:"),$_smarty_tpl);?>
</h4>
                        <h4 class="font-19 top-0 text4 boldText">
                            <?php echo $_smarty_tpl->tpl_vars['zPageTools']->value->zPageGetPageName($_GET['id_page'],$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest);?>

                            <span class="font-14"><a href="<?php echo smarty_function_zPageUrl(array('ID'=>$_GET['id_page']),$_smarty_tpl);?>
" target="_blank">[<?php echo smarty_function_zThis(array('z'=>"View Page"),$_smarty_tpl);?>
]</a></span>
                        </h4>
                    </div>
                    <div class="rightText padB-15">
                        <div class="inLine width-350 zMob-widthAll">
                            <div class="zGroup bottom-20">
                                <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="id_lang">
                                    <?php echo smarty_function_zThis(array('z'=>"Select Language"),$_smarty_tpl);?>

                                </label>
                                <select class="zSelect pad-10 top-0 bottom-0" id="change_lang" name="change_lang">
                                    <option disabled><?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>
</option>
                                    <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetLanguages($_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest,true);?>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div><input name="id_page" id="id_page" type="text" value="<?php echo $_GET['id_page'];?>
" style="display:none"></div>
                <div class="col-8 colTop padR-10 padT-10" zMob-1024="padR-0">
                    <h6 class="bottom-10 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"Title"),$_smarty_tpl);?>
</h6>
                    <div class="bottom-10">
                        <input name="page_url" id="page_url" type="text" class="padL-45" value="<?php echo $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest]->url;?>
" placeholder="<?php echo smarty_function_zThis(array('z'=>"URL with / at start"),$_smarty_tpl);?>
">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-file-code"></i>
                        </div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllLangs(true), 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <div class="divFor<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
 divFor" style="<?php if ($_smarty_tpl->tpl_vars['l']->value->id !== $_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest) {?>display: none<?php }?>">
                            <div><input name="id_lang[<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
]" id="id_lang_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
"
                                        type="text" value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" style="display:none"></div>
                            <div class="bottom-10">
                                <input name="page_name[<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
]" id="page_name_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" type="text"
                                       class="padL-45" value="<?php echo $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->name;?>
" placeholder="<?php echo smarty_function_zThis(array('z'=>"Title"),$_smarty_tpl);?>
">
                                <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <h6 class="bottom-10 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"Meta Description"),$_smarty_tpl);?>
</h6>
                    <p class="font-13 bottom-0"><?php echo smarty_function_zThis(array('z'=>"If you do not enter a meta description, the first text on the page will be used."),$_smarty_tpl);?>
</p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllLangs(true), 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <div class="divFor<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
 divFor" style="<?php if ($_smarty_tpl->tpl_vars['l']->value->id !== $_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest) {?>display: none<?php }?>">
                            <div class="bottom-10">
                                <input name="page_meta[<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
]" id="page_meta_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" type="text" class="padL-45" value="<?php echo $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->meta;?>
">
                                <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                    <i class="fas fa-keyboard"></i>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['z']->value->eCommerce) {?>
                    <h6 class="bottom-10 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"E-commerce Options"),$_smarty_tpl);?>
</h6>
                    <div>
                        <input class="zSwitch" type="checkbox" name="is_product" id="is_product"
                        <?php if ($_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->is_product) {?>value="enabled" checked<?php }?>>
                        <label for="is_product"><?php echo smarty_function_zThis(array('z'=>"This is a product page"),$_smarty_tpl);?>
</label>
                        <div class="font-13"><?php echo smarty_function_zThis(array('z'=>"Determine whether the page is a product page or not."),$_smarty_tpl);?>
</div>
                    </div>
                    <?php }?>
                </div>
                <div class="col-4 colTop padL-10 padT-10" zMob-1024="padL-0">
                    <h6 class="bottom-12 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"Status"),$_smarty_tpl);?>
</h6>
                    <div>
                        <input class="zSwitch" type="checkbox" name="page_status" id="page_status"
                        <?php if ($_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->status) {?>value="enabled" checked<?php }?>>
                        <label for="page_status"><?php echo smarty_function_zThis(array('z'=>"Page status"),$_smarty_tpl);?>
</label>
                        <div class="font-13"><?php echo smarty_function_zThis(array('z'=>"Determine whether the page should active or not."),$_smarty_tpl);?>
</div>
                    </div>
                    <h6 class="bottom-12 top-12 font-1em"><?php echo smarty_function_zThis(array('z'=>"Subpage"),$_smarty_tpl);?>
</h6>
                    <div>
                        <input class="zSwitch" type="checkbox" name="not_a_subpage" id="not_a_subpage"
                        <?php if (!$_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->isSubpage) {?>value="enabled" checked<?php }?>>
                        <label for="not_a_subpage"><?php echo smarty_function_zThis(array('z'=>"Not a subpage."),$_smarty_tpl);?>
</label>
                        <div class="font-13"><?php echo smarty_function_zThis(array('z'=>"Uncheck this switch, if you want this page to be a subpage of another."),$_smarty_tpl);?>
</div>
                    </div>
                    <select class="zSelect pad-10 top-12 bottom-20 <?php if (!$_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->isSubpage) {?>disabledInput<?php }?>" id="change_subpage" name="change_subpage">
                        <option selected><?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>
</option>
                        <?php echo $_smarty_tpl->tpl_vars['zPageTools']->value->zPageGetSubpageSelector($_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->id,$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest);?>

                    </select>
                    <?php echo '<script'; ?>
>
                    $("#not_a_subpage").change(function() {
                        $("#change_subpage").toggleClass("disabledInput");
                    });
                    <?php echo '</script'; ?>
>
                    <h6 class="bottom-0 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"Category"),$_smarty_tpl);?>
</h6>
                    <?php echo $_smarty_tpl->tpl_vars['zCategoryTools']->value->zCategoryCheckboxes($_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest,$_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest]->id);?>

                </div>
                <h6 class="bottom-10 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"Holders"),$_smarty_tpl);?>
</h6>
                <div>
                    <div class="col-12 back7 bottom-20 pad-20 centerText pointThis rad-5 gray2" id="AddNewHolder">
                        <?php echo smarty_function_zThis(array('z'=>"Add a New Holder"),$_smarty_tpl);?>

                    </div>
                    <div id="dragulaAdd" class="hideScroll col-4 colTop padR-20 zMob-padR-0 between-20 bottom-20 hideForAddTop" style="display: none">
                        <?php $_smarty_tpl->_assignInScope('holders', $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllHolders($_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest));?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/holderEdit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                    <div id="dragula" class="hideScroll hideRest col-12 colTop between-20">
                        <?php $_smarty_tpl->_assignInScope('blocks', $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest]->template->blocks);?>
                        <?php
$_smarty_tpl->tpl_vars['id_block'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['id_block']->step = 1;$_smarty_tpl->tpl_vars['id_block']->total = (int) ceil(($_smarty_tpl->tpl_vars['id_block']->step > 0 ? $_smarty_tpl->tpl_vars['blocks']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['blocks']->value)+1)/abs($_smarty_tpl->tpl_vars['id_block']->step));
if ($_smarty_tpl->tpl_vars['id_block']->total > 0) {
for ($_smarty_tpl->tpl_vars['id_block']->value = 1, $_smarty_tpl->tpl_vars['id_block']->iteration = 1;$_smarty_tpl->tpl_vars['id_block']->iteration <= $_smarty_tpl->tpl_vars['id_block']->total;$_smarty_tpl->tpl_vars['id_block']->value += $_smarty_tpl->tpl_vars['id_block']->step, $_smarty_tpl->tpl_vars['id_block']->iteration++) {
$_smarty_tpl->tpl_vars['id_block']->first = $_smarty_tpl->tpl_vars['id_block']->iteration === 1;$_smarty_tpl->tpl_vars['id_block']->last = $_smarty_tpl->tpl_vars['id_block']->iteration === $_smarty_tpl->tpl_vars['id_block']->total;?>
                            <div class="dragula pad-20 padT-40 back7 rad-5 between-20">
                                <?php $_smarty_tpl->_assignInScope('holders', $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest]->zPageGetHolders($_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest,$_smarty_tpl->tpl_vars['id_block']->value));?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/holderEdit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('id_block'=>$_smarty_tpl->tpl_vars['id_block']->value), 0, true);
?>
                                <div class="blockTitle floatingSpace text6 font-14 boldText top-10 left-10">
                                    <?php echo smarty_function_zThis(array('z'=>"Block"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['id_block']->value;?>

                                </div>
                            </div>
                        <?php }
}
?>
                    </div>
                </div>
                <div class="ButtonPos1 IWantItDownR padR-32 widthAll fixed index-10 padL-332" zMob-1200="padL-32">
                    <div class="padB-20 padLR-20 whiteBack">
                        <button class="zButton primary widthAll zShadow5"><?php echo smarty_function_zThis(array('z'=>"Save"),$_smarty_tpl);?>
</button>
                    </div>
                </div>
                <div class="ButtonPos2">
                    <button class="zButton primary widthAll zShadow5 top-20"><?php echo smarty_function_zThis(array('z'=>"Save"),$_smarty_tpl);?>
</button>
                </div>
            </form>
        </div>
    </div>
    <?php ob_start();
echo smarty_function_zThis(array('z'=>"Error"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mLabel'=>'ForUpload','_mTitle'=>$_prefixVariable1), 0, false);
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_1326274247622a1d4ab2db49_00269710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_1326274247622a1d4ab2db49_00269710',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- summernote -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/summernote/summernote-lite.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['zContent']->value->language->id !== "1") {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/summernote/lang/summernote-<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->four_code;?>
.min.js"><?php echo '</script'; ?>
>
    <?php }?>

    <!-- filepond plugins -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-file-validate-size.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-file-validate-type.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-file-rename.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-image-preview.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.js"><?php echo '</script'; ?>
>

    <!-- filepond -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/locale/<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->four_code;?>
.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/filepond/filepond.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        function dragulaEvery() {
            var containers = $(".dragula").toArray();

            // dragula affect: copy a holder from left column to right
            dragula([document.querySelector("#dragulaAdd"), containers], {
                isContainer: function (el) {
                    return el.classList.contains("dragula");
                },
                copy: function (el, source) {
                    return source === document.querySelector("#dragulaAdd");
                },
                accepts: function (el, target) {
                    return target !== document.querySelector("#dragulaAdd");
                },
                moves: function (el, container, handle) {
                    var searchPond = $(handle).closest(".filepond");
                    var searchSummer = $(handle).closest(".note-editor");
                    if (searchPond.length || searchSummer.length || handle.nodeName == "INPUT" ||
                        handle.classList.contains("filepond") || handle.classList.contains("blockTitle") ||
                        handle.classList.contains("multiple") || handle.classList.contains("minus")) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }).on("drag", function (el) {
                // when dragging a holder we do not want the content to be visible
                el.querySelectorAll(".hideForAdd").forEach(function(value, i) {
                    value.style.display = "none";
                });
            }).on("out", function (el, container, source) {
                // make the content visible again
                var hides = el.querySelectorAll(".hideForAdd");
                if ($(el).find(".fa-chevron-up").css("display") !== "none") {
                    hides[1].style.display = "";
                }
                hides[0].style.display = "";

                var blockTitle = $(el).parent().find(".blockTitle");
                if (blockTitle.is(":first-child")) {
                    blockTitle.remove();
                    $(el).parent().append(blockTitle);
                }

                if (source.getAttribute("id") == "dragulaAdd") {
                    el.setAttribute("update", "true");
                }
            }).on("dragend", function (el) {
                // the data attribute tells us the old modalNumber of our holder,
                // because on page load, holders on the left column has their own
                // modalNumber values, but when they are copied to the actual page,
                // we need to change it with a new modalNumber
                var data = el.getAttribute("data");

                if (el.getAttribute("update") == "true") {
                    $(el).find(".zTog-downHolder" + data).removeClass("zTog-downHolder" + data).addClass("zTog-downHolder" + modalNumber);
                    $(el).find(".zShow-downHolder" + data).removeClass("zShow-downHolder" + data).addClass("zShow-downHolder" + modalNumber);
                    $(el).find(".zTog-imagesFor" + data).removeClass("zTog-imagesFor" + data).addClass("zTog-imagesFor" + modalNumber);
                    $(el).find(".zShow-imagesFor" + data).removeClass("zShow-imagesFor" + data).addClass("zShow-imagesFor" + modalNumber);

                    // time to update the modalNumber
                    el.querySelectorAll(".zModal")[0].setAttribute("id", "modal" + modalNumber);
                    el.querySelectorAll(".zModalLink")[0].setAttribute("href", "#modal" + modalNumber);
                    el.classList.remove("zDestroy-holder"+data);
                    el.classList.add("zDestroy-holder"+modalNumber);
                    var remove = el.querySelectorAll("[class*=zRemove]")[0];
                    remove.classList.remove("zRemove-holder"+data);
                    remove.classList.add("zRemove-holder"+modalNumber);
                    remove.setAttribute("zRemove", "false");

                    // now lets increase the modalNumber value for the next arrival
                    modalNumber = Number(modalNumber) + 1;
                    el.setAttribute("update", "false");

                    toggleParentNext($(el).find(".toggleParentNext"));

                    $(el).find(".note-editor").remove();
                    summernoteStart($(el).find(".summernote"));
                    $(el).find(".multiple").click(function() {
                        multiExists($(this));
                    });
                }

                // functions that need a rerun after a copy
                zRemove();
                zBetween();
                zTog();
                runFilePond();
                summernoteKeyup($(el).find(".note-editable"));
                storeCat();
            });
        }

        // this function helps storing the current entered data to hidden fields
        function storingData(now) {
            // select main div for holders
            var dragula = $("#dragula");

            // the zContent-classed are always holds the visible language info,
            // so we should select them
            var storeThis = dragula.find("[name^='zContent[']");
            if (storeThis.length) {
                // "now" value entered to this function stands for current language id
                // and by defining "prev", we get the language id just before the language change
                // on language change, we need to store the previous language info to hidden fields
                var prev = storeThis.attr("name").replace("zContent[", "").replace("][]", "");
                dragula.find("[name^='zContent["+prev+"]']").each(function(i, v) {
                    // this is zContent-classed div
                    var cur = $(v);
                    // this is the previous language's hidden field to store the data
                    var old = $(v).parent().prev().find("[name^='content["+prev+"]']");
                    // this is the current language's hidden field to set the data
                    var nowo = $(v).parent().prev().find("[name^='content["+now+"]']");

                    var multi = cur.parent().next();
                    // if the data is a multiple one.
                    if (cur.parent().find(".multiple").length) {
                        // get the first item's value first.
                        var calcVal = cur.val().replace(";", "%3B");
                        // now search for the multipleDive DOM element,
                        // because it stores the multiple information.
                        if (multi.length && multi.hasClass("multipleDive")) {
                            // if we have a "multiple" data for the partial.
                            // let's seperate them and put them into different fields.
                            var multiple = nowo.val().trim().split(";");
                            multiple.shift();
                            // if we have multiple intances for this partial,
                            // let's collect all the information into a single
                            // storing unit.
                            multi.find("[name='multipleDive[]']").each(function() {
                                calcVal = calcVal + ";" + $(this).val().replace(";", "%3B");
                                if (prev !== now) {
                                    $(this).val(multiple[0] ? multiple[0].trim().replace("%3B", ";") : "");
                                    // if we have a summernote we also change its value from its object
                                    if ($(this).hasClass("summernote")) {
                                        // the way of doing it:
                                        $(this).summernote("code", multiple[0] ? multiple[0].trim().replace("%3B", ";") : "");
                                    }
                                    multiple.shift();
                                }
                            });
                            // and then store them all together.
                            cur.val(calcVal);
                        }
                    }

                    // if our data is a link.
                    if (cur.hasClass("zLink1")) {
                        old.val(cur.val() + ";" + cur.next().val());
                        $(v).parent().prev().children().each(function() {
                            var already = $(this).val().split(";");
                            already[0] = cur.val();
                            already = already.join(";");
                            $(this).val(already);
                        });

                        nowo = nowo.val().split(";");

                        cur.val(nowo[0]);
                        cur.next().val(nowo[1]);
                    // if our data is an option.
                    } else if (cur.hasClass("zSelect")) {
                        $(v).parent().prev().children().each(function() {
                            $(this).val(calcVal);
                        });
                        if (multi.length && multi.hasClass("multipleDive")) {
                            cur.val(calcVal.split(";")[0]);
                        } else {
                            // retrieve the current language's data from hidden field
                            cur.val(nowo.val().trim());
                        }
                    // every other data types.
                    } else {
                        // store the previous language's data to hidden field
                        old.val(cur.val());
                        // retrieve the current language's data from hidden field
                        cur.val((multi.length && multi.hasClass("multipleDive")) ? nowo.val().trim().split(";")[0].replace("%3B", ";") : nowo.val().trim());
                    }

                    // if we have a summernote we also change its value from its object
                    if (cur.hasClass("summernote")) {
                        // the way of doing it:
                        cur.summernote("code", (multi.length && multi.hasClass("multipleDive")) ? nowo.val().trim().split(";")[0].replace("%3B", ";") : nowo.val().trim());
                    }
                    // this is a BUG: don't know why, but sometimes
                    // summernote doubles itself, but when that happens, remove the second
                    if (cur.next().next().hasClass("note-editor note-frame")) {
                        cur.next().next().remove();
                    }

                    // finally update the zContent language id
                    cur.attr("name", "zContent["+now+"][]");
                });
            }
        }

        // when a user writes on summernote, update the hidden textarea as well
        function summernoteKeyup(element) {
            element.keyup(function() {
                var value = $(this).prop("innerHTML");
                $(this).closest(".note-frame").prev().html(value);
            });
        }

        function storeCat() {
            $(".zCategory").on("change", function() {
                var value = $(this).val();

                $(this).parent().prev().children().each(function() {
                    $(this).val(value);
                });
            });
        }

        // this is to upload an image to server,
        // used both by summernote and filepond
        function uploadImage(image, summernote, filepond, e) {
            // create a new formdata
            var data = new FormData();
            // send the page id to server, because we will create a folder for it
            data.set("zPage", "<?php echo $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest]->id;?>
");
            if (filepond) {
                data.set("filepond", "true");
            }
            data.set("langcode", "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
");
            // send the file to server
            var newName = slug(image.name.replace(/\.[^/.]+$/, "")) + "." + image.name.replace(/^[^/.]+\./, "");
            var newFile = new File([image], newName, { type: image.type});
            data.append("fileToUpload", newFile);
            $.ajax({
                url: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/upload.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(filename) {
                    // this is an image tag to insert into a summernote after upload
                    var image = $("<img>").attr("src", "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["images"];?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest]->id;?>
/" + filename).addClass("img-fluid");
                    if (summernote) {
                        // if a summernote uploaded the file, insert the image tag
                        summernote.summernote("insertNode", image[0]);
                    } else if (filepond) {
                        var filepondID = e.detail.file.id;
                        $(filepond).find("#filepond--item-" + filepondID).find("legend").text(filename);
                        $(filepond).find("#filepond--item-" + filepondID).find(".filepond--file-info-main").text(filename);
                        updateFilepond(e);
                    }
                },
                error: function(data) {
                    // if upload gives an error,
                    // woke the modalForUpload
                    $("#modalForUpload").find(".zInside").text(data.responseText);
                    window.location.assign("#modalForUpload");
                }
            });
        }

        // start the pond, filepond
        function runFilePond() {
            if ($(document.getElementById("dragula")).length) {
                document.getElementById("dragula").querySelectorAll(".filepond").forEach(function(v, i) {
                    var loaded = $(v).prev();
                    var value = v.previousElementSibling.value;
                    var multi = loaded.attr("data-multi");
                    if (value !== "") {
                        var files = [];
                        for (let i=0; i < value.split(";").length; i++) {
                            files.push({
                                source: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->src["images"];?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest]->id;?>
/"+value.split(";")[i],
                                options: {
                                    type: "local"
                                }
                            });
                        }
                        var load = {
                            load: (uniqueFileId, load) => {
                                // you would get the file data from your server here
                                fetch(uniqueFileId)
                                .then(res => res.blob())
                                .then(load);
                            }
                        };
                    }
                    if (loaded.attr("data-filepond-loaded") !== "true") {
                        FilePond.create(v, {
                            allowImagePreview: true,
                            imagePreviewMaxFileSize: "500kb",
                            allowMultiple: (multi == "true" ? true : false),
                            allowReorder: (multi == "true" ? true : false),
                            maxFileSize: "20MB",
                            acceptedFileTypes: ["image/webp", "image/png", "image/jpg", "image/jpeg", "image/gif", "video/mp4", "video/m4v"],
                            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                                // Do custom type detection here and return with promise
                                resolve(type);
                            }),
                            files: (files ? files : null),
                            server: (load ? load : null)
                        });
                    }

                    if (loaded.closest("#dragula").length) {
                        loaded.attr("data-filepond-loaded", true);
                    }
                });

                // set filepond server
                FilePond.setOptions({
                    server: "./",
                });

                filepondCallbacks();
            }
        }

        function updateFilepond(e) {
            var elem = $(e.detail.pond.element.get());
            // getting the files
            var files = e.detail.pond.getFiles();
            var finalOrder = [];

            files.forEach(function(item) {
                var filename = $(e.target).find("#filepond--item-" + item.id).find("legend").text();
                finalOrder.push(filename);
            });

            elem.closest(".top-20").prev().children().each(function () {
                $(this).val(finalOrder.join(";"));
            });
        }

        // callbacks for filepond
        function filepondCallbacks() {
            $("#dragula").find("div.filepond").each(function() {
                var firstID = $(this).find(".filepond--assistant").attr("id");

                if (!window.pondIDS.includes(firstID)) {
                    // when a file added in a filepond, we will have to upload it
                    // to server
                    $(this).on("FilePond:processfilestart", function(e) {
                        // getting the files
                        var files = e.detail.pond.getFiles();
                        // calling the uploading service
                        uploadImage(e.detail.file.file, null, e.target, e);
                    });

                    $(this).on("FilePond:removefile", updateFilepond);
                    $(this).on("FilePond:reorderfiles", updateFilepond);
                }

                if (firstID) {
                    window.pondIDS.push(firstID);
                }
            });
        }

        function toggleParentNext(element) {
            element.click(function() {
                $(this).find(".arrows").toggle();
                $(this).parent().next().toggle();
            });
        }

        // start all summernotes
        function summernoteStart(element) {
            element.summernote({
                lang: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->four_code;?>
",
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontname', ['fontname', 'fontsize', 'color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['picture', ['picture', 'link', 'video', 'table']],
                    ['view', ['fullscreen', 'codeview']],
                ],
                tabsize: 1,
                callbacks: {
                    onImageUpload: function(files) {
                        for (let i=0; i < files.length; i++) {
                            uploadImage(files[i], $(this));
                        }
                    }
                }
            });

            // if we have a multiple on our summernote, we should add a "+"
            // button for users to add multiple summernotes.
            element.each(function() {
                var el = $(this);
                // appending the "+" button to toolbar of summernote.
                if (el.parent().next().hasClass("multipleDive")) {
                    el.next().find(".note-toolbar").append("<div class='multiple floatingTheRight pointThis row-12 back7 text6' style='padding:8px 15px;border-top-right-radius:5px;border-left: 1px solid var(--zFormBorderColor);font-size:18px'><div class='hollyMid'><i class='fas fa-plus'></i></div></div>");
                }
            });
        }

        // this function recreates a summernote, if a summernote has multiple option,
        // this function runs from the "+" button on the right top of any summernote.
        function doubleSummer(nwe) {
            // find the textarea that summernote object controls itself from.
            var change = nwe.children().last().find(".summernote");
            // get the minus button.
            var minue = "<div class='minus floatingTheRight pointThis row-12 back7 text6' style='padding:8px 15px;border-top-right-radius:5px;border-left: 1px solid var(--zFormBorderColor);font-size:18px'><div class='hollyMid'><i class='fas fa-minus'></i></div></div>";
            // remove the old summernote.
            change.next().remove();
            // create a new one.
            summernoteStart(change);
            // bind (with ".on()") the keyup event to summernote with the textarea.
            summernoteKeyup(change);
            // finally, add the minus (destroy!) button to the toolbar.
            change.next().find(".note-toolbar").append(minue);
        }

        function multiExists(el, load) {
            // let's get this first.
            var th = el.parent().hasClass("note-toolbar") ? el.parent().parent() : el;
            // clone the partial, because we are going to multiply it.
            var all = th.parent().clone();
            var zContent = th.parent().find("[name^='zContent[']");
            zContent = zContent.hasClass("zSelect") ? th.parent().prev().children().first() : zContent;
            var now = zContent.val().trim().split(";");
            // find the plus (multiple) button and turn into
            // minus (remove) button.
            all.find(".multiple").removeClass("multiple").addClass("minus");
            all.find(".fas").removeClass("fa-plus").addClass("fa-minus");
            all.find("[name^='zContent[']").attr("name", "multipleDive[]").val("");
            // if we do not have a div next to the original parent named 'multipleDive'
            // we should create it to store new instances.
            var nwe = th.parent().next();
            var yeahThere = 0;
            th.parent().prev().children().each(function() {
                yeahThere = yeahThere > $(this).val().split(";").length ? yeahThere : $(this).val().split(";").length;
            });
            if (load) {
                if (yeahThere > 1) {
                    th.parent().find("[name^='zContent[']").val(now[0].replace("%3B", ";"));
                    // if we have a summernote we also change its value from its object
                    if (th.prev().hasClass("summernote")) {
                        // the way of doing it:
                        th.prev().summernote("code", now[0].replace("%3B", ";"));
                    }
                    for (let i = 1; i < yeahThere; i++) {
                        // now, let's multiply!
                        nwe.append(all.clone());
                        nwe.children().eq(i-1).find("[name^='multipleDive[']").val(now[i] ? now[i].trim() : "");
                        // if the partial of the holder is a textarea,
                        // we also need to recreate the summernote.
                        if (th.prev().hasClass("summernote")) {
                            doubleSummer(nwe);
                        }
                    }
                }
            } else {
            // now, let's multiply!
                nwe.append(all.clone());
                // if the partial of the holder is a textarea,
                // we also need to recreate the summernote.
                if (th.prev().hasClass("summernote")) {
                    doubleSummer(nwe);
                }
            }
            var rem = load ? nwe : nwe.children().last();
            // one more thing, add the click function to minus button
            // that will remove a multiplied partial.
            rem.find(".minus").click(function() {
                var el = $(this).parent().hasClass("note-toolbar") ? $(this).parent().parent().parent() : $(this).parent();
                el.parent().prev().prev().children().each(function() {
                    var all = $(this).val().split(";");
                    var newA = [];
                    all.forEach((item, i) => {
                        if (i !== el.index()+1) {
                            newA.push(item);
                        }
                    });
                    $(this).val(newA.join(";"));
                });
                el.remove();
            });
        }

        // this is the modal number, each holder has a cross button,
        // to remove the holder itself, so they all need a unique id
        var modalNumber = "<?php echo $_smarty_tpl->tpl_vars['modalNumber']->value;?>
";

        function zPageJS() {
            toggleParentNext($(".toggleParentNext"));

            dragulaEvery();

            // on language change
            $("#change_lang").change(function(){
                // lets get new language code
                var now = $(this).val();

                // we should store newly added data to the hidden fields
                storingData(now);

                // hide other language fields, bring the selected language
                $(".divFor").css("display", "none");
                $(".divFor"+now).css("display", "block");
            });

            summernoteStart($(".summernote"));
            summernoteKeyup($(".note-editable"));
            storeCat();

            // register filepond plugins
            FilePond.registerPlugin(
                // validates the size of the file...
                FilePondPluginFileValidateSize,
                // validates the file type...
                FilePondPluginFileValidateType,
                // preview the image file type...
                FilePondPluginImagePreview,
                // preview the vide file type...
                FilePondPluginMediaPreview,
                // rename
                FilePondPluginFileRename,
            );

            // set filepond language
            FilePond.setOptions(window["<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->four_code;?>
"]);

            window.pondIDS = [];

            runFilePond();

            // add new holder button
            $("#AddNewHolder").click(function() {
                // first we want the user to be at the zHolders section,
                // so animate the screen to there.
                $([document.documentElement, document.body]).animate({
                    scrollTop: $(this).offset().top - 100
                }, 500);

                // get dragula DOM elements.
                var dragula = $("#dragula");
                var dragulaAdd = $("#dragulaAdd");

                // display the dragulaAdd, which holds all zHolders in waiting.
                dragulaAdd.toggle();
                // but when the dragulaAdd opens, we shoul decrease the width of
                // the dragula side, because dragulaAdd comes from left.
                dragula.toggleClass("col-8").toggleClass("col-12");
                // when there are lots of zHolders on an ultimate Z, dragulaAdd element's
                // height becomes too long, so we calculate a height based on the device height.
                // and give that height to both dragula and dragulaAdd.
                var calcPX = ($(window).width() > 1024)
                    ? ($(window).height() - 180 - $(this).height() - $(".ButtonPos2").height() + "px")
                    : "40vh";

                // if dragulaAdd is open.
                if (dragulaAdd.css("display") !== "none") {
                    // how many zHolders we currently have on the zPage?
                    var count = dragula.children().length;
                    var newHeight = (dragulaAdd.height() - ((count-1)*20)) / count;
                    dragula.children().css("min-height", newHeight);
                    dragulaAdd.css({
                        "height": calcPX,
                        "overflow": "scroll"
                    });
                    dragula.css({
                        "height": calcPX,
                        "overflow": "scroll"
                    });
                } else {
                    dragula.children().css("min-height", "100%");
                    dragula.css("height", "auto");
                }
            });

            // if we have a multiple button on a partial of the zHolder,
            // let's assign a click function to it.
            $(".multiple").click(function() {
                multiExists($(this));
            });
            if ($(".multipleDive").length) {
                $(".multiple").each(function() {
                    multiExists($(this), true);
                });
            }

            // submit form functions
            $("#zPage-edit-form").submit(function(e) {
                e.preventDefault();
                var now = $("#change_lang").val();
                storingData(now);
                storeCat();

                var form = $(this).clone();
                if (form.find("select")) {
                    form.find("select").each(function() {
                        var name = $(this).attr("name");
                        var value = $("[name='"+name+"'] option").filter(":selected").val();
                        $(this).val(value);
                    });
                }
                form.find("#dragulaAdd").remove();
                $("#dragula").children().each(function(i) {
                    var z = $("<input>")
                        .attr("name", "block"+i).val($(this).children().length-1);
                    form.append(z);
                });
                form.find("input[name='filepond']").remove();
                var post_url = form.attr("action");
                var post_data = form.serialize();

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000
                        }).showToast();
                    },
                    error: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000,
                            backgroundColor: "#f3616d",
                        }).showToast();
                    },
                });
            });
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zBottom"} */
}
