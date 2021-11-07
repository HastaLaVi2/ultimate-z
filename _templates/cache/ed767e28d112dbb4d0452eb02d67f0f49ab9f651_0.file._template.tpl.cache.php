<?php
/* Smarty version 3.1.39, created on 2021-11-07 20:32:34
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/create/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618837e237b6c3_46887717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed767e28d112dbb4d0452eb02d67f0f49ab9f651' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/create/_template.tpl',
      1 => 1636317017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618837e237b6c3_46887717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '641211014618837e2340f60_14954563';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1357246476618837e2357ae0_36537412', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_646072092618837e237a427_34984656', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zContent"} */
class Block_1357246476618837e2357ae0_36537412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_1357246476618837e2357ae0_36537412',
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
            <form id="zPage-edit-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success']->value,$_smarty_tpl->tpl_vars['error']->value);?>

                <div>
                    <h4 class="inLeft font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Add New Page"),$_smarty_tpl);?>
</h4>
                    <div class="rightText">
                        <div class="inLine width-350 zMob-widthAll">
                            <div class="zGroup bottom-20">
                                <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="change_lang">
                                    <?php echo smarty_function_zThis(array('z'=>"Select Language"),$_smarty_tpl);?>

                                </label>
                                <select class="pad-10 top-0 bottom-0" id="change_lang" name="change_lang">
                                    <option disabled><?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>
</option>
                                    <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetLanguages($_smarty_tpl->tpl_vars['zUser']->value->id_lang);?>

                                </select>
                            </div>
                            <?php echo '<script'; ?>
>
                            $("#change_lang").change(function(){
                                $(".divFor").css("display", "none");
                                $(".divFor"+$("#change_lang").val()).css("display", "block");
                            });
                            <?php echo '</script'; ?>
>
                        </div>
                        <div class="inLine width-350 zMob-widthAll">
                            <div class="zGroup bottom-20 padL-20 zMob-padL-0">
                                <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="change_template">
                                    <?php echo smarty_function_zThis(array('z'=>"Choose a Template"),$_smarty_tpl);?>

                                </label>
                                <select class="pad-10 top-0 bottom-0" id="change_template" name="change_template">
                                    <option disabled><?php echo smarty_function_zThis(array('z'=>"Choose..."),$_smarty_tpl);?>
</option>
                                    <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetTemplates($_smarty_tpl->tpl_vars['zUser']->value->id_lang);?>

                                </select>
                            </div>
                            <?php echo '<script'; ?>
>
                            $("#change_template").change(function(){
                                $(".hookFor").css("display", "none");
                                $(".hookFor"+$("#change_template").val()).css("display", "block");
                            });
                            <?php echo '</script'; ?>
>
                        </div>
                    </div>
                </div>
                <div class="col-8 colTop padR-10 padT-10" zMob-1024="padR-0">
                    <h6 class="bottom-10 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"Title"),$_smarty_tpl);?>
</h6>
                    <div class="bottom-10">
                        <input name="page_url" id="page_url" type="text" class="padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"URL with / at start"),$_smarty_tpl);?>
">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-file-code"></i>
                        </div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllLangs(), 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <div class="divFor<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
 divFor" style="<?php if ($_smarty_tpl->tpl_vars['l']->value->id !== $_smarty_tpl->tpl_vars['zUser']->value->id_lang) {?>display:none<?php }?>">
                            <div><input name="id_lang[<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
]" id="id_lang_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
"
                                        type="text" value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" style="display:none"></div>
                            <div class="bottom-10">
                                <input name="page_name[<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
]" id="page_name_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" type="text"
                                       class="page-title padL-45" placeholder="<?php echo smarty_function_zThis(array('z'=>"Title"),$_smarty_tpl);?>
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
                    <p><?php echo smarty_function_zThis(array('z'=>"If you do not enter a meta description, the first text on the page will be used."),$_smarty_tpl);?>
</p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zTools']->value->zToolsGetAllLangs(), 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <div class="divFor<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
 divFor" style="<?php if ($_smarty_tpl->tpl_vars['l']->value->id !== $_smarty_tpl->tpl_vars['zUser']->value->id_lang) {?>display: none<?php }?>">
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
                    <?php echo '<script'; ?>
>
                    $(".page-title").keyup(function(){
                        $("#page_url").val("/"+slug($(this).val()));
                    });
                    <?php echo '</script'; ?>
>
                </div>
                <div class="col-4 colTop padL-10 padT-10" zMob-1024="padL-0">
                    <h6 class="bottom-12 top-0 font-1em"><?php echo smarty_function_zThis(array('z'=>"Subpage"),$_smarty_tpl);?>
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
                        <?php echo $_smarty_tpl->tpl_vars['zPageTools']->value->zPageGetSubpageSelector($_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['l']->value->id]->id,$_smarty_tpl->tpl_vars['zUser']->value->id_lang);?>

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
                    <?php echo $_smarty_tpl->tpl_vars['zCategoryTools']->value->zCategoryCheckboxes($_smarty_tpl->tpl_vars['zUser']->value->id_lang,$_smarty_tpl->tpl_vars['editPage']->value[$_smarty_tpl->tpl_vars['zUser']->value->id_lang]->id);?>

                </div>
                <div class="ButtonPos1 IWantItDownR padR-30 widthAll fixed index-10 padL-332" zMob-1200="padL-32">
                    <div class="pad-20 gradYouToWhite">
                        <button class="zButton primary widthAll zShadow5 top-20"><?php echo smarty_function_zThis(array('z'=>"Create"),$_smarty_tpl);?>
</button>
                    </div>
                </div>
                <div class="ButtonPos2">
                    <button class="zButton primary widthAll zShadow5 top-20"><?php echo smarty_function_zThis(array('z'=>"Create"),$_smarty_tpl);?>
</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_646072092618837e237a427_34984656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_646072092618837e237a427_34984656',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function zPageJS() {
            // submit form functions
            $("#zPage-edit-form").submit(function(e) {
                e.preventDefault();

                var form = $(this).clone();
                if (form.find("select")) {
                    form.find("select").each(function() {
                        var name = $(this).attr("name");
                        var value = $("[name='"+name+"'] option").filter(":selected").val();
                        $(this).val(value);
                    });
                }
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

        document.addEventListener("DOMContentLoaded", function(event) {
            zPageJS();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zBottom"} */
}
