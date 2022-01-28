<?php
/* Smarty version 3.1.40, created on 2022-01-27 20:39:50
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/1/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61f303168bb5d5_82119339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1fde8a938bd2ef3d005f8877a3c265d227320c2' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_templates/1/_template.tpl',
      1 => 1643203012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f303168bb5d5_82119339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '135246511361f30316873c74_13696723';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164048965761f303168a50b3_96747981', "zHead");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86423111761f303168a8972_31136607', "zBefore");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170174920661f303168b6be8_27925754', "zContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zHead"} */
class Block_164048965761f303168a50b3_96747981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_164048965761f303168a50b3_96747981',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"];
echo $_smarty_tpl->tpl_vars['tempDirectory']->value;?>
assets/horizontal-scroll.css"/>
<?php
}
}
/* {/block "zHead"} */
/* {block "zBefore"} */
class Block_86423111761f303168a8972_31136607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBefore' => 
  array (
    0 => 'Block_86423111761f303168a8972_31136607',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class"pad-20">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainMenu']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value->status) {?>
            <a href="<?php echo rtrim($_smarty_tpl->tpl_vars['zContent']->value->srcFull["_main"],'/');
echo $_smarty_tpl->tpl_vars['page']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</a>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
/* {/block "zBefore"} */
/* {block "zContent"} */
class Block_170174920661f303168b6be8_27925754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_170174920661f303168b6be8_27925754',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zBlock.php','function'=>'smarty_function_zBlock',),));
?>

    <!--<div class="back7 pad-20">
        <div class="whiteBack rad-20 width-280 hideRest zShadow">
            <div class="pad-20 padB-10">
                <div class="zCol-6 padR-10">
                    <select class="zSelect many pad-10 rad-10 top-0 bottom-0">
                        <option>Mayıs</option>
                        <option>Haziran</option>
                        <option>Temmuz</option>
                    </select>
                </div>
                <div class="zCol-6 padL-10">
                    <select class="zSelect many pad-10 rad-10 top-0 bottom-0 zCol-6">
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option selected>2021</option>
                    </select>
                </div>
                <div class="padT-20 centerText gray2">
                    <div class="inLine width-34">Pt</div>
                    <div class="inLine width-34">Sa</div>
                    <div class="inLine width-34">Ça</div>
                    <div class="inLine width-34">Pe</div>
                    <div class="inLine width-34">Cu</div>
                    <div class="inLine width-34">Ct</div>
                    <div class="inLine width-34">Pa</div>
                </div>
            </div>
            <div class="padT-10 padB-5 centerText grayBack1">
                <div>
                    <div class="inLine width-35">1</div>
                    <div class="inLine width-35">2</div>
                    <div class="inLine width-35">3</div>
                    <div class="inLine width-35">4</div>
                    <div class="inLine width-35">5</div>
                    <div class="inLine width-35">6</div>
                    <div class="inLine width-35">7</div>
                </div>
            </div>
            <div class="padTB-5 centerText grayBack1">
                <div>
                    <div class="inLine width-35">8</div>
                    <div class="inLine width-35">9</div>
                    <div class="inLine width-35">10</div>
                    <div class="inLine width-35">11</div>
                    <div class="inLine width-35">12</div>
                    <div class="inLine width-35">13</div>
                    <div class="inLine width-35">14</div>
                </div>
            </div>
            <div class="padTB-5 centerText grayBack1">
                <div>
                    <div class="inLine width-35">15</div>
                    <div class="inLine width-35">16</div>
                    <div class="inLine width-35">17</div>
                    <div class="inLine width-35">18</div>
                    <div class="inLine width-35">19</div>
                    <div class="inLine width-35">20</div>
                    <div class="inLine width-35">21</div>
                </div>
            </div>
            <div class="padTB-5 centerText grayBack1">
                <div>
                    <div class="inLine width-35">22</div>
                    <div class="inLine width-35">23</div>
                    <div class="inLine width-35">24</div>
                    <div class="inLine width-35">25</div>
                    <div class="inLine width-35">26</div>
                    <div class="inLine width-35">27</div>
                    <div class="inLine width-35">28</div>
                </div>
            </div>
            <div class="padT-5 padB-20 centerText grayBack1">
                <div>
                    <div class="inLine width-35">29</div>
                    <div class="inLine width-35">30</div>
                    <div class="inLine width-35">31</div>
                    <div class="inLine width-35">1</div>
                    <div class="inLine width-35">2</div>
                    <div class="inLine width-35">3</div>
                    <div class="inLine width-35">4</div>
                </div>
            </div>
        </div>
    </div>-->
    <?php echo smarty_function_zBlock(array('ID'=>"1"),$_smarty_tpl);?>

<?php
}
}
/* {/block "zContent"} */
}
