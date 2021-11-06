<?php
/* Smarty version 3.1.39, created on 2021-11-06 21:10:03
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6186ef2b3a8c60_09317494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0d64c50b253ec0d54e6807c216dbf8854f56ef' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/_template.tpl',
      1 => 1636232981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6186ef2b3a8c60_09317494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '497776116186ef2b36b1b6_47659161';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13328188896186ef2b387ef9_25129626', "zHead");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12951328386186ef2b38b631_22480534', "zPageTitle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11872463356186ef2b38c444_02437000', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13703265596186ef2b3a5098_11228224', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zHead"} */
class Block_13328188896186ef2b387ef9_25129626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_13328188896186ef2b387ef9_25129626',
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
/* {block "zPageTitle"} */
class Block_12951328386186ef2b38b631_22480534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_12951328386186ef2b38b631_22480534',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
: <?php echo DABASE;
}
}
/* {/block "zPageTitle"} */
/* {block "zContent"} */
class Block_11872463356186ef2b38c444_02437000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_11872463356186ef2b38c444_02437000',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="whiteBack rad-15 pad-20 font-16">
        <?php $_smarty_tpl->_assignInScope('all', zDB::get()->all());?>
        <table class="zTable">
            <thead>
                <tr>
                    <th><?php echo smarty_function_zThis(array('z'=>"Table"),$_smarty_tpl);?>
</th>
                    <th><?php echo smarty_function_zThis(array('z'=>"Number of Rows"),$_smarty_tpl);?>
</th>
                    <th><?php echo smarty_function_zThis(array('z'=>"Edit"),$_smarty_tpl);?>
</th>
                    <th><?php echo smarty_function_zThis(array('z'=>"Delete"),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'table', false, 'rowN');
$_smarty_tpl->tpl_vars['table']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rowN']->value => $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->tpl_vars['table']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('tableIn', zDB::get()->table($_smarty_tpl->tpl_vars['table']->value[0]));?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['table']->value[0];?>
</td>
                        <td><?php echo count($_smarty_tpl->tpl_vars['tableIn']->value);?>
</td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];?>
_admin/advanced/database/table/index.php?table=<?php echo $_smarty_tpl->tpl_vars['table']->value[0];?>
" class="zButton zHov-zShadow5 primary sweet">
                                 <?php echo smarty_function_zThis(array('z'=>"Edit"),$_smarty_tpl);?>

                            </a>
                        </td>
                        <td>
                            <?php if (in_array($_smarty_tpl->tpl_vars['table']->value[0],$_smarty_tpl->tpl_vars['defaultTables']->value)) {
} else { ?>
                                <?php ob_start();
echo smarty_function_zThis(array('z'=>"Delete"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Delete Table"),$_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Are you sure you want to delete this table?"),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mButton'=>$_prefixVariable1,'_mForm'=>$_smarty_tpl->tpl_vars['zContent']->value->base_uri,'_mLabel'=>$_smarty_tpl->tpl_vars['rowN']->value,'_mHidden'=>"<input type='text' name='table_name' value='".((string)$_smarty_tpl->tpl_vars['table']->value[0])."'>",'_mTitle'=>$_prefixVariable2,'_mContent'=>$_prefixVariable3), 0, true);
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
<?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_13703265596186ef2b3a5098_11228224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_13703265596186ef2b3a5098_11228224',
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
            tables.forEach((item, i) => {
                let dataTable = new simpleDatatables.DataTable(item, {
                    columns: [
                        {select: [2,3], sortable: false},
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
        }
    
    zPageJS();
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "zBottom"} */
}
