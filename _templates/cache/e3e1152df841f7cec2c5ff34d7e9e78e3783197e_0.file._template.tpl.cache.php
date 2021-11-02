<?php
/* Smarty version 3.1.39, created on 2021-11-02 08:45:40
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6180fab48fca19_38577024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e1152df841f7cec2c5ff34d7e9e78e3783197e' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/pages/_template.tpl',
      1 => 1633372152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6180fab48fca19_38577024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '11678026286180fab48c6c25_67042929';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6404203496180fab48e13a2_23466885', "zHead");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19585359726180fab48e47f6_48533573', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6487442326180fab48f8c50_33357361', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zHead"} */
class Block_6404203496180fab48e13a2_23466885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_6404203496180fab48e13a2_23466885',
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
/* {/block "zHead"} */
/* {block "zContent"} */
class Block_19585359726180fab48e47f6_48533573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_19585359726180fab48e47f6_48533573',
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
_admin/layouts/pages/create/" class="zButton primary sweet font-16">
                <i class="fas fa-plus-square right-10"></i>
                <?php echo smarty_function_zThis(array('z'=>"Add New Page"),$_smarty_tpl);?>

            </a>
            <div class="top-20"></div>
            <table class="zTable">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zPageTools']->value->zPageGetAll($_smarty_tpl->tpl_vars['zUser']->value->id_lang,"front"), 'page');
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
" class="zButton primary sweet">
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
class Block_6487442326180fab48f8c50_33357361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_6487442326180fab48f8c50_33357361',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
    var entriesPerPage = "<?php echo $_smarty_tpl->tpl_vars['zThis']->value["entries per page"];?>
";
    var searchOn = "<?php echo $_smarty_tpl->tpl_vars['zThis']->value["Search..."];?>
";
    var showingOf = "<?php echo $_smarty_tpl->tpl_vars['zThis']->value["Showing [start] to [end] of [rows] entries"];?>
";
    showingOf = showingOf.replaceAll("[", "{").replaceAll("]", "}");
    var noRowFound = "<?php echo $_smarty_tpl->tpl_vars['zThis']->value["No entries found"];?>
";

    $("input[type=checkbox]").change(function() {
        var clas = $(this).attr("class").split(" ")[1];
        var checked = $(this).prop("checked");
        $("."+clas).prop("checked", checked);
    });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/simple-datatables/simple-datatables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function zPageJS() {
            // Simple Datatable
            let tables = document.querySelectorAll(".zTable");
            let dataTable;
            tables.forEach((item, i) => {
                dataTable = new simpleDatatables.DataTable(item, {
                    columns: [
                        { select: [3,4], sortable: false},
                    ]
                });
                dataTable.on("datatable.page", function(page) {
                    $("#zContent").find("a").click(magicLinks);
                });
                dataTable.on("datatable.sort", function(column, direction) {
                    $("#zContent").find("a").click(magicLinks);
                });
            });
            zDetect();

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
