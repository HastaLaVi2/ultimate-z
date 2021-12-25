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
    <title>{$zPage->name} | {$z->name}</title>
    {include file="{$zContent->src["holders"]}/head.tpl"}
    {include file="{$zContent->src["holders"]}/validate.tpl"}
</head>
<body class="zBack">
    <div class="col-12 heightMinAll">
        <div class="width-600 zMob-widthAll heightMinAll index-5 whiteBack">
            <div class="padLR-128 zMob768-padLR-40 padTB-80">
                {include file="{$zContent->src["admin"]}/_partials/logo.tpl"}
                <h1 class="font-64 boldText">{zThis z="Forgot Password"}.</h1>
                {if $changeToken}
                    <p class="font-27_2 gray2 bottom-48">{zThis z="Enter a new password for your account."}</p>
                    <form id="zUser-forgot-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                        {$zTools->zToolsFormWarning($success, $error)}
                        <div class="help-box zShow-DBHelp whiteText animation pad-16 rad-4 bottom-10 displayNone">
                            <span class="padR-50"></span>
                            <div class="zTog-DBHelp pointThis floatingTheRight row-12 pad-13 font-25_6">
                                <i class="far fa-times"></i>
                            </div>
                        </div>
                        <input name="email" type="text" class="display-none" value="{$smarty.get.email}">
                        <input name="token" type="text" class="display-none" value="{$smarty.get.token}">
                        <div>
                            <input name="password" id="password" type="password" class="padL-45" placeholder="{zThis z="Password"}">
                            <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <div class="help-box top-10 bottom-25 rad-4"></div>
                        <div>
                            <input name="confirm_password" id="confirm_password" type="password" class="padL-45" placeholder="{zThis z="Confirm Password"}">
                            <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <div class="help-box top-10 bottom-25 rad-4"></div>
                        <button id="btnSubmit" class="zButton primary widthAll zShadow5">{zThis z="Send"}</button>
                    </form>
                {else}
                    <p class="font-27_2 gray2 bottom-48">{zThis z="Input your email and we will send you reset password link."}</p>
                    <form id="zUser-forgot-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                        {$zTools->zToolsFormWarning($success, $error)}
                        <div class="help-box zShow-DBHelp whiteText animation pad-16 rad-4 bottom-10 displayNone">
                            <span class="padR-50"></span>
                            <div class="zTog-DBHelp pointThis floatingTheRight row-12 pad-13 font-25_6">
                                <i class="far fa-times"></i>
                            </div>
                        </div>
                        <input name="langcode" id="langcode" type="text" class="display-none" value="{$zContent->language->iso_code}">
                        <div>
                            <input name="email" id="email" type="email" class="padL-45" placeholder="{zThis z="Email"}">
                            <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="help-box top-10 bottom-25 rad-4"></div>
                        <button id="btnSubmit" class="zButton primary widthAll zShadow5">{zThis z="Send"}</button>
                    </form>
                {/if}
                <p class="font-27_2 gray2 top-20 bottom-48">
                    <a href="{$zContent->srcFull["main"]}_admin/login/" class="forceLink">{zThis z="Remember your account?"}</a>
                </p>
                <div class="centerText top-48 font-24">
                    <p class="gray3">{zThis z="Thanks for choosing"},<br><span class="boldText">{zThis z="ultimate Z."}</span></p>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(".zForm").submit(function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(responseText) {
                var helpBox = $(".help-box");
                if (responseText.includes("A renew link has been sent") || responseText.includes("Password updated")
                    || responseText.includes("bir yenileme bağlantısı gönderildi") || responseText.includes("Şifre güncellendi")) {
                    helpBox.removeClass("displayNone").removeClass("alertBack").addClass("succBack");
                    helpBox.find("span").text(responseText.split("~").pop());
                } else {
                    helpBox.removeClass("displayNone").removeClass("succBack").addClass("alertBack");
                    helpBox.find("span").text(responseText.split("~").pop());
                }
            }
        });
    });
    </script>
</body>
</html>
