<?php
/* Smarty version 3.1.40, created on 2022-01-22 09:46:19
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebd26b1425a5_01691519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e1152df841f7cec2c5ff34d7e9e78e3783197e' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/_template.tpl',
      1 => 1642844777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ebd26b1425a5_01691519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '6969917361ebd26b1045b5_06497259';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202891129561ebd26b11df40_24808874', "zTop");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18124311561ebd26b123ae3_06536053', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116637154561ebd26b140867_70077464', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zTop"} */
class Block_202891129561ebd26b11df40_24808874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_202891129561ebd26b11df40_24808874',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/simple-datatables/style.css">
<?php
}
}
/* {/block "zTop"} */
/* {block "zContent"} */
class Block_18124311561ebd26b123ae3_06536053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_18124311561ebd26b123ae3_06536053',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="col-12">
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Page List"),$_smarty_tpl);?>
</h4>
            <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success1']->value,$_smarty_tpl->tpl_vars['error1']->value);?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/layouts/pages/create/" class="zButton zHov-zShadow5 primary sweet font-16">
                <i class="fas fa-plus-square right-10"></i>
                <?php echo smarty_function_zThis(array('z'=>"Add New Page"),$_smarty_tpl);?>

            </a>
            <div class="top-20"></div>
            <table class="zTable" no_sort="3-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th><?php echo smarty_function_zThis(array('z'=>"Name"),$_smarty_tpl);?>
</th>
                        <th><?php echo smarty_function_zThis(array('z'=>"Template"),$_smarty_tpl);?>
</th>
                        <th><?php echo smarty_function_zThis(array('z'=>"Edit"),$_smarty_tpl);?>
</th>
                        <th><?php echo smarty_function_zThis(array('z'=>"Delete"),$_smarty_tpl);?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zPageTools']->value->zPageGetAll($_smarty_tpl->tpl_vars['zUser']->value->id_lang_closest,"front"), 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                        <tr id="zPage-<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['page']->value->id-1000;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['page']->value->template->name;?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/layouts/pages/edit/index.php?id_page=<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" class="zButton zHov-zShadow5 primary sweet">
                                     <?php echo smarty_function_zThis(array('z'=>"Edit"),$_smarty_tpl);?>

                                </a>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value->id !== "1001") {?>
                                <?php ob_start();
echo smarty_function_zThis(array('z'=>"Delete"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Delete Page"),$_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Are you sure you want to delete this page?"),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mButton'=>$_prefixVariable1,'_mForm'=>$_smarty_tpl->tpl_vars['zContent']->value->base_uri,'_mLabel'=>$_smarty_tpl->tpl_vars['page']->value->id,'_mHidden'=>"<input name='id_page' value='".((string)$_smarty_tpl->tpl_vars['page']->value->id)."'>",'_mTitle'=>$_prefixVariable2,'_mContent'=>$_prefixVariable3), 0, true);
?>
                                <?php }?>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
<?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_116637154561ebd26b140867_70077464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_116637154561ebd26b140867_70077464',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function deleteFromTable(dataTable) {
            // delete form functions
            $(".zForm").submit(function(e) {
                e.preventDefault();

                window.location.assign("#");
                var form = $(this).clone();
                var id_page = form.find("input[name='id_page']").val();
                var obj_page = $("#zPage-"+id_page);
                var post_url = form.attr("action");
                var post_data = form.serialize();

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        obj_page.remove();
                        dataTable.rows().remove(obj_page[0].dataIndex);
                        dataTable.update();
                        deleteFromTable(dataTable);
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
        function zPageJS() {
            window.zTables.forEach((item, i) => {
                item.on("datatable.page", function(page) {
                    $("#zContent").find("a").click(magicLinks);
                    deleteFromTable(item);
                });
                item.on("datatable.sort", function(column, direction) {
                    $("#zContent").find("a").click(magicLinks);
                    deleteFromTable(item);
                });
            });
            deleteFromTable(window.zTables[0]);
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zBottom"} */
}
