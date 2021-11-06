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
    {include file="{$zContent->src["holders"]}/validate.tpl"}
{/block}

{block name="zContent" append}
    {assign var=allUsers value=$zUserTools->zUserGetAll()}
    {$zTools->zToolsFormWarning($success, $error)}
    <div class="betwixt-10 bottom-10">
        {foreach from=$allUsers item=user}
            <div class="col-4 bottom-20">
                {if $zUser->id !== $user->id}
                <div class="floatingTheRight top--10">
                    <a href="#modal{$user->id}" class="zButton primary index-2 rad-30 padLR-9 padT-0 padB-2 centerText">
                        <i class="fas fa-times font-12"></i>
                    </a>
                </div>
                {/if}
                <a href="{$zContent->srcFull["_main"]}_admin/profile/index.php?id_user={$user->id}">
                    <div class="whiteBack rad-15 pad-20">
                        <div class="inLine verMid width-70">
                            <img src="{$zContent->srcFull["images"]}/user/profile/{$user->id_picture}.jpg" class="widthAll rad-half">
                        </div>
                        <div class="floatingSpace row-12 padL-110">
                            <div class="hollyMid">
                                <h5 class="top-0 bottom-0 font-20 text4">{$user->nameSurname}</h5>
                                <h6 class="top-0 bottom-0 font-16 text6">{$user->rank_name}</h6>
                            </div>
                        </div>
                        <div class="floatingTheRight row-12 padR-20">
                            <div class="hollyMid">
                                <i class="fas fa-chevron-right font-22 text6"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        {/foreach}
    </div>
    <a class="zButton zShadow5 primary sweet font-16 index-2 widthAll" href="#modalzCreate">
        {zThis z="Add a User"}
    </a>
    {foreach from=$allUsers item=user}
        {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
            _mSubmit={zThis z="Delete"}
            _mForm=$zContent->base_uri
            _mLabel=$user->id
            _mTitle={zThis z="Delete User"}
            _mHidden="<input type='text' name='user_delete' value='true'><input type='text' name='id_user' value='{$user->id}'>"
            _mContent={zThis z="Are you sure you want to delete this user?"}
        }
    {/foreach}
    {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
        _mSubmit={zThis z="Create"}
        _mForm=$zContent->base_uri
        _mLabel=zCreate
        _mTitle={zThis z="Add a User"}
        _mFormId="zUser-create-form"
        _mHidden="<input type='text' name='langcode' value='{$zContent->language->id}'>"
        _mContent="
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='name'>
                {zThis z="Name"}
            </label>
            <input type='text' id='name' name='name' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='surname'>
                {zThis z="Surname"}
            </label>
            <input type='text' id='surname' name='surname' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='rank'>
                {zThis z="Rank"}
            </label>
            <select name='rank' class='top-0 bottom-0 pad-10' id='rank'>
                <option disabled>{zThis z="Choose..."}</option>
                {$zTools->zToolsGetRanks($zContent->language->id)}
            </select>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='email'>
                {zThis z="Email"}
            </label>
            <input type='text' id='email' name='email' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='password'>
                {zThis z="Password"}
            </label>
            <input type='password' id='password' name='password' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        <div class='zGroup'>
            <label class='back7 borderForm boldMin-1 boldNoR pad-10 text6' for='confirm_password'>
                {zThis z="Confirm Password"}
            </label>
            <input type='password' id='confirm_password' name='confirm_password' class='top-0 bottom-0 pad-10'>
        </div>
        <div class='help-box top-10 bottom-10 rad-4'></div>
        "
    }
{/block}
