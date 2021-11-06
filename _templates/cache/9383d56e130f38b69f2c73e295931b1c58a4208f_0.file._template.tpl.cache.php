<?php
/* Smarty version 3.1.39, created on 2021-11-06 21:07:52
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/categories/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6186eea868b247_80950600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9383d56e130f38b69f2c73e295931b1c58a4208f' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/categories/_template.tpl',
      1 => 1636232832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6186eea868b247_80950600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '15616872766186eea86559b9_94379054';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19357310466186eea866d5f8_95961730', "zHead");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15409177316186eea86710c8_19347848', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19948684786186eea8686ed8_55738308', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zHead"} */
class Block_19357310466186eea866d5f8_95961730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_19357310466186eea866d5f8_95961730',
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
class Block_15409177316186eea86710c8_19347848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_15409177316186eea86710c8_19347848',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="col-12">
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Category List"),$_smarty_tpl);?>
</h4>
            <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success1']->value,$_smarty_tpl->tpl_vars['error1']->value);?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/layouts/categories/create/" class="zButton zHov-zShadow5 primary sweet font-16">
                <i class="fas fa-plus-square right-10"></i>
                <?php echo smarty_function_zThis(array('z'=>"Add New Category"),$_smarty_tpl);?>

            </a>
            <div class="top-20"></div>
            <table class="zTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th><?php echo smarty_function_zThis(array('z'=>"Name"),$_smarty_tpl);?>
</th>
                        <th><?php echo smarty_function_zThis(array('z'=>"Edit"),$_smarty_tpl);?>
</th>
                        <th><?php echo smarty_function_zThis(array('z'=>"Delete"),$_smarty_tpl);?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zCategoryTools']->value->zCategoryGetAll($_smarty_tpl->tpl_vars['zUser']->value->id_lang), 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                        <tr id="zCategory-<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->name;?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/layouts/categories/edit/index.php?id_category=<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
" class="zButton zHov-zShadow5 primary sweet">
                                     <?php echo smarty_function_zThis(array('z'=>"Edit"),$_smarty_tpl);?>

                                </a>
                            </td>
                            <td>
                                <?php ob_start();
echo smarty_function_zThis(array('z'=>"Delete"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Delete Category"),$_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Are you sure you want to delete this category?"),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mButton'=>$_prefixVariable1,'_mForm'=>$_smarty_tpl->tpl_vars['zContent']->value->base_uri,'_mLabel'=>$_smarty_tpl->tpl_vars['cat']->value->id,'_mHidden'=>"<input name='id_category' value='".((string)$_smarty_tpl->tpl_vars['cat']->value->id)."'>",'_mTitle'=>$_prefixVariable2,'_mContent'=>$_prefixVariable3), 0, true);
?>
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
class Block_19948684786186eea8686ed8_55738308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_19948684786186eea8686ed8_55738308',
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
        function deleteFromTable(dataTable) {
            // delete form functions
            $(".zForm").submit(function(e) {
                e.preventDefault();

                window.location.assign("#");
                var form = $(this).clone();
                var id_page = form.find("input[name='id_category']").val();
                var obj_page = $("#zCategory-"+id_page);
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
            // Simple Datatable
            let tables = document.querySelectorAll(".zTable");
            let dataTable;
            tables.forEach((item, i) => {
                dataTable = new simpleDatatables.DataTable(item, {
                    columns: [
                        { select: [2,3], sortable: false},
                    ]
                });
                dataTable.on("datatable.page", function(page) {
                    $("#zContent").find("a").click(magicLinks);
                    deleteFromTable(dataTable);
                });
                dataTable.on("datatable.sort", function(column, direction) {
                    $("#zContent").find("a").click(magicLinks);
                    deleteFromTable(dataTable);
                });
            });
            zDetect();
            deleteFromTable(dataTable);
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
