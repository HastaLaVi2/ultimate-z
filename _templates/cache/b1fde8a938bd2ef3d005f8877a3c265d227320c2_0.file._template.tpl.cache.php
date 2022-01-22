<?php
/* Smarty version 3.1.40, created on 2022-01-22 09:49:59
  from '/Users/kerimcanayaz/Sites/ultimate-z/_templates/1/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61ebd347845ed4_15888743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1fde8a938bd2ef3d005f8877a3c265d227320c2' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_templates/1/_template.tpl',
      1 => 1640729141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_holders/".((string)$_smarty_tpl->tpl_vars[\'holder\']->value->id)."/_holder.tpl' => 1,
  ),
),false)) {
function content_61ebd347845ed4_15888743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '28378326661ebd34780ac73_55510339';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191680142061ebd34782f107_45257331', "zHead");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2210345261ebd347832815_58320895', "zBefore");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157569581061ebd34783b8d3_48715783', "zContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zHead"} */
class Block_191680142061ebd34782f107_45257331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zHead' => 
  array (
    0 => 'Block_191680142061ebd34782f107_45257331',
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
class Block_2210345261ebd347832815_58320895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBefore' => 
  array (
    0 => 'Block_2210345261ebd347832815_58320895',
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
class Block_157569581061ebd34783b8d3_48715783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_157569581061ebd34783b8d3_48715783',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_assignInScope('holders', $_smarty_tpl->tpl_vars['zPage']->value->zPageGetHolders($_smarty_tpl->tpl_vars['zContent']->value->language->id,1));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holders']->value, 'holder');
$_smarty_tpl->tpl_vars['holder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['holder']->value) {
$_smarty_tpl->tpl_vars['holder']->do_else = false;
?>
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 100+1 - (1) : 1-(100)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <?php $_smarty_tpl->_assignInScope("_".((string)$_smarty_tpl->tpl_vars['foo']->value), null);?>
        <?php }
}
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['holder']->value->content, 'content', false, 'k');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope("_".((string)($_smarty_tpl->tpl_vars['k']->value+1)), ((string)$_smarty_tpl->tpl_vars['content']->value));?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!-- zHolder: <?php echo $_smarty_tpl->tpl_vars['holder']->value->name;?>
 -->
        <?php $_smarty_tpl->_subTemplateRender("file:_holders/".((string)$_smarty_tpl->tpl_vars['holder']->value->id)."/_holder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, true);
?>
        <!-- zHolder: <?php echo $_smarty_tpl->tpl_vars['holder']->value->name;?>
 -->
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "zContent"} */
}
