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

{block name="zHead" append}
    <link rel="stylesheet" href="{$zContent->srcFull["_main"]}{$tempDirectory}assets/horizontal-scroll.css"/>
{/block}

{block name="zBefore" append}
    {foreach from=$mainMenu item=page}
        <!--<a href="{$zContent->srcFull["_main"]|@rtrim:'/'}{$page->url}">{$page->name}</a>-->
    {/foreach}
{/block}

{block name="zContent" append}
<div class="horMid width-500" style="color:#666;padding:50px;background:#f2f7ff">
    <div style="margin-bottom:50px">
        <img src="{$zContent->srcFull["media"]}/mail_logo.png" style="height:50px">
        <a href="https://onucyirmibir.com" target="_blank" style="position:absolute;bottom:2px;left:90px;">
            <img src="{$zContent->srcFull["media"]}/mail_link.png" style="height:12px">
        </a>
    </div>
    <div style="background:white;border-radius:20px;padding:20px">
        <div style="position:absolute;top:-25px;left:20px;font-weight:bold;color:#2d499d">Password Renew Link</div>
        hey
    </div>
    <div style="font-size:12px;padding-top:20px;text-align:center">
        Copyright © 2021 ultimate Z
    </div>
</div>
<!--
<div class="fullScr widthAll hideRest">
    <div class="floatingSpace pad-20 index-100">
        <a target="home" href="{$zContent->srcFull['_main']}">
            <img src="{$zContent->srcFull["media"]}/logo1.png" class="height-30">
        </a>
    </div>
    <div class="floatingTheRight pad-20 index-100 rightText">
        <ul class="cleanList nextToEach zShow-menu top--28">
            <li>
                <a id="#" class="uppercase blackText thinText">Anasayfa</a>
            </li>
            <li>
                <a id="#" class="uppercase blackText thinText">İletişim</a>
            </li>
            <li>
                <a id="#" class="uppercase blackText thinText">Hakkımızda</a>
            </li>
            <li>
                <a id="#" class="uppercase blackText thinText">EN</a>
            </li>
            <li>
                <a id="#" class="uppercase blackText thinText">TR</a>
            </li>
        </ul>
    </div>
    <div class="row-6 padT-100 padLR-20">
        <div class="horizontal-scroll-wrap">
            <div class="horizontal-scroll">
                <div class="horizontal-scroll-in">
                    <div class="horizontal-scroll-bar style2 lightgallery">
                        {for $num=1 to 25}
                        <img src="{$zContent->srcFull["media"]}/deneme/p/p_{$num}.jpg" class="row-12 padR-20">
                        {/for}
                        <div class="hr-right-padd"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-6 padT-50 padB-50 padLR-20">
        <div class="horizontal-scroll-wrap">
            <div class="horizontal-scroll">
                <div class="horizontal-scroll-in">
                    <div class="horizontal-scroll-bar style2 lightgallery">
                        {for $num=1 to 12}
                        <img src="{$zContent->srcFull["media"]}/deneme/c/c_{$num}.jpg" class="row-12 padR-20">
                        {/for}
                        <div class="hr-right-padd"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="IWantItDownL widthAll centerText font-14 padB-20">Konum: İstanbul | Yıl: 2014 | Kategori: Konut | Yapı Alanı: 1.200 m2</div>
</div>
    <div class="back7 pad-20">
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
    </div>
    {assign var=holders value=$zPage->zPageGetHolders($zContent->language->id, 1)}
    {foreach from=$holders item=holder}
        {for $foo=1 to 100}
            {assign var="_{$foo}" value=null}
        {/for}
        {foreach from=$holder->content key=k item=content}
            {assign var="_{$k+1}" value="$content"}
        {/foreach}-->
        <!-- zHolder: {$holder->name} -->
        <!--{include file="_holders/{$holder->id}/_holder.tpl" scope="parent"}-->
        <!-- zHolder: {$holder->name} -->
    <!--{/foreach}-->
{/block}
