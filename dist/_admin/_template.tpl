{**
 * Copyright since 2021 the ultimate z and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@theultimatez.com so we can send you a copy immediately.
 *
 *}

{extends file="_main.tpl"}

{block name="zContent" append}
    <div class="col-3 colTop padR-10 zMob-padB-20">
        {include file="_partials/user_card.tpl"}
        <div class="widthAll zMob-padB-20 padT-20">
            <div class="whiteBack rad-15 pad-0 font-16">
                <h4 class="font-19 top-0 bottom-0 text4 boldText pad-20">{zThis z="Views by Pages"}</h4>
                {assign var=pageStats value=$zPageTools->zPageGetAll($zContent->language->id, "front")}
                {foreach from=$pageStats key=key item=page}
                    {if $key == 0}
                    <div class="statsTabs">
                    {/if}
                        <div class="widthAll padL-20 padR-100">
                            {$page->name}
                            <span class="floatingTheRight padR-20 boldText" style="color: {if ($key+1) % 3 == 0}#dc3545{elseif ($key+1) % 2 == 0}#008b75{else}#5350e9{/if}">
                                {$page->zPageGetViews()}
                            </span>
                        </div>
                        <div id="chart-{$page->id}" class="left--22 right--10"></div>
                    {if ($key+1) % 3 == 0}
                    </div>
                    {if $key !== $pageStats|count-1}<div class="statsTabs displayNone">{/if}
                    {elseif $key == $pageStats|count-1}
                    </div>
                    {/if}
                {/foreach}
                <div class="widthAll centerText pad-20 bottom-20">
                    <div class="zDatePrev zCol-6 padR-5 pointThis"><div class="back7 rad-5"><i class="fas fa-chevron-left"></i></div></div>
                    <div class="zDateNext zCol-6 padL-5 pointThis"><div class="back7 rad-5"><i class="fas fa-chevron-right"></i></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-9 colTop">
        {include file="_partials/statistics.tpl"}
        <div class="widthAll padL-20 zMob-padB-20 padT-20 zMob-padT-0">
            <div class="whiteBack rad-15 pad-20 font-16">
                <h4 class="font-19 top-0 text4 boldText">{zThis z="Total Views by Period"}</h4>
                <div id="chart-profile-visit"></div>
            </div>
        </div>
    </div>
{/block}

{block name="zBottom" append}
    <script src="{$zContent->srcFull["scripts"]}/apexcharts/apexcharts.min.js"></script>
    <script>
    $.ajax({
        "async": false,
        "url": "{$zContent->srcFull["scripts"]}/apexcharts/locales/{$zContent->language->iso_code}.json",
        "dataType": "json",
        "success": function (data) {
            window.apexLang = data;
        }
    });

    function dateTable(period) {
        var months = window.apexLang.options.shortMonths;
        var days = window.apexLang.options.days;
        var date = new Date("{date('Y/m/d')}");
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
               defaultLocale: "{$zContent->language->iso_code}",
                type: "bar",
                height: 300
            },
            fill: {
                opacity:1
            },
            plotOptions: {
            },
            series: [{
                name: "{zThis z="Visits"}",
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
        		name: "{zThis z="Visits"}",
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

        apexBarCreate("#chart-profile-visit", 7, {json_encode($zTools->zToolsViewsTotalForPeriod("7"))});
        {foreach from=$pageStats key=key item=page}
        apexLineCreate(
            "#chart-{$page->id}",
            12,
            {json_encode($zTools->zToolsViewsTotalForPeriod("12", "{$page->id}"))},
            {if ($key+1) % 3 == 0}"#dc3545"{elseif ($key+1) % 2 == 0}"#008b75"{else}"#5350e9"{/if}
        );
        {/foreach}

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
    </script>
{/block}
