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
    <title>{block name="zTitle"}{$zPage->name} {literal}|{/literal} {$z->name}{/block}</title>
    {block name="zHead"}
        {include file="_holders/head.tpl"}
    {/block}
    {if file_exists("{$tempDirectory}fonts/stylesheet.css")}
        <!-- font libraries -->
        <link rel="stylesheet" href="{$zContent->srcFull["_main"]}{$tempDirectory}fonts/stylesheet.css" type="text/css" charset="utf-8" />
    {/if}

    <!-- custom css/javascript libraries -->
    {if file_exists("{$zContent->srcFull["templates"]}/assets/styles.css")}
        <link rel="stylesheet" type="text/css" href="{$zContent->srcFull["templates"]}/assets/styles.css"/>
    {/if}
    {if file_exists("{$zContent->srcFull["templates"]}/assets/javascript.js")}
        <script src="{$zContent->srcFull["templates"]}/assets/javascript.js"></script>
    {/if}
    {if file_exists("{$tempDirectory}assets/styles.css")}
        <link rel="stylesheet" type="text/css" href="{$zContent->srcFull["_main"]}{$tempDirectory}assets/styles.css"/>
    {/if}
    {if file_exists("{$tempDirectory}assets/javascript.js")}
        <script src="{$zContent->srcFull["_main"]}{$tempDirectory}assets/javascript.js"></script>
    {/if}
</head>
<body class="{block name='zBodyClasses'}{/block}">
    {if file_exists("{$tempDirectory}loading.tpl")}
        {include file="{$tempDirectory}loading.tpl"}
    {else}
        {include file="_admin/_partials/loading.tpl"}
    {/if}

    <div id="zTop">{block name="zTop"}{/block}</div>

    <div id="zBefore">{block name="zBefore"}{/block}</div>

    <div id="zContent">
        {block name="zContent"}
        {/block}
    </div>

    <div id="zAfter">{block name="zAfter"}{/block}</div>

    <div id="zBottom">
        {block name="zBottom"}
        {/block}
    </div>
</body>
</html>
