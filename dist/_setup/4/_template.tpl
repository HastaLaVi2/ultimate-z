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
    <title>zSetup</title>
    {include file="{$zContent->src["holders"]}/head.tpl"}
    {include file="{$zContent->src["holders"]}/validate.tpl"}
</head>
<body class="zBack">
    <div class="col-12 heightMinAll">
        <div class="width-600 zMob-widthAll heightMinAll index-5 whiteBack">
            <div class="padLR-128 zMob768-padLR-80 padTB-80">
                {include file="{$zContent->src["admin"]}/_partials/logo.tpl"}
                <h1 class="font-64">{zThis z="Setup."}</h1>
                <p class="font-27_2 gray2 bottom-48">{zThis z="Input your data to create your own control panel."}</p>
                <p class="font-27_2 gray2 top-20"><a href="{$zContent->srcFull["_main"]}index.php?view=setup/3{if $smarty.get.lang}&lang={$smarty.get.lang}{/if}"><i class="fas fa-chevron-left"></i> {zThis z="Go Back"}</a></p>
                <div class="rad-5 height-10 widthAll grayBack1 bottom-20 hideRest">
                    <div class="floatingSpace back3 col-12 row-12">
                    </div>
                </div>
                <form id="zUser-create-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                    {$zTools->zToolsFormWarning($success, $error)}
                    <div class="">
                        <input name="site_name" id="site_name" type="text" class="padL-45" placeholder="{zThis z="Site name"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-globe-europe"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="">
                        <input name="name" id="name" type="text" class="padL-45" placeholder="{zThis z="Name"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="">
                        <input name="surname" id="surname" type="text" class="padL-45" placeholder="{zThis z="Surname"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="">
                        <input name="email" id="email" type="text" class="padL-45" placeholder="{zThis z="Email"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-envelope"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="">
                        <input name="password" id="password" type="password" class="padL-45" placeholder="{zThis z="Password"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-shield-alt"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="">
                        <input name="confirm_password" id="confirm_password" type="password" class="padL-45" placeholder="{zThis z="Confirm Password"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-shield-alt"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <div class="zGroup" style="display: none;">
                            <label class="input-group-text" for="rank"></label>
                            <select name="rank" id="rank" class="form-select">
                                <option value="1" selected></option>
                            </select>
                        </div>
                    </div>
                    <div style="display:none;">
                        <input name="langcode" id="langcode" type="text" value="{$zContent->language->id}">
                    </div>
                    <button id="btnSubmit" class="zButton primary widthAll zShadow">{zThis z="Create"}</button>
                </form>
                <p class="font-27_2 gray2 top-40 bottom-48"><a href="{$zContent->srcFull["_main"]}_admin/index.php{if $smarty.get.lang}?lang={$smarty.get.lang}{/if}">{zThis z="Log in"}. <i class="fas fa-chevron-right"></i></a></p>
                <div class="centerText top-48 font-24">
                    <p class="gray3">{zThis z="Thanks for choosing"},<br><span class="boldText">{zThis z="ultimate Z."}</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
