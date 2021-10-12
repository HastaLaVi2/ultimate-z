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

{assign var=allPages value=$zPageTools->zPageGetByCategory($_1, $zContent->language->id)}
<div class="pad-40">
    <ul class="cleanList zList bottom-20 font-13 grayBack1 rad-20 pad-20">
        {foreach from=$allPages item=page}
            <li><a href="{$zContent->srcFull["main"]}{$page->url|ltrim:"/"}">{$page->name}</a></li>
        {/foreach}
    </ul>
</div>
