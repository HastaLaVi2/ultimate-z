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

<!DOCTYPE html>
<html lang="{$zContent->language->iso_code}">
<head>
    <title>{block name="zTitle"}{$zPage->name} {literal}|{/literal} zAdmin{/block}</title>
    {include file="../_holders/head.tpl"}
</head>
<body class="back7">
    {include file="_partials/loading.tpl"}

    <div class="floatingTheSpace fixed index-11 height-100 widthAll">
        <div class="height-70 widthAll back7" zMob-1200="height-100"></div>
        <div class="height-30 widthAll specGrad" zMob-1200="height-40"></div>
    </div>

    <div id="zHead">{block name="zHead"}{/block}</div>

    {include file="_partials/sidebar.tpl"}
    <div class="widthAll pad-32 padL-332" zMob-1200="padL-32">
        {block name="zHeader"}
            {include file="_partials/pageHeader.tpl"}
        {/block}

        <div class="font-24 text4 index-20 fixed" zMob-1200="padT-30" id="zPageTitle">
            <h3 class="boldText top-10">{block name="zPageTitle"}{$zPage->name}{/block}</h3>
        </div>

        <div class="font0 padT-100" zMob-1200="padT-130" id="zContent">
            {block name="zContent"}
            {/block}
        </div>

        {include file="_partials/footer.tpl"}
    </div>

    <div id="zBottom">
        {include file="../_holders/footer.tpl"}
        {block name="zBottom"}
        {/block}
    </div>
</body>
</html>
