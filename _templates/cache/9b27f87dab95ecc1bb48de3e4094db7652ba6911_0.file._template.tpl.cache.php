<?php
/* Smarty version 3.1.39, created on 2021-11-06 21:08:32
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/design/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6186eed0e75f30_92235413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b27f87dab95ecc1bb48de3e4094db7652ba6911' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/layouts/design/_template.tpl',
      1 => 1629644002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6186eed0e75f30_92235413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '3763888866186eed0e573a4_20668809';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15289408426186eed0e72567_91638966', "zContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zContent"} */
class Block_15289408426186eed0e72567_91638966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_15289408426186eed0e72567_91638966',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageUrl.php','function'=>'smarty_function_zPageUrl',),1=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zPageName.php','function'=>'smarty_function_zPageName',),));
?>

    <a href="<?php echo smarty_function_zPageUrl(array('ID'=>"18"),$_smarty_tpl);?>
">
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 bottom-0 text4 boldText"><?php echo smarty_function_zPageName(array('ID'=>"18"),$_smarty_tpl);?>
</h4>
        </div>
    </a>
<?php
}
}
/* {/block "zContent"} */
}
