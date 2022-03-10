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

{block name="zTop" append}
    {include file="{$zContent->src["holders"]}/validate.tpl"}
{/block}

{block name="zBodyClasses"}back7{/block}

{block name="zContent" append}
{if $zPage->id == "998"}
{elseif $zPage->id == "999"}
<div class="pad-50">
    <form id="zUser-create-form" class="zForm width-500 horMid rad-20 whiteBack pad-20" method="POST" role="form" action="{$zContent->base_uri}">
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="name">
                {zThis z="Name"}
            </label>
            <input type="text" id="name" name="name" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="surname">
                {zThis z="Surname"}
            </label>
            <input type="text" id="surname" name="surname" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="rank">
                {zThis z="Rank"}
            </label>
            <select name="rank" class="top-0 bottom-0 pad-10" id="rank">
                <option disabled>{zThis z="Choose..."}</option>
                {$zTools->zToolsGetRanks($zContent->language->id)}
            </select>
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="email">
                {zThis z="Email"}
            </label>
            <input type="text" id="email" name="email" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="password">
                {zThis z="Password"}
            </label>
            <input type="password" id="password" name="password" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <div class="zGroup">
            <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="confirm_password">
                {zThis z="Confirm Password"}
            </label>
            <input type="password" id="confirm_password" name="confirm_password" class="top-0 bottom-0 pad-10">
        </div>
        <div class="help-box top-10 bottom-10 rad-4"></div>
        <button type="submit" class="zButton zHov-zShadow5 primary sweet font-16">
            <span>{zThis z="Create"}</span>
        </button>
    </form>
</div>
{/if}
{/block}
