<?php
/* Smarty version 3.1.39, created on 2021-11-06 21:09:47
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/table/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6186ef1b0ceef1_60341600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874ba74eb8061e9737deb3ec0cdeadd9aa154d32' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/table/_template.tpl',
      1 => 1631203644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6186ef1b0ceef1_60341600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '2511457416186ef1b080311_68865884';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12896660336186ef1b09ca21_38668844', "zHead");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2875545546186ef1b09ff68_83610486', "zPageTitle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_688935096186ef1b0a2282_20779737', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3279859076186ef1b0ca2d6_25624222', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zHead"} */
class Block_12896660336186ef1b09ca21_38668844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_12896660336186ef1b09ca21_38668844',
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
class Block_2875545546186ef1b09ff68_83610486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_2875545546186ef1b09ff68_83610486',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
: <?php echo $_GET['table'];
}
}
/* {/block "zPageTitle"} */
/* {block "zContent"} */
class Block_688935096186ef1b0a2282_20779737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_688935096186ef1b0a2282_20779737',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageUrl.php','function'=>'smarty_function_zPageUrl',),1=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageName.php','function'=>'smarty_function_zPageName',),2=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <nav>
        <ol class="cleanList">
            <li><a href="<?php echo smarty_function_zPageUrl(array('ID'=>"13"),$_smarty_tpl);?>
" class="inLine font-16">
                <i class="fas fa-caret-left"></i>
                <?php echo smarty_function_zPageName(array('ID'=>"13"),$_smarty_tpl);?>

            </a></li>
        </ol>
    </nav>

    <div class="whiteBack rad-15 pad-20 font-16">
        <?php echo $_smarty_tpl->tpl_vars['zTools']->value->zToolsFormWarning($_smarty_tpl->tpl_vars['success']->value,$_smarty_tpl->tpl_vars['error']->value);?>

        <?php ob_start();
echo $_GET['table'];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('tableIn', zDB::get()->table($_prefixVariable1));?>
        <?php ob_start();
echo $_GET['table'];
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('primaryKey', zDB::get()->primaryKey($_prefixVariable2));?>
        <table class="zTable">
            <thead>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableIn']->value, 'row', false, 'rowN');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rowN']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['rowN']->value == "0") {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'i', false, 'title');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                                <th><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</th>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <th class="zEdit"><?php echo smarty_function_zThis(array('z'=>"Edit"),$_smarty_tpl);?>
</th>
                    <th class="zDelete"><?php echo smarty_function_zThis(array('z'=>"Delete"),$_smarty_tpl);?>
</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableIn']->value, 'row', false, 'rowN');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rowN']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <tr>
                        <?php $_smarty_tpl->_assignInScope('editValue', '');?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['primaryKey']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('keyValue', $_smarty_tpl->tpl_vars['value']->value);?>
                            <?php }?>
                            <?php ob_start();
if (mb_strlen($_smarty_tpl->tpl_vars['value']->value, 'UTF-8') > 200) {
echo "
                                        <textarea name='";
echo (string)$_smarty_tpl->tpl_vars['key']->value;
echo "' class='top-0 bottom-0 pad-10' style='min-height: 200px'>";
echo (string)$_smarty_tpl->tpl_vars['value']->value;
echo "</textarea>
                                    ";
} else {
echo "
                                        <input type='text' name='";
echo (string)$_smarty_tpl->tpl_vars['key']->value;
echo "' class='top-0 bottom-0 pad-10' value='";
echo (string)$_smarty_tpl->tpl_vars['value']->value;
echo "'>
                                    ";
}
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('editValue', ((string)$_smarty_tpl->tpl_vars['editValue']->value)."
                                <div class='zGroup bottom-20'>
                                    <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='".((string)$_smarty_tpl->tpl_vars['key']->value)."'>
                                        ".((string)$_smarty_tpl->tpl_vars['key']->value)."
                                    </label>
                                    ".$_prefixVariable3."
                                </div>");?>
                            <td><?php echo substr(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),0,200);
if (mb_strlen($_smarty_tpl->tpl_vars['value']->value, 'UTF-8') > 200) {?>...<?php }?></td>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <td class="zEdit">
                            <?php ob_start();
echo smarty_function_zThis(array('z'=>"Edit"),$_smarty_tpl);
$_prefixVariable4 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Save"),$_smarty_tpl);
$_prefixVariable5 = ob_get_clean();
ob_start();
echo smarty_function_zThis(array('z'=>"Edit Row"),$_smarty_tpl);
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['zContent']->value->src["admin"])."/_partials/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('_mButton'=>$_prefixVariable4,'_mSubmit'=>$_prefixVariable5,'_mForm'=>$_smarty_tpl->tpl_vars['zContent']->value->base_uri,'_mLabel'=>$_smarty_tpl->tpl_vars['rowN']->value,'_mHidden'=>"<input type='text' name='type' value='edit_row'><input type='text' name='key' value='".((string)$_smarty_tpl->tpl_vars['primaryKey']->value)."'><input type='text' name='keyValue' value='".((string)$_smarty_tpl->tpl_vars['keyValue']->value)."'>",'_mTitle'=>$_prefixVariable6,'_mContent'=>((string)$_smarty_tpl->tpl_vars['editValue']->value)), 0, true);
?>
                        </td>
                        <td class="zDelete"></td>
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
class Block_3279859076186ef1b0ca2d6_25624222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_3279859076186ef1b0ca2d6_25624222',
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
                        {select: [<?php echo count($_smarty_tpl->tpl_vars['tableIn']->value[0]);?>
, <?php echo count($_smarty_tpl->tpl_vars['tableIn']->value[0])+1;?>
], sortable: false},
                    ]
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
