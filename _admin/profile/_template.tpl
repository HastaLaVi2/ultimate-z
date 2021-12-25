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
    {if $editUser}{else}
        {assign var=editUser value=$zUser}
    {/if}
    <div class="col-3 colTop padR-10 zMob-padB-20">
        {if $zUser->id !== $editUser->id}
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText">{zThis z="Change Rank"}</h4>
            <form id="zUser-change-rank-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success5, $error5)}
                <input name="id_user" id="id_user" type="text" value="{$editUser->id}" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-rank" style="display:none">
                <select class="pad-10 top-0 bottom-20" id="id_rank" name="id_rank">
                    <option disabled>{zThis z="Choose..."}</option>
                    {$zTools->zToolsGetRanks($editUser->id_lang, $editUser->id_rank)}
                </select>
                <button class="zButton primary widthAll zShadow">{zThis z="Submit"}</button>
            </form>
        </div>
        {/if}
        <div class="whiteBack rad-15 pad-20 font-16 {if $zUser->id !== $editUser->id}top-20{/if}">
            <h4 class="font-19 top-0 text4 boldText">{zThis z="Change Avatar"}</h4>
            <form id="zUser-change-avatar-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success3, $error3)}
                <input name="id_user" id="id_user" type="text" value="{$editUser->id}" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-avatar" style="display:none">
                <div class="font0">
                    <div class="zCol-6 zMob990-zCol-4 padR-2">
                        <input type="radio" name="avatar[]" id="avatar1" class="avatar-input displayNone" value="1" {if $editUser->id_picture == "1"}checked{/if}>
                        <label for="avatar1" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="{$zContent->srcFull["images"]}/user/profile/1.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar2" class="avatar-input displayNone" value="2" {if $editUser->id_picture == "2"}checked{/if}>
                        <label for="avatar2" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="{$zContent->srcFull["images"]}/user/profile/2.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2 zMob990-padL-2">
                        <input type="radio" name="avatar[]" id="avatar3" class="avatar-input displayNone" value="3" {if $editUser->id_picture == "3"}checked{/if}>
                        <label for="avatar3" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="{$zContent->srcFull["images"]}/user/profile/3.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padR-2">
                        <input type="radio" name="avatar[]" id="avatar4" class="avatar-input displayNone" value="4" {if $editUser->id_picture == "4"}checked{/if}>
                        <label for="avatar4" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="{$zContent->srcFull["images"]}/user/profile/4.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar5" class="avatar-input displayNone" value="5" {if $editUser->id_picture == "5"}checked{/if}>
                        <label for="avatar5" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="{$zContent->srcFull["images"]}/user/profile/5.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2">
                        <input type="radio" name="avatar[]" id="avatar6" class="avatar-input displayNone" value="6" {if $editUser->id_picture == "6"}checked{/if}>
                        <label for="avatar6" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="{$zContent->srcFull["images"]}/user/profile/6.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padR-2">
                        <input type="radio" name="avatar[]" id="avatar7" class="avatar-input displayNone" value="7" {if $editUser->id_picture == "7"}checked{/if}>
                        <label for="avatar7" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="{$zContent->srcFull["images"]}/user/profile/7.jpg" style="float:left">
                        </label>
                    </div>
                    <div class="zCol-6 zMob990-zCol-4 padL-2 zMob990-padLR-2">
                        <input type="radio" name="avatar[]" id="avatar8" class="avatar-input displayNone" value="8" {if $editUser->id_picture == "8"}checked{/if}>
                        <label for="avatar8" class="rad-half bottom-30 pad-0 inLine">
                            <img class="widthAll rad-half" src="{$zContent->srcFull["images"]}/user/profile/8.jpg" style="float:left">
                        </label>
                    </div>
                    <script>
                        $(".avatar-input + label").css("cursor", "pointer");
                        $(".avatar-input:checked + label").css("border", "5px solid #3950a2");
                        $(".avatar-input:checked + label img").css("border", "2px solid #dce7f1");
                        $('input[type=radio]').change(function() {
                            $(".avatar-input + label").css("border", "none");
                            $(".avatar-input + label img").css("border", "none");
                            $(".avatar-input:checked + label").css("border", "5px solid #3950a2");
                            $(".avatar-input:checked + label img").css("border", "2px solid #dce7f1");
                        });
                    </script>
                </div>
                <button class="zButton primary widthAll zShadow5">{zThis z="Submit"}</button>
            </form>
        </div>
    </div>
    <div class="col-9 padL-10 zMob-padB-20">
        <div class="whiteBack rad-15 pad-20 font-16">
            <h4 class="font-19 top-0 text4 boldText">{zThis z="Change Language"}</h4>
            <form id="zUser-change-language-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success4, $error4)}
                <input name="id_user" id="id_user" type="text" value="{$editUser->id}" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-language" style="display:none">
                <div class="zGroup bottom-20">
                    <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="id_lang">
                        {zThis z="Select Language"}
                    </label>
                    <select class="pad-10 top-0 bottom-0" id="id_lang" name="id_lang">
                        <option disabled>{zThis z="Choose..."}</option>
                        {$zTools->zToolsGetLanguages($editUser->id_lang)}
                    </select>
                </div>
                <button class="zButton primary widthAll zShadow5">{zThis z="Submit"}</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText">{zThis z="Change Email"}</h4>
            <form id="zUser-change-email-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success6, $error6)}
                <input name="id_user" id="id_user" type="text" value="{$editUser->id}" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-email" style="display:none">
                <div class="bottom-20">
                    <input name="email_new" id="email_new" type="email" class="padL-45" placeholder="{zThis z="Email"}" value="{$editUser->email}">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-envelope"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow5">{zThis z="Submit"}</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText">{zThis z="Change Name"}</h4>
            <form id="zUser-change-name-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success1, $error1)}
                <input name="id_user" id="id_user" type="text" value="{$editUser->id}" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-name" style="display:none">
                <div class="bottom-20">
                    <input name="name_new" id="name_new" type="text" class="padL-45" placeholder="{zThis z="Name"}">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-user"></i>
                    </div>
                </div>
                <div class="bottom-20">
                    <input name="surname_new" id="surname_new" type="text" class="padL-45" placeholder="{zThis z="Surname"}">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="far fa-user"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow5">{zThis z="Submit"}</button>
            </form>
        </div>
        <div class="whiteBack rad-15 pad-20 font-16 top-20">
            <h4 class="font-19 top-0 text4 boldText">{zThis z="Change Password"}</h4>
            <form id="zUser-change-password-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                {$zTools->zToolsFormWarning($success2, $error2)}
                <input name="id_user" id="id_user" type="text" value="{$editUser->id}" style="display:none">
                <input name="form_type" id="form_type" type="text" value="change-password" style="display:none">
                <div class="bottom-20">
                    <input name="password" id="password" type="password" class="padL-45" placeholder="{zThis z="Old Password"}">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                </div>
                <div class="bottom-20">
                    <input name="password_new" id="password_new" type="password" class="padL-45" placeholder="{zThis z="New Password"}">
                    <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                </div>
                <button class="zButton primary widthAll zShadow5">{zThis z="Submit"}</button>
            </form>
        </div>
    </div>
{/block}

{block name="zBottom" append}
    <script>
        function zPageJS() {
            // submit form functions
            $(".zForm").submit(function(e) {
                e.preventDefault();

                var form = $(this).clone();
                if (form.find("select")) {
                    form.find("select").each(function() {
                        var name = $(this).attr("name");
                        var value = $("#"+name+" option").filter(":selected").val();
                        $(this).val(value);
                    });
                }
                var post_url = form.attr("action");
                var post_data = form.serialize();
                var form_type = $(this).find("#form_type").val();

                $.ajax({
                    type: "POST",
                    url: post_url,
                    data: post_data,
                    success: function(responseText) {
                        {if $zUser->id == $editUser->id}
                        if (form_type == "change-name" || form_type == "change-avatar") {
                            $("#zUser").load(window.location.href + " #zUser > *");
                        }
                        {/if}
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

        document.addEventListener("DOMContentLoaded", function(event) {
            zPageJS();
        });
    </script>
{/block}
