<?php
/* Smarty version 3.1.40, created on 2022-01-22 09:49:36
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/table/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebd330772838_23315969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874ba74eb8061e9737deb3ec0cdeadd9aa154d32' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/advanced/database/table/_template.tpl',
      1 => 1642844600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ebd330772838_23315969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '8129990361ebd330716996_22843374';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149124808461ebd330737403_11321719', "zTop");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121110168861ebd33073c9f6_14051562', "zPageTitle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6989124061ebd3307402d9_36562640', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188085454461ebd330770d24_96316240', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zTop"} */
class Block_149124808461ebd330737403_11321719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zTop' => 
  array (
    0 => 'Block_149124808461ebd330737403_11321719',
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
class Block_121110168861ebd33073c9f6_14051562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zPageTitle' => 
  array (
    0 => 'Block_121110168861ebd33073c9f6_14051562',
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
class Block_6989124061ebd3307402d9_36562640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_6989124061ebd3307402d9_36562640',
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
        <table class="zTable" no_sort="<?php echo count($_smarty_tpl->tpl_vars['tableIn']->value[0]);?>
-<?php echo count($_smarty_tpl->tpl_vars['tableIn']->value[0])+1;?>
">
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
                            <?php $_smarty_tpl->_assignInScope('dataType', zDB::get()->dataType($_GET['table'],$_smarty_tpl->tpl_vars['key']->value));?>
                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['dataType']->value == "text") {
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
class Block_188085454461ebd330770d24_96316240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_188085454461ebd330770d24_96316240',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function submitForm() {
            $(".zForm").submit(function(e) {
                e.preventDefault();
                var post_url = $(this).attr("action");
                var post_data = $(this).serialize();

                var json = $(this).serializeArray();
                var final = {};
                $.map(json, function(n, i){
                    final[n["name"]] = n["value"];
                });

                console.log(final);

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
        function zPageJS() {
            submitForm();
            window.zTables.forEach((item, i) => {
                item.on("datatable.page", function(page) {
                    submitForm();
                });
                item.on("datatable.sort", function(column, direction) {
                    submitForm();
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
