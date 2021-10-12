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

{assign var=desktopType value="same"}
{assign var=desktopDiffer_bg value="#ffffff"}
{assign var=desktopDiffer_rad value="0"}
{assign var=desktopDiffer_size value="100"}
{assign var=iosType value="same"}
{assign var=iosDiffer_bg value="#ffffff"}
{assign var=iosDiffer_size value="100"}
{assign var=androidType value="same"}
{assign var=androidDiffer_bg value="#ffffff"}
{assign var=androidDiffer_size value="100"}
{assign var=winType value="same"}
{assign var=winDiffer_bg value="#2d89ef"}
{assign var=macDiffer_bg value="#2d89ef"}

{block name="zHead" append}
    <!-- filepond -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond.css">
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.css">
{/block}

{block name="zContent" append}
    <nav>
        <ol class="cleanList">
            <li><a href="{zPageUrl ID="17"}" class="inLine font-16">
                <i class="fas fa-caret-left"></i>
                {zPageName ID="17"}
            </a></li>
        </ol>
    </nav>

    <div class="col-12">
        <div class="whiteBack rad-15 pad-20 font-16">
            <div>
                <input class="displayNone" value="{$content}">
                <input type="file" class="filepond">
            </div>
            <form id="zPage-favicon-form" class="zForm favSettings displayNone" method="POST" role="form" action="">
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                {$zTools->zToolsFormWarning($success, $error)}
                <!-- DESKTOP -->
                <div class="col-4 colTop">
                    <h6 class="bottom-10 top-10 font-1em">{zThis z="Desktop Browsers"}</h6>
                    <p class="font-15 bottom-0">{zThis z="Normal Theme"}</p>
                    <div class="rad-5 hideRest borderForm boldMin-1 bottom-10">
                        <div class="padT-8 boldSoW boldMin-5 boldNoT boldNoR boldNoL font0 left--25" style="background: #dee1e6;">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height:35px;margin-bottom:-1px;fill:white;"><defs><symbol id="chrome-tab-geometry-left" viewBox="0 0 150 36"><path d="M17 0h197v36H0v-2c4.5 0 9-3.5 9-8V8c0-4.5 3.5-8 8-8z"/></symbol><symbol id="chrome-tab-geometry-right" viewBox="0 0 150 36"><use xlink:href="#chrome-tab-geometry-left"/></symbol><clipPath id="crop"><rect class="mask" x="0"/></clipPath></defs><svg height="36px"><use xlink:href="#chrome-tab-geometry-left" width="214" height="36" class="chrome-tab-geometry"/></svg><g transform="scale(-1, 1)"><svg style="fill:white;left:-50px" width="52%" height="36px" x="-100%" y="0"><use xlink:href="#chrome-tab-geometry-right" width="214" height="36" class="chrome-tab-geometry"/></svg></g></svg>
                        </div>
                        <div class="floatingSpace top-15 left-50 font-18">
                            <div class="desktopIcon inLine hideRest verMid font-0 width-18 height-18 centerText index-10">
                                <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="widthAll hollyMid">
                            </div>
                            <div class="inLine verMid width-120 hideRest" style="white-space:nowrap">
                                {$z->name}
                            </div>
                        </div>
                        <div class="floatingSpace left-215 top-12">
                            <i class="fas fa-times font-13"></i>
                        </div>
                    </div>
                    <p class="font-15 bottom-0">{zThis z="Dark Theme"}</p>
                    <div class="rad-5 hideRest borderForm boldMin-1 bottom-10">
                        <div class="padT-8 boldMin-5 boldNoT boldNoR boldNoL font0 left--25" style="background: #26292b;border-color:#4a4d51;">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="height:35px;margin-bottom:-1px;fill:#4a4d51;"><svg height="36px"><use xlink:href="#chrome-tab-geometry-left" width="214" height="36" class="chrome-tab-geometry"/></svg><g transform="scale(-1, 1)"><svg style="fill:#4a4d51;left:-50px" width="52%" height="36px" x="-100%" y="0"><use xlink:href="#chrome-tab-geometry-right" width="214" height="36" class="chrome-tab-geometry"/></svg></g></svg>
                        </div>
                        <div class="floatingSpace color-white top-15 left-50 font-18">
                            <div class="desktopIcon inLine hideRest verMid font-0 width-18 height-18 centerText index-10">
                                <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="widthAll hollyMid">
                            </div>
                            <div class="inLine verMid width-120 hideRest" style="white-space:nowrap">
                                {$z->name}
                            </div>
                        </div>
                        <div class="floatingSpace left-215 top-12">
                            <i class="fas fa-times gray2 font-13"></i>
                        </div>
                    </div>
                </div>
                <div class="col-8 colTop padL-20 zMob-padL-0">
                    <h6 class="bottom-10 top-10 font-1em">{zThis z="Search Engines"}</h6>
                    <div class="rad-5 hideRest borderForm boldMin-1 bottom-10 font-15 pad-15">
                        <div class="font-12">
                            <div class="desktopIcon inLine hideRest verMid font-0 width-18 height-18 centerText index-10">
                                <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="widthAll hollyMid">
                            </div>
                            {$zContent->srcFull["_main"]|@ltrim:"https://"|@ltrim:"http://"}
                        </div>
                        <div class="text5 boldText">{$z->name}</div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut iaculis ante. Nullam tempor laoreet orci, id efficitur augue interdum convallis. Maecenas...
                    </div>
                </div>
                <div class="padTB-15">
                    <div>
                        <input type="radio" name="desktopType" value="same" id="desktopSame" {if $desktopType == "same"}checked{/if}>
                        <label for="desktopSame">{zThis z="Use the original image."}</label>
                    </div>
                    <div class="bottom-10">
                        <input type="radio" name="desktopType" value="differ" id="desktopDiffer" {if $desktopType == "differ"}checked{/if}>
                        <label for="desktopDiffer">{zThis z="Add margins and background."}</label>
                    </div>
                    <div class="{if $desktopType !== "differ"}displayNone{/if} desktopDifferDiv">
                        <div class="col-4 colTop">
                            <div class="zGroup">
                                <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                                    {zThis z="Background"}
                                </span>
                                <input type="text" class="pad-10 top-0 bottom-0" value="{$desktopDiffer_bg}" name="desktopDiffer_bg">
                            </div>
                        </div>
                        <div class="col-4 colTop padL-20 zMob-pad-0">
                            <div class="zGroup">
                                <span class="pad-10 text6">{zThis z="Background Radius"}</span>
                                <input type="range" min="0" step="5" max="50" value="{$desktopDiffer_rad}" name="desktopDiffer_rad">
                            </div>
                        </div>
                        <div class="col-4 colTop padL-20 zMob-pad-0">
                            <div class="zGroup">
                                <span class="pad-10 text6">{zThis z="Image Size"}</span>
                                <input type="range" min="50" step="10" max="100" value="{$desktopDiffer_size}" name="desktopDiffer_size">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DESKTOP -->
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <!-- iOS -->
                <h6 class="bottom-10 top-10 font-18">{zThis z="iOS Icon"}</h6>
                <p class="font-15">{zThis z="iPhone and iPad users can pin your web site on their home screen. The link looks like a native app."}</p>
                <div class="width-356 inLine bottom-15">
                    <img src="{$zContent->srcFull["media"]}/user/ios.png" class="widthAll rad-5 back-black">
                    <div class="floatingSpace">
                        <div class="iosIcon top-108 left-109 hideRest verMid font-0 width-56 height-56 rad-11 centerText index-10">
                            <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="widthAll hollyMid">
                        </div>
                    </div>
                </div>
                <div class="inLine widthRest zMob-widthAll colTop padL-20 zMob-padL-0">
                    <div>
                        <input type="radio" name="iosType" value="same" id="iosSame" {if $iosType == "same"}checked{/if}>
                        <label for="iosSame">{zThis z="Use the original image."}</label>
                    </div>
                    <div class="bottom-10">
                        <input type="radio" name="iosType" value="differ" id="iosDiffer" {if $iosType == "differ"}checked{/if}>
                        <label for="iosDiffer">{zThis z="Add margins and background."}</label>
                    </div>
                    <div class="{if $iosType !== "differ"}displayNone{/if} iosDifferDiv">
                        <div class="col-6 colTop">
                            <div class="zGroup">
                                <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                                    {zThis z="Background"}
                                </span>
                                <input type="text" class="pad-10 top-0 bottom-0" value="{$iosDiffer_bg}" name="iosDiffer_bg">
                            </div>
                        </div>
                        <div class="col-6 colTop padL-20 zMob-pad-0">
                            <div class="zGroup">
                                <span class="pad-10 text6">{zThis z="Image Size"}</span>
                                <input type="range" min="50" step="10" max="100" value="{$iosDiffer_size}" name="iosDiffer_size">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- iOS -->
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <!-- ANDROID -->
                <h6 class="bottom-10 top-10 font-18">{zThis z="Android Chrome Icon"}</h6>
                <p class="font-15">{zThis z="Add to Homescreen is a also a feature of Android Chrome."}</p>
                <div class="width-356 inLine bottom-15">
                    <img src="{$zContent->srcFull["media"]}/user/android.png" class="widthAll rad-5 back-black">
                    <div class="floatingSpace">
                        <div class="androidIcon verMid font-0 top-32 left-85 width-50 height-50 centerText index-10">
                            <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="widthAll hollyMid">
                        </div>
                    </div>
                </div>
                <div class="inLine widthRest zMob-widthAll colTop padL-20 zMob-padL-0">
                    <div>
                        <input type="radio" name="androidType" value="same" id="androidSame" {if $androidType == "same"}checked{/if}>
                        <label for="androidSame">{zThis z="Use the original image."}</label>
                    </div>
                    <div>
                        <input type="radio" name="androidType" value="differ" id="androidDiffer" {if $androidType == "differ"}checked{/if}>
                        <label for="androidDiffer">{zThis z="Add margins and background."}</label>
                    </div>
                    <div class="{if $androidType !== "differ"}displayNone{/if} androidDifferDiv">
                        <div class="col-6 colTop padTB-10">
                            <div class="zGroup">
                                <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                                    {zThis z="Background"}
                                </span>
                                <input type="text" class="pad-10 top-0 bottom-0" value="{$androidDiffer_bg}" name="androidDiffer_bg">
                            </div>
                        </div>
                        <div class="col-6 colTop padL-20 zMob-pad-0 padTB-10">
                            <div class="zGroup">
                                <span class="pad-10 text6">{zThis z="Image Size"}</span>
                                <input type="range" min="50" step="10" max="100" value="{$androidDiffer_size}" name="androidDiffer_size">
                            </div>
                        </div>
                    </div>
                    <div class="bottom-10">
                        <input type="radio" name="androidType" value="shadow" id="androidShadow" {if $androidType == "shadow"}checked{/if}>
                        <label for="androidShadow">{zThis z="Apply a slight drop shadow."}</label>
                    </div>
                </div>
                <!-- ANDROID -->
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <!-- WINDOWS -->
                <h6 class="bottom-10 top-10 font-18">{zThis z="Windows 8 and 10 Icon"}</h6>
                <p class="font-15">{zThis z="Windows 8 and 10 users can pin your web site on their start menu."}</p>
                <div class="width-356 inLine bottom-15">
                    <img src="{$zContent->srcFull["media"]}/user/windows.png" class="widthAll rad-5 back-black">
                    <div class="floatingSpace">
                        <div class="winIcon verMid font-0 top-23 left-17_5 width-79 height-79 centerText index-10" style="background:#2d89ef;">
                            <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="widthAll hollyMid" style="width:70%;{if $winType == "white"}-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);{/if}">
                        </div>
                    </div>
                </div>
                <div class="inLine widthRest zMob-widthAll colTop padL-20 zMob-padL-0">
                    <p class="font-15">{zThis z="Preferably, choose one suggested for the Windows Metro UI."}</p>
                    <div class="zGroup bottom-10">
                        <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                            {zThis z="Background"}
                        </span>
                        <input type="text" class="pad-10 top-0 bottom-0 minW-150" value="{$winDiffer_bg}" name="winDiffer_bg">
                    </div>
                    <div class="zGroup bottom-10">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#00aba9" style="height:auto;background:#00aba9;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#2b5797" style="height:auto;background:#2b5797;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#9f00a7" style="height:auto;background:#9f00a7;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#603cba" style="height:auto;background:#603cba;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#b91d47" style="height:auto;background:#b91d47;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#da532c" style="height:auto;background:#da532c;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#ffc40d" style="height:auto;background:#ffc40d;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#00a300" style="height:auto;background:#00a300;" name="winDiffer_winbg">
                        <input type="radio" class="pad-10 boldMin-1 left-0 right-0 top-0 bottom-0" value="#2d89ef" style="height:auto;background:#2d89ef;" name="winDiffer_winbg">
                    </div>
                    <div>
                        <input type="radio" name="winType" value="same" id="winSame" {if $winType == "same"}checked{/if}>
                        <label for="winSame">{zThis z="Use the original image."}</label>
                    </div>
                    <div>
                        <input type="radio" name="winType" value="white" id="winWhite" {if $winType == "white"}checked{/if}>
                        <label for="winWhite">{zThis z="Use white logo, for transparent background logos."}</label>
                    </div>
                </div>
                <!-- WINDOWS -->
                <div class="borderForm boldMin-1 boldNoB boldNoL boldNoR padB-15"></div>
                <!-- macOS SAFARI -->
                <h6 class="bottom-10 top-10 font-18">{zThis z="macOS Safari Icon"}</h6>
                <p class="font-15">{zThis z="Safari implements pinned tabs and takes advantage of the MacBook Touch Bar. This feature relies on an SVG icon."}</p>
                <div class="width-220 inLine bottom-15">
                    <p class="bottom-0">{zThis z="Pinned Tab, No Focus"}</p>
                    <div>
                        <img src="{$zContent->srcFull["media"]}/user/macos1.png" class="widthAll rad-5 back-black">
                        <div class="floatingSpace">
                            <div class="macIcon2 verMid font-0 top-10 left-95 width-30 height-30 centerText index-10">
                                <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="widthAll hollyMid" style="-webkit-filter:invert(46%) sepia(17%) saturate(16%) hue-rotate(318deg) brightness(100%) contrast(90%);filter: invert(46%) sepia(17%) saturate(16%) hue-rotate(318deg) brightness(100%) contrast(90%);">
                            </div>
                        </div>
                    </div>
                    <p class="bottom-0">{zThis z="Pinned Tab, With Focus"}</p>
                    <div>
                        <img src="{$zContent->srcFull["media"]}/user/macos2.png" class="widthAll rad-5 back-black">
                        <div class="floatingSpace">
                            <div class="macIcon verMid font-0 top-10 left-95 width-30 height-30 centerText index-10" style="-webkit-mask-image:url({$zContent->srcFull["favicon"]}/favicon.png);mask-image:url({$zContent->srcFull["favicon"]}/favicon.png);mask-mode:alpha;-webkit-mask-mode:alpha;-webkit-mask-size:30px;mask-size:30px;background:#2d89ef;">
                            </div>
                        </div>
                    </div>
                    <p class="bottom-0">{zThis z="Touch Bar"}</p>
                    <div>
                        <img src="{$zContent->srcFull["media"]}/user/macos3.png" class="widthAll rad-5 back-black">
                        <div class="floatingSpace">
                            <div class="macIcon verMid font-0 top-7 left-74 width-73 rad-8 height-36 centerText index-10" style="background:#2d89ef;">
                                <div class="width-20 height-20 hollyMid horMid" style="-webkit-mask-image:url({$zContent->srcFull["favicon"]}/favicon.png);mask-image:url({$zContent->srcFull["favicon"]}/favicon.png);mask-mode:alpha;-webkit-mask-mode:alpha;-webkit-mask-size:20px;mask-size:30px;background:white;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inLine widthRest zMob-widthAll colTop padL-20 zMob-padL-0">
                    <div class="zGroup bottom-10">
                        <span class="back7 borderForm boldMin-1 boldNoR pad-10 text6">
                            {zThis z="Theme Color"}
                        </span>
                        <input type="text" class="pad-10 top-0 bottom-0 minW-150" value="{$macDiffer_bg}" name="macDiffer_bg">
                    </div>
                </div>
                <!-- macOS SAFARI -->
                <button class="zButton primary widthAll zShadow top-20">{zThis z="Create"}</button>
            </form>
        </div>
    </div>
    {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
        _mForm="deleteFavicon()"
        _mLabel=fav
        _mTitle={zThis z="Delete File"}
        _mContent={zThis z="Are you sure you want to delete this file?"}
    }
    {include file="{$zContent->src["admin"]}/_partials/modal.tpl"
        _mLabel=upload
        _mTitle={zThis z="Creating Files"}
        _mContent={zThis z="Wait until your files created..."}
        _noClose=true
    }
{/block}

{block name="zBottom" append}
    <div class="winSet displayNone">
        <div class="winIcon inLine colTop hideRest font-0 centerText width-70 height-70" size="70">
            <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="hollyMid" style="width:70%;{if $winType == "white"}-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);{/if}">
        </div>
        <div class="winIcon inLine colTop hideRest font-0 centerText width-144 height-144" size="144">
            <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="hollyMid" style="height:100%;{if $winType == "white"}-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);{/if}">
        </div>
        <div class="winIcon inLine colTop hideRest font-0 centerText width-150 height-150" size="150">
            <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="hollyMid padT-25 padB-50" style="height:100%;{if $winType == "white"}-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);{/if}">
        </div>
        <div class="winIcon inLine colTop hideRest font-0 centerText width-310 height-310" size="310">
            <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="hollyMid padT-70 padB-95" style="height:100%;{if $winType == "white"}-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);{/if}">
        </div>
        <div class="winIcon inLine colTop hideRest font-0 centerText width-310 height-150" size="310x150">
            <img src="{$zContent->srcFull["favicon"]}/favicon.png" class="hollyMid padT-28 padB-52" style="height:100%;{if $winType == "white"}-webkit-filter: brightness(0) invert(1);filter: brightness(0) invert(1);{/if}">
        </div>
    </div>
    <!-- filepond plugins -->
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-file-validate-size.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-file-validate-type.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-file-rename.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-image-preview.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond-plugin-media-preview/filepond-plugin-media-preview.min.js"></script>

    <!-- filepond -->
    <script src="{$zContent->srcFull["scripts"]}/filepond/locale/{$zContent->language->four_code}.js"></script>
    <script src="{$zContent->srcFull["scripts"]}/filepond/filepond.js"></script>
    <script>
        /*
            FAVICON
        */

        // helper functions
        function bg(type) {
            if ($("input[name="+type+"Differ_bg]").length) {
                var value = $("input[name="+type+"Differ_bg]").val();
                $("."+type+"Icon").each(function() {
                    if (type == "win" && $(this).parent().hasClass(type+"Set")) {} else {
                        $(this).css("background", value);
                    }
                });
            }
        }
        function radius(type) {
            if ($("input[name="+type+"Differ_rad]").length) {
                var value = $("input[name="+type+"Differ_rad]").val();
                $("."+type+"Icon").css("border-radius", value+"%");
            }
        }
        function size(type) {
            if ($("input[name="+type+"Differ_size]").length) {
                var value = $("input[name="+type+"Differ_size]").val();
                $("."+type+"Icon img").attr("style", "width: "+value+"% !important");
            }
        }
        function check(type) {
            if ($("."+type+"DifferDiv").css("display") == "block") {
                bg(type);
                size(type);
                radius(type);
            } else {
                $("."+type+"Icon").attr("style", "");
                $("."+type+"Icon img").attr("style", "");
            }
            if ($("input[name="+type+"Type]:checked").prop("id") == type+"Shadow") {
                $("."+type+"Icon img").attr("style", "width:70%;filter:drop-shadow(0 0 2px rgba(0,0,0,.5));");
            }
        }

        function usefullNess() {
            // DESKTOP
            $("input[name=desktopType]").click(function() {
                if ($(this).prop("id") == "desktopDiffer") {
                    $(".desktopDifferDiv").show();
                } else {
                    $(".desktopDifferDiv").hide();
                }
                check("desktop");
            });
            $("input[name=desktopDiffer_bg]").keyup(function() {
                bg("desktop");
            });
            $("input[name=desktopDiffer_rad]").change(function() {
                radius("desktop");
            });
            $("input[name=desktopDiffer_size]").change(function() {
                size("desktop");
            });

            // iOS
            $("input[name=iosType]").click(function() {
                if ($(this).prop("id") == "iosDiffer") {
                    $(".iosDifferDiv").show();
                } else {
                    $(".iosDifferDiv").hide();
                }
                check("ios");
            });
            $("input[name=iosDiffer_bg]").keyup(function() {
                bg("ios");
            });
            $("input[name=iosDiffer_size]").change(function() {
                size("ios");
            });

            // Android
            $("input[name=androidType]").click(function() {
                if ($(this).prop("id") == "androidDiffer") {
                    $(".androidDifferDiv").show();
                } else {
                    $(".androidDifferDiv").hide();
                }
                check("android");
            });
            $("input[name=androidDiffer_bg]").keyup(function() {
                bg("android");
            });
            $("input[name=androidDiffer_size]").change(function() {
                size("android");
            });

            // Windows
            $("input[name=winType]").click(function() {
                if ($(this).prop("id") == "winWhite") {
                    $(".winIcon img").css("-webkit-filter", "brightness(0) invert(1)")
                                     .css("filter", "brightness(0) invert(1)");
                } else {
                    $(".winIcon img").css("-webkit-filter", "none")
                                     .css("filter", "none");
                }
            });
            $("input[name=winDiffer_winbg]").click(function() {
                var value = $(this).val();

                $("input[name=winDiffer_bg]").val(value);
                bg("win");
            });
            $("input[name=winDiffer_bg]").keyup(function() {
                bg("win");
            });
            bg("win");

            // macOS
            $("input[name=macDiffer_bg]").keyup(function() {
                bg("mac");
            });
            bg("mac");

            check("desktop");
            check("ios");
            check("android");
        }

        function partial(type) {
            if (type == "mac") {
                $("."+type+"Icon div").css("-webkit-mask-image", "url({$zContent->srcFull["favicon"]}/favicon.png)");
                $("."+type+"Icon div").css("mask-image", "url({$zContent->srcFull["favicon"]}/favicon.png)");
                $("."+type+"Icon2 img").attr("src", "{$zContent->srcFull["favicon"]}/favicon.png");
            } else {
                $("."+type+"Icon img").attr("src", "{$zContent->srcFull["favicon"]}/favicon.png");
            }
        }

        function proceed() {
            $(".favSettings").removeClass("displayNone");
            partial("desktop");
            partial("ios");
            partial("android");
            partial("win");
            partial("mac");
        }

        function deleteImage(filename) {
            var data = new FormData();
            data.set("file_name", filename);
            $.ajax({
                url: "{$zContent->srcFull["favicon"]}/deleteInd.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(data) { },
                error: function() { }
            });
        }

        // this is to upload an image to server,
        // used both by summernote and filepond
        function uploadImage(image, name, filepond, filepondID) {
            // create a new formdata
            var data = new FormData();
            data.set("langcode", "{$zContent->language->iso_code}");
            data.set("filename", name);
            data.set("pathToHere", '{$zContent->current|@ltrim:"https://"|@ltrim:"http://"|@ltrim:{$zContent->srcFull["_main"]}}');
            // send the file to server
            data.append("fileToUpload", image);
            $.ajax({
                url: "{$zContent->srcFull["favicon"]}/upload.php",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(filename) {
                    if (filepond) {
                        $(filepond).find("#filepond--item-" + filepondID).find("legend").text("favicon.png");
                        $(filepond).find("#filepond--item-" + filepondID).find(".filepond--file-info-main").text("favicon.png");
                    }
                },
                error: function(data) {
                    // if upload gives an error,
                    // woke the modalForUpload
                    $("#modalForUpload").find(".zInside").text(data.responseText);
                    window.location.assign("#modalForUpload");
                }
            });
        }

        // catch hidden images to favicon folder
        function dataURLtoFile(dataurl, filename) {
           var arr = dataurl.split(','),
               mime = arr[0].match(/:(.*?);/)[1],
               bstr = atob(arr[1]),
               n = bstr.length,
               u8arr = new Uint8Array(n);

           while (n--) {
               u8arr[n] = bstr.charCodeAt(n);
           }
           return new File([u8arr], filename, {
               type:mime});
        }

        function uploadForWin(size) {
            if (typeof(size) == "object") {
                swidth = size[0];
                sheight = size[1];
            } else {
                swidth = size;
                sheight = size;
            }
            let filename = "mstile-" + swidth + "x" + sheight;
            ImageTracer.imageToSVG(
                "{$zContent->srcFull["favicon"]}/"+filename+".png", /* input filename / URL */
                function(svgstr){
                    var black = svgstr.replaceAll(/rgb\(([^)]+)\)/gi, "white");
                    var blackF = new File([black], filename+".svg", {
                        type: "image/svg+xml",
                    });
                    uploadImage(blackF, filename);
                } /* callback function to run on SVG string result */
            );
            setTimeout(function(){
                $.get("{$zContent->srcFull["favicon"]}/"+filename+".svg", function(data) {
                    var svgString = new XMLSerializer().serializeToString(data.documentElement);

                    var canvas = document.createElement("canvas");
                    var ctx = canvas.getContext("2d");
                    var img = new Image();
                    var svg = new Blob([svgString], { type: "image/svg+xml;charset=utf-8"});
                    img.onload = function() {
                        canvas.height = filename.replace("mstile-", "").split("x")[1];
                        canvas.width = filename.replace("mstile-", "").split("x")[0];
                        ctx.drawImage(img, 0, 0);
                        var png = canvas.toDataURL("image/png");
                        let file = dataURLtoFile(png, filename+".png");
                        uploadImage(file, filename);
                        deleteImage(filename+".svg");
                    };
                    img.src = "{$zContent->srcFull["favicon"]}/"+filename+".svg";
                });
            }, 3000);
        }

        function createFinalImg(element, prefix, suffix, sizes, back) {
            html2canvas(element, {
              scale: 10,
              backgroundColor: (back ? back : "rgba(0, 0, 0, 0)"), removeContainer: true
            }).then(canvas => {
                (function(next) {
                    var favicon = new Image;
                    favicon.src = "{$zContent->srcFull["favicon"]}/favicon.png";
                    favicon.onload = function() {
                        let newC = document.createElement("canvas");
                        $.each(sizes, function(unn, size) {
                            let type = (prefix == "favicon" && size == "48") ? "ico" : "png";
                            if (typeof(size) == "object") {
                                sw = size[0];
                                sh = size[1];
                            } else {
                                sw = size;
                                sh = size;
                            }
                            if (sw <= favicon.width && sh <= favicon.height) {
                                let filename = prefix + (type == "ico" ? "" : "-" + sw + "x" + sh) + (suffix ? "-" + suffix : "");
                                newC.width = sw;
                                newC.height = sh;
                                newC.getContext("2d").fillStyle = "white";
                                newC.getContext("2d").drawImage(canvas, 0, 0, sw, sh);
                                let img = newC.toDataURL("image/" + type);
                                let file = dataURLtoFile(img, filename + "." + type);
                                uploadImage(file, filename);
                                if (prefix == "apple-touch-icon" && !sizes[unn+1]) {
                                    uploadImage(file, "apple-touch-icon" + (suffix ? "-" + suffix : ""));
                                }
                            }
                        });
                    };
                }(function() {
                    if (prefix == "mstile" && $("#winWhite").is(":checked")) {
                        uploadForWin(size);
                    }
                }));
            });
        }

        function renderEverything(callback) {
            let sets = [];
            sets[0] = [$(".desktopIcon")[0], "favicon", [16, 32, 48]];
            sets[1] = [$(".iosIcon")[0], "apple-touch-icon", [57, 60, 72, 76, 114, 120, 144, 152, 180]];
            sets[2] = [$(".androidIcon")[0], "android-chrome", [36, 48, 72, 96, 144, 192, 256, 384, 512]];
            sets[3] = [$(".winIcon")[0], "mstile", [70, 144, 150, 310, [310, 150] ]];

            $.each(sets, function (i, v) {
                // for iOS, we have precomposed versions
                if (i == 1) {
                    let back = $(v[0]).clone().css("background-color");
                    createFinalImg(v[0], v[1], null, v[2], back);
                    createFinalImg(v[0], v[1], "precomposed", v[2]);
                } else if (i == 3) {
                    let winset = $(".winSet");
                    winset.removeClass("displayNone");
                    winset.children().each(function(i) {
                        let sizes = [];
                        sizes[0] = v[2][i];
                        createFinalImg($(this)[0], v[1], null, sizes);
                    });
                    winset.addClass("displayNone");
                } else {
                    createFinalImg(v[0], v[1], null, v[2]);
                }
            });

            if (typeof callback == "function")
                callback();
        }

        function zPageJS() {
            usefullNess();

            // register filepond plugins
            FilePond.registerPlugin(
                // validates the size of the file...
                FilePondPluginFileValidateSize,
                // validates the file type...
                FilePondPluginFileValidateType,
                // preview the image file type...
                FilePondPluginImagePreview,
                // preview the vide file type...
                FilePondPluginMediaPreview,
                // rename
                FilePondPluginFileRename,
            );

            // set filepond language
            FilePond.setOptions(window["{$zContent->language->four_code}"]);

            // start the pond, filepond
            var loaded = $(".filepond").prev();
            var value = {if file_exists("{$zContent->src["favicon"]}/favicon.png")}true{else}null{/if};
            if (value) {
                $(".favSettings").removeClass("displayNone");
                var files = [];
                files.push({
                    source: "{$zContent->srcFull["favicon"]}/favicon.png",
                    options: {
                        type: "local"
                    }
                });
                var load = {
                    load: (uniqueFileId, load) => {
                        // you would get the file data from your server here
                        fetch(uniqueFileId)
                        .then(res => res.blob())
                        .then(load);
                    }
                };
                proceed();
            }
            pond = FilePond.create(document.querySelector(".filepond"), {
                allowImagePreview: true,
                maxFileSize: "20MB",
                fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                    // Do custom type detection here and return with promise
                    resolve(type);
                }),
                files: (files ? files : null),
                server: (load ? load : null),
                beforeRemoveFile: function(item) {
                    window.location.assign("#modalfav");
                    return false;
                }
            });

            // set filepond server
            FilePond.setOptions({
                server: "./",
            });

            // callbacks for filepond
            $(".filepond").each(function() {
                // when a file added in a filepond, we will have to upload it
                // to server
                $(this).on("FilePond:processfilestart", function(e) {
                    // calling the uploading service
                    uploadImage(e.detail.file.file, "favicon", e.target, e.detail.file.id);
                });

                $(this).on("FilePond:processfile", function(e) {
                    // Loading an image, tracing with the 'posterized2' option preset, and appending the SVG to an element with id="svgcontainer"
                    ImageTracer.imageToSVG(
                    	"{$zContent->srcFull["favicon"]}/favicon.png", /* input filename / URL */
                    	function(svgstr){
                            var black = svgstr.replaceAll(/rgb\(([^)]+)\)/gi, "black");
                            var blackF = new File([black], "safari-pinned-tab.svg", {
                                type: "image/svg+xml",
                            });
                            uploadImage(blackF, "safari-pinned-tab");
                        } /* callback function to run on SVG string result */
                    );
                    proceed();
                });
            });

            $(".zModalContent .zForm").submit(function(e) {
                e.preventDefault();

                // create a new formdata
                var data = new FormData();
                data.set("file_name", $(this).find(".file_name").val());
                data.set("pathToHere", '{$zContent->current|@ltrim:"https://"|@ltrim:"http://"|@ltrim:{$zContent->srcFull["_main"]}}');
                $.ajax({
                    url: "{$zContent->srcFull["favicon"]}/delete.php",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(data) {
                        window.location.assign("#");
                        pond.removeFile();
                        Toastify({
                            text: "{zThis z="File has been deleted."}",
                            duration: 3000
                        }).showToast();
                        $(".favSettings").addClass("displayNone");
                    },
                    error: function() {
                        window.location.assign("#");
                        Toastify({
                            text: "{zThis z="There was an error deleting your file."}",
                            duration: 3000
                        }).showToast();
                    }
                });
            });

            // submit form functions
            $("#zPage-favicon-form").submit(function(e) {
                e.preventDefault();
                var form = $(this).clone();
                var pathToHere = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "pathToHere").val('{$zContent->current|@ltrim:"https://"|@ltrim:"http://"|@ltrim:{$zContent->srcFull["_main"]}}');
                var z = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "z").val('{$z->name}');
                form.append(pathToHere);
                form.append(z);
                var post_data = form.serialize();
                window.location.assign("#modalupload");
                $("body").css("overflow", "hidden");

                setTimeout(function (){
                    (function(next) {
                        renderEverything();
                    }(function() {
                        $.ajax({
                            url: "{$zContent->srcFull["favicon"]}/configure.php",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: post_data,
                            type: "GET",
                            success: function(data) {
                            }
                        });
                    }));

                    window.location.assign("#");
                    $("body").css("overflow", "auto");

                    Toastify({
                        text: "{zThis z="Change has been made."}",
                        duration: 3000
                    }).showToast();
                }, 301);
            });
        }

        document.addEventListener("DOMContentLoaded", function(event) {
            zPageJS();
        });
    </script>
{/block}
