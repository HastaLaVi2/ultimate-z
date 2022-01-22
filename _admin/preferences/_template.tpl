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
    <section class="whiteBack rad-15 pad-20 font-16">
        <h4 class="font-19 top-0 text4 boldText">{zThis z="Site Settings"}</h4>
        <form id="zUser-preferences-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
            {$zTools->zToolsFormWarning($success, $error)}
            <div class="col-12">
                <div class="zGroup">
                    <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                        {zThis z="Site Name"}
                    </span>
                    <input type="text" class="pad-10 top-0 bottom-0" value="{$z->name}"
                        aria-label="Username" aria-describedby="basic-addon1" name="site_name">
                </div>
                <div class="padTB-15">
                    <input class="zSwitch" type="checkbox" name="enabledSite" id="enabledSite"
                    {if $z->status == "enabled"}value="enabled" checked{/if}>
                    <label for="enabledSite">
                        {if $z->status == "enabled"}
                            {zThis z="Disable site"}
                        {else}
                            {zThis z="Enable site"}
                        {/if}
                    </label>
                    <span class="enable displayNone">{zThis z="Enable site"}</span>
                    <span class="disable displayNone">{zThis z="Disable site"}</span>
                    <div class="font-13">{zThis z="This option will determine whether your website should be open to the internet or not. If this is disabled, the system will recognise your IP and let you see the website, but others will not."}</div>
                </div>
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <h6 class="bottom-0 top-0 font-1em">{zThis z="404 Error Page"}</h6>
                <div class="padTB-15">
                    <input class="zSwitch" type="checkbox" name="error_page" id="error_page"
                    value="{if $z->error == "enabled"}enabled{else}disabled{/if}" {if $z->error == "enabled"}checked{/if}>
                    <label for="error_page">
                        {if $z->error == "enabled"}
                            {zThis z="Disable 404 error page"}
                        {else}
                            {zThis z="Enable 404 error page"}
                        {/if}
                    </label>
                    <span class="enable displayNone">{zThis z="Enable 404 error page"}</span>
                    <span class="disable displayNone">{zThis z="Disable 404 error page"}</span>
                    <div class="font-13">{zThis z="This option will determine whether your website should display a 404 error page, or redirect to homepage when an unknown url entered."}</div>
                </div>
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <h6 class="bottom-0 top-0 font-1em">{zThis z="Enable or Disable Languages on Frontend"}</h6>
                <div class="padTB-15">
                    {assign var=alllangs value=$zTools->zToolsGetAllLangs()}
                    <ul class="cleanList nextToEach bottom-10">
                    {foreach from=$alllangs item=lang}
                        <li style="padding-left: 0">
                            <div>
                                <input type="checkbox" id="language{$lang->id}" name="languages[]" value="{$lang->id}"
                                    {if !$lang->disabled}checked{/if}>
                                <label for="language{$lang->id}">{$lang->name}</label>
                            </div>
                        </li>
                    {/foreach}
                    </ul>
                </div>
                <script>
                $(".zSwitch").change(function() {
                    var value = $(this).val();
                    var enText = $(this).parent().find(".enable").text();
                    var disText = $(this).parent().find(".disable").text();
                    if (value == "enabled") {
                        $(this).next("label").text(enText);
                        $(this).val("disabled");
                    } else {
                        $(this).next("label").text(disText);
                        $(this).val("enabled");
                    }
                });
                </script>
                <button id="btnSubmit" class="zButton primary widthAll zShadow5">{zThis z="Submit"}</button>
            </div>
        </form>
    </section>
    <section class="whiteBack rad-15 pad-20 font-16 top-20">
        <h4 class="font-19 top-0 text4 boldText">{zThis z="Software Update"}</h4>
        <p class="top-0 font-1em">{zThis z="Please make sure you are accepting any possible errors when you update the software."}</p>
        <form class="zForm zSure" method="get" role="form" action="#modalsure">
            <button class="zButton primary widthAll zShadow5">{zThis z="Update"}</button>
        </form>
    </section>
    {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
        _mLabel=update
        _mTitle={zThis z="Updating"}
        _mContent={zThis z="Please wait, your ultimate Z is upping..."}
        _noClose=true
    }
    {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
        _mFormId="zUser-update-form"
        _mForm=$zContent->base_uri
        _mLabel=sure
        _mHidden='<input type="text" name="langcode" class="displayNone" value="{$zContent->language->iso_code}">
                  <input type="text" name="updateSite" class="displayNone" value="true">'
        _mTitle={zThis z="Update"}
        _mContent={zThis z="Are you sure you want to update ultimate Z?"}
    }
{/block}

{block name="zBottom" append}
    <script>
        function zPageJS() {
            $(".zSure").submit(function(e) {
                e.preventDefault();
                window.location.assign("#modalsure");
            });

            // submit form functions
            $("#zUser-preferences-form").submit(function(e) {
                e.preventDefault();

                var form = $(this).clone();
                var post_url = form.attr("action");
                var post_data = form.serialize();

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000
                        }).showToast();
                    },
                    error: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000,
                            backgroundColor: "#f3616d",
                        }).showToast();
                    },
                });
            });
            $("#zUser-update-form").submit(function(e) {
                e.preventDefault();

                var form = $(this).clone();
                var post_url = form.attr("action");
                var post_data = form.serialize();

                window.location.assign("#modalupdate");
                $("body").css("overflow", "hidden");
                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        window.location.assign("#");
                        $("body").css("overflow", "auto");
                        Toastify({
                            text: responseText,
                            duration: 3000
                        }).showToast();
                    },
                    error: function(responseText) {
                        Toastify({
                            text: responseText,
                            duration: 3000,
                            backgroundColor: "#f3616d",
                        }).showToast();
                    },
                });
            });
        }
    </script>
{/block}
