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
    <title>{$zPage->name} {literal}|{/literal} {$z->name}</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    {include file="_holders/head.tpl"}
</head>
<body>
    {assign var=holders value=$zPage->zPageGetHolders($zContent->language->id, 1)}
    {foreach from=$holders item=holder}
        {foreach from=$holder->content key=k item=content}
            {assign var="_{$k+1}" value="$content"}
        {/foreach}
        <!-- zHolder: {$holder->name} -->
        {include file="_holders/{$holder->id}/_holder.tpl" scope="parent"}
        <!-- zHolder: {$holder->name} -->
    {/foreach}
</body>
</html>
