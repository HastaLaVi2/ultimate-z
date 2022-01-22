<?php
/* Smarty version 3.1.40, created on 2022-01-22 09:47:09
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebd29dd82ce2_60080620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0d64c50b253ec0d54e6807c216dbf8854f56ef' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/_template.tpl',
      1 => 1642844594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ebd29dd82ce2_60080620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '79361666661ebd29dd3d4a2_69217624';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55185608361ebd29dd5ed46_07793668', "zTop");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177142101461ebd29dd645e1_52917502', "zPageTitle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63184101461ebd29dd65ae4_34848106', "zContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zTop"} */
class Block_55185608361ebd29dd5ed46_07793668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_55185608361ebd29dd5ed46_07793668',
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
/* {block "zPageTitle"} */
class Block_177142101461ebd29dd645e1_52917502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_177142101461ebd29dd645e1_52917502',
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
class Block_63184101461ebd29dd65ae4_34848106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_63184101461ebd29dd65ae4_34848106',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="whiteBack rad-15 pad-20 font-16">
        <?php $_smarty_tpl->_assignInScope('all', zDB::get()->all());?>
        <table class="zTable" no_sort="2-3">
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
}
