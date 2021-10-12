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
            <div class="padLR-128 zMob768-padLR-40 padTB-80">
                {include file="{$zContent->src["admin"]}/_partials/logo.tpl"}
                <h1 class="font-64">{zThis z="Setup."}</h1>
                <p class="font-27_2 gray2 bottom-48">{zThis z="Choose a language to start."}</p>
                <div class="zGroup bottom-40">
                    <label class="back7 borderForm boldMin-1 boldNoR pad-10 text6" for="id_lang">
                        {zThis z="Select Language"}
                    </label>
                    <select class="zSelect pad-10 top-0 bottom-0" id="id_lang" name="id_lang">
                        <option disabled>{zThis z="Choose..."}</option>
                        {foreach from=$langs key=key item=lang}
                            <option value="{$key}" {if $smarty.get.lang == $key}selected{/if}>{$lang}</option>
                        {/foreach}
                    </select>
                </div>
                <p class="font-27_2 gray2 top-20 bottom-48"><a href="{$zContent->srcFull["_main"]}index.php?view=setup/2{if $smarty.get.lang}&lang={$smarty.get.lang}{/if}">{zThis z="Continue"} <i class="fas fa-chevron-right"></i></a></p>
                <div class="centerText top-48 font-24">
                    <p class="gray3">{zThis z="Thanks for choosing"},<br><span class="boldText">{zThis z="ultimate Z."}</span></p>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(".zSelect").change(function() {
        window.location.href = "{$zContent->srcFull["_main"]}index.php?lang=" + $(this).val();
    });
    </script>
</body>
</html>
