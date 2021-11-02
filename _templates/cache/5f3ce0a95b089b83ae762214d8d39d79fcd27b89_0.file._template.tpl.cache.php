<?php
/* Smarty version 3.1.39, created on 2021-11-02 08:43:37
  from '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6180fa394239f1_63704501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f3ce0a95b089b83ae762214d8d39d79fcd27b89' => 
    array (
      0 => '/Users/kerimcanayaz/Sites/ultimate-z/_admin/_template.tpl',
      1 => 1631556859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/user_card.tpl' => 1,
    'file:_partials/statistics.tpl' => 1,
  ),
),false)) {
function content_6180fa394239f1_63704501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '17725647686180fa393e2435_39482476';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14987030426180fa393fb676_36798287', "zContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5692124686180fa39414232_84390448', "zBottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_main.tpl");
}
/* {block "zContent"} */
class Block_14987030426180fa393fb676_36798287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zContent' => 
  array (
    0 => 'Block_14987030426180fa393fb676_36798287',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <div class="col-3 colTop padR-10 zMob-padB-20">
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/user_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="widthAll zMob-padB-20 padT-20">
            <div class="whiteBack rad-15 pad-0 font-16">
                <h4 class="font-19 top-0 bottom-0 text4 boldText pad-20"><?php echo smarty_function_zThis(array('z'=>"Views by Pages"),$_smarty_tpl);?>
</h4>
                <?php $_smarty_tpl->_assignInScope('pageStats', $_smarty_tpl->tpl_vars['zPageTools']->value->zPageGetAll($_smarty_tpl->tpl_vars['zContent']->value->language->id,"front"));?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageStats']->value, 'page', false, 'key');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                    <div class="statsTabs">
                    <?php }?>
                        <div class="widthAll padL-20 padR-100">
                            <?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>

                            <span class="floatingTheRight padR-20 boldText" style="color: <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%3 == 0) {?>#dc3545<?php } elseif (($_smarty_tpl->tpl_vars['key']->value+1)%2 == 0) {?>#008b75<?php } else { ?>#5350e9<?php }?>">
                                <?php echo $_smarty_tpl->tpl_vars['page']->value->zPageGetViews();?>

                            </span>
                        </div>
                        <div id="chart-<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" class="left--22 right--10"></div>
                    <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%3 == 0) {?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value !== count($_smarty_tpl->tpl_vars['pageStats']->value)-1) {?><div class="statsTabs displayNone"><?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == count($_smarty_tpl->tpl_vars['pageStats']->value)-1) {?>
                    </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="widthAll centerText pad-20 bottom-20">
                    <div class="zDatePrev zCol-6 padR-5 pointThis"><div class="back7 rad-5"><i class="fas fa-chevron-left"></i></div></div>
                    <div class="zDateNext zCol-6 padL-5 pointThis"><div class="back7 rad-5"><i class="fas fa-chevron-right"></i></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-9 colTop">
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/statistics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="widthAll padL-20 zMob-padB-20 padT-20 zMob-padT-0">
            <div class="whiteBack rad-15 pad-20 font-16">
                <h4 class="font-19 top-0 text4 boldText"><?php echo smarty_function_zThis(array('z'=>"Total Views by Period"),$_smarty_tpl);?>
</h4>
                <div id="chart-profile-visit"></div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "zContent"} */
/* {block "zBottom"} */
class Block_5692124686180fa39414232_84390448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'zBottom' => 
  array (
    0 => 'Block_5692124686180fa39414232_84390448',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/kerimcanayaz/Sites/ultimate-z/_scripts/smarty/libs/plugins/function.zThis.php','function'=>'smarty_function_zThis',),));
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/apexcharts/apexcharts.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    $.ajax({
        "async": false,
        "url": "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->srcFull["scripts"];?>
/apexcharts/locales/<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
.json",
        "dataType": "json",
        "success": function (data) {
            window.apexLang = data;
        }
    });

    function dateTable(period) {
        var months = window.apexLang.options.shortMonths;
        var days = window.apexLang.options.days;
        var date = new Date("<?php echo date('Y/m/d');?>
");
        var table = [];

        for (let i = 0; i <= (period-1); i++) {
            table.push([days[date.getDay()] + "", date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear()]);
            date.setDate(date.getDate() - 1);
        }

        return table;
    }

    function apexBarCreate(id, period, data) {
        var table = dateTable(period);

        var options = {
            annotations: {
                position: "back"
            },
            dataLabels: {
                enabled:false
            },
            chart: {
               locales: [window.apexLang],
               defaultLocale: "<?php echo $_smarty_tpl->tpl_vars['zContent']->value->language->iso_code;?>
",
                type: "bar",
                height: 300
            },
            fill: {
                opacity:1
            },
            plotOptions: {
            },
            series: [{
                name: "<?php echo smarty_function_zThis(array('z'=>"Visits"),$_smarty_tpl);?>
",
                data: data
            }],
            colors: "#435ebe",
            xaxis: {
                categories: table,
            },
        };
        var element = new ApexCharts(document.querySelector(id), options);
        element.render();
    }

    function apexLineCreate(id, period, data, color) {
        var table = dateTable(period);

        var options = {
        	series: [{
        		name: "<?php echo smarty_function_zThis(array('z'=>"Visits"),$_smarty_tpl);?>
",
        		data: data
        	}],
        	chart: {
        		height: 80,
        		type: "area",
        		toolbar: {
        			show:false,
        		},
        	},
        	colors: [color],
        	stroke: {
        		width: 2,
        	},
        	grid: {
        		show:false,
        	},
        	dataLabels: {
        		enabled: false
        	},
        	xaxis: {
        		type: "date",
        		categories: table,
        		axisBorder: {
        			show:false
        		},
        		axisTicks: {
        			show:false
        		},
        		labels: {
        			show:false,
        		}
        	},
        	show:false,
        	yaxis: {
        		labels: {
        			show:false,
        		},
        	},
        	tooltip: {
        		x: {
        			format: "dd/MM/yy"
        		},
        	},
        };

        var element = new ApexCharts(document.querySelector(id), options);
        element.render();
    }

    function zPageJS() {
        $("[id^=SvgjsSvg]").remove();

        apexBarCreate("#chart-profile-visit", 7, <?php echo json_encode($_smarty_tpl->tpl_vars['zTools']->value->zToolsViewsTotalForPeriod("7"));?>
);
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageStats']->value, 'page', false, 'key');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
        apexLineCreate(
            "#chart-<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
",
            12,
            <?php echo json_encode($_smarty_tpl->tpl_vars['zTools']->value->zToolsViewsTotalForPeriod("12",((string)$_smarty_tpl->tpl_vars['page']->value->id)));?>
,
            <?php if (($_smarty_tpl->tpl_vars['key']->value+1)%3 == 0) {?>"#dc3545"<?php } elseif (($_smarty_tpl->tpl_vars['key']->value+1)%2 == 0) {?>"#008b75"<?php } else { ?>"#5350e9"<?php }?>
        );
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        let tabNum = 0;
        $(".zDateNext").click(function() {
            var statsTabs = $(".statsTabs");
            if (statsTabs[tabNum+1]) {
                $(statsTabs[tabNum]).addClass("displayNone");
                $(statsTabs[tabNum+1]).removeClass("displayNone");
                tabNum++;
            }
        });
        $(".zDatePrev").click(function() {
            var statsTabs = $(".statsTabs");
            if (statsTabs[tabNum-1]) {
                $(statsTabs[tabNum]).addClass("displayNone");
                $(statsTabs[tabNum-1]).removeClass("displayNone");
                tabNum--;
            }
        });

        // remove additional apexcharts tags
        var styleTags = $("head").find("style");
        if (styleTags.length > 2) {
            $(styleTags[styleTags.length-1]).remove();
        }
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
