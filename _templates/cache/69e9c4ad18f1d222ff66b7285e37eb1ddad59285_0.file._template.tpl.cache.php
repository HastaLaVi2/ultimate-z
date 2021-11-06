<?php
/* Smarty version 3.1.39, created on 2021-11-06 15:10:48
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/categories/create/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61869af8def566_35873993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e9c4ad18f1d222ff66b7285e37eb1ddad59285' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/categories/create/_template.tpl',
      1 => 1633376458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61869af8def566_35873993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '111211548261869af8db0bb9_96377457';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168779168461869af8dceab0_37500023', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144653820861869af8dedcf7_86580457', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zContent"} */
class Block_168779168461869af8dceab0_37500023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_168779168461869af8dceab0_37500023',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageUrl.php','function'=>'smarty_function_zPageUrl',),1=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageName.php','function'=>'smarty_function_zPageName',),2=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="col-12">
        <nav>
            <ol class="cleanList">
                <li><a href="<?php echo smarty_function_zPageUrl(array('ID'=>"9"),$_smarty_tpl);?>
/index.php" class="inLine font-16">
                    <i class="fas fa-caret-left"></i>
                    <?php echo smarty_function_zPageName(array('ID'=>"9"),$_smarty_tpl);?>

                </a></li>
            </ol>
        </nav>

        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Add New Category"),$_smarty_tpl);?>
</h4>
            <form id="zPage-edit-form" class="zForm" method="POST" role="form" action="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->base_uri;?>
">
                <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success']->value,$_smarty_tpl->tpl_vars['error']->value);?>

                <div>
                    <div class="zCol-4 zMob-zCol-12">
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
                            <input name="category_name[<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
]" id="category_name_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
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
                <button class="zButton primary widthAll zShadow top-20"><?php echo smarty_function_zThis(array('z'=>"Create"),$_smarty_tpl);?>
</button>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_144653820861869af8dedcf7_86580457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_144653820861869af8dedcf7_86580457',
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
