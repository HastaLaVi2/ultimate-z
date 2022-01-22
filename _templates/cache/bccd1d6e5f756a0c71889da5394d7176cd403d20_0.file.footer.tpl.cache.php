<?php
/* Smarty version 3.1.40, created on 2022-01-22 10:46:47
  from '/Users/kerimcanayaz/Sites/ultimate-z/_holders/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebe097185306_18885140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bccd1d6e5f756a0c71889da5394d7176cd403d20' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_holders/footer.tpl',
      1 => 1642844528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ebe097185306_18885140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
$_smarty_tpl->compiled->nocache_hash = '121070305761ebe0971807b0_11930632';
?>

<?php if (!$_smarty_tpl->tpl_vars['zAdmin']->value) {?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['zAdmin']->value) {?>
    <!-- toastify -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/toastify/toastify.js"><?php echo '</script'; ?>
>

    <!-- simple-datatables -->
    <?php echo '<script'; ?>
>
    var entriesPerPage = "<?php echo smarty_function_zThis(array('z'=>"entries per page"),$_smarty_tpl);?>
";
    var searchOn = "<?php echo smarty_function_zThis(array('z'=>"Search..."),$_smarty_tpl);?>
";
    var showingOf = "<?php echo smarty_function_zThis(array('z'=>"Showing [start] to [end] of [rows] entries"),$_smarty_tpl);?>
";
    showingOf = showingOf.replaceAll("[", "{").replaceAll("]", "}");
    var noRowFound = "<?php echo smarty_function_zThis(array('z'=>"No entries found"),$_smarty_tpl);?>
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
    function zTable() {
        // create simple datatables
        window.zTables = [];
        var tables = document.querySelectorAll(".zTable");
        tables.forEach((item, i) => {
            var jItem = $(item);
            var columns = jItem.attr("no_sort") ? { select: jItem.attr("no_sort").split("-"), sortable: false} : {};
            var dataTable = new simpleDatatables.DataTable(item, {
                columns: [columns]
            });
            dataTable.on("datatable.page", function(page) {
                jItem.find("a").click(magicLinks);
            });
            dataTable.on("datatable.sort", function(column, direction) {
                jItem.find("a").click(magicLinks);
            });
            window.zTables.push(dataTable);
        });
    }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    $(window).on("load", function () {
        zTable();
        zDetect();
        // do we have extra javascript function to be run on the new page?
        // let's run it if we do, but we need to check if we have a function on the page at all.
        var zPageJSS = [];

        for (var x in window) {
            if (typeof window[x] === "function" && x.indexOf("zPageJS") === 0) {
                zPageJSS.push(x);
            }
        }
        zPageJSS.forEach(function(item) {
            window[item]();
        });
    });
    <?php echo '</script'; ?>
>
<?php }
}
}
