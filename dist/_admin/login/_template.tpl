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
                <h1 class="font-64 boldText">{zThis z="Log in"}.</h1>
                <p class="font-27_2 gray2 bottom-48">{zThis z="Input your data to create your own control panel."}</p>

                <form id="zUser-login-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                    {$zTools->zToolsFormWarning($success, $error)}
                    <div>
                        <input name="name" id="name" type="text" class="padL-45" placeholder="{zThis z="Name"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <input name="surname" id="surname" type="text" class="padL-45" placeholder="{zThis z="Surname"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div>
                        <input name="password" id="password" type="password" class="padL-45" placeholder="{zThis z="Password"}">
                        <div class="floatingSpace font-25_6 padTB-13 padL-10 gray2">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div class="help-box top-10 bottom-25 rad-4"></div>
                    <div class="bottom-25">
                        <input type="checkbox" value="1" name="keepLoggedIn" id="keepLoggedIn">
                        <label class="top--8" for="keepLoggedIn">
                            {zThis z="Keep me logged in"}
                        </label>
                    </div>
                    <button id="btnSubmit" class="zButton primary widthAll zShadow">{zThis z="Log in"}</button>
                </form>
                <p class="font-27_2 gray2 top-20 bottom-48">
                    <a href="{$zContent->srcFull["main"]}_admin/forgot/" class="forceLink">{zThis z="Forgot your password?"}</a>
                </p>
                <div class="centerText top-48 font-24">
                    <p class="gray3">{zThis z="Thanks for choosing"},<br><span class="boldText">{zThis z="ultimate Z."}</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
