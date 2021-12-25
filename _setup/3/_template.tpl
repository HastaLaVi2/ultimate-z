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
    <div id="zLoad1"></div>
    <div id="zLoad2"></div>
    <div id="zLoad0_1"></div>
    <div id="zLoad0_2"></div>

    <div id="zTop"></div>

    <div id="zContent">
        <div class="col-12 heightMinAll">
            <div class="width-600 zMob-widthAll heightMinAll index-5 whiteBack">
                <div class="padLR-128 zMob768-padLR-80 padTB-80">
                    {include file="{$zContent->src["admin"]}/_partials/logo.tpl"}
                    <h1 class="font-64">{zThis z="Setup."}</h1>
                    <p class="font-27_2 gray2 bottom-48">{zThis z="Create tables."}</p>
                    <p class="font-27_2 gray2 top-20"><a href="{$zContent->srcFull["_main"]}index.php?view=setup/2{if $smarty.get.lang}&lang={$smarty.get.lang}{/if}"><i class="fas fa-chevron-left"></i> {zThis z="Go Back"}</a></p>
                    <div class="rad-5 height-10 widthAll grayBack1 bottom-20 hideRest">
                        <div class="floatingSpace back3 col-8 row-12">
                        </div>
                    </div>
                    <form id="zUser-db-form" class="zForm" method="POST" role="form" action="{$zContent->base_uri}">
                        <div class="help-box zShow-DBHelp whiteText animation pad-16 rad-4 bottom-10 displayNone">
                            <span></span>
                            <div class="zTog-DBHelp pointThis floatingTheRight row-12 pad-13 font-25_6">
                                <i class="far fa-times"></i>
                            </div>
                        </div>
                        <input name="create-them" type="text" class="displayNone" value="1">
                        <button id="btnSubmit" class="zButton primary widthAll zShadow">{zThis z="Create"}</button>
                    </form>
                    <p class="font-27_2 gray2 top-20 bottom-48"><a href="{$zContent->srcFull["_main"]}index.php?view=setup/4{if $smarty.get.lang}&lang={$smarty.get.lang}{/if}">{zThis z="Continue"} <i class="fas fa-chevron-right"></i></a></p>
                    <div class="centerText top-48 font-24">
                        <p class="gray3">{zThis z="Thanks for choosing"},<br><span class="boldText">{zThis z="ultimate Z."}</span></p>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $("#zUser-db-form").submit(function(e){
            e.preventDefault();

            var form = $(this);
            var post_url = form.attr("action");
            var post_data = form.serialize();
            $.ajax({
                type: "POST",
                url: post_url,
                data: post_data,
                success: function(responseText) {
                    helpBox = form.find(".help-box");
                    if (responseText.charAt(0) == 1) {
                        helpBox.removeClass("displayNone").removeClass("alertBack").addClass("succBack");
                        helpBox.find("span").text(responseText.substring(1));
                    } else {
                        helpBox.removeClass("displayNone").removeClass("succBack").addClass("alertBack");
                        helpBox.find("span").text(responseText.substring(1));
                    }
                }
            });
        });
        </script>
    </div>

    <div id="zBottom"></div>
</body>
</html>
