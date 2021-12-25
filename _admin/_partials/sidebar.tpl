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

<div id="zSidebar" class="toggle-sidebar width-320 heightAll animSlow index-100 colTop fixed pad-20">
    <div class="pad-32 row-12 weight-900 whiteBack rad-20 no zMob1200-zShadow hideScroll">
        {include file="_partials/logo.tpl"}
        <div class="top-40">
            <ul class="cleanList font-16">
                <li class="text4 padLR-1rem weight-600">{zThis z="Menu"}</li>

                <li class="top-0_5rem padTB-5">
                    <a href="{zPageUrl ID="1"}" class="pad-13 rad-10 blockThis {$zTools->zToolsSideColor([1], $zPage->id)}">
                        <i class="fas fa-th-large {$zTools->zToolsSideIconColor([1], $zPage->id)}"></i>
                        <span class="padL-15">{zPageName ID="1"}</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="#" class="pad-13 rad-10 blockThis zTogDown-side1 {$zTools->zToolsSideColor([4, 5, 6, 7, 8, 9, 17, 18], $zPage->id)}">
                        <i class="fas fa-layer-group {$zTools->zToolsSideIconColor([4, 5, 6, 7, 8, 9, 17, 18], $zPage->id)}"></i>
                        <span class="padL-15">{zThis z="Layouts"}</span>
                        <i class="fas fa-chevron-down inRight top-3 {$zTools->zToolsSideIconColor([4, 5, 6, 7, 8, 9, 17, 18], $zPage->id)}"></i>
                    </a>
                    <ul class="zShow-side1 font-13 padL-2rem left-2rem {$zTools->zToolsSideToggleOpt([4, 5, 6, 7, 8, 9, 17, 18], $zPage->id)}">
                        <li class="weight-600">
                            <a href="{zPageUrl ID="17"}" class="weight-700 {$zTools->zToolsSideLinkItem([17, 18], $zPage->id)}">
                                {zPageName ID="17"}
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="{zPageUrl ID="6"}/index.php" class="weight-700 {$zTools->zToolsSideLinkItem([4, 5, 6], $zPage->id)}">
                                {zPageName ID="6"}
                            </a>
                        </li>
                        <li class="weight-600">
                            <a href="{zPageUrl ID="9"}/index.php" class="weight-700 {$zTools->zToolsSideLinkItem([7, 8, 9], $zPage->id)}">
                                {zPageName ID="9"}
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="{zPageUrl ID="16"}" class="pad-13 rad-10 blockThis {$zTools->zToolsSideColor([16], $zPage->id)}">
                        <i class="fas fa-photo-video {$zTools->zToolsSideIconColor([16], $zPage->id)}"></i>
                        <span class="padL-15">{zPageName ID="16"}</span>
                    </a>
                </li>

                {if $zUser->id_rank == "1"}
                <li class="text4 padLR-1rem weight-600 padT-30">{zPageName ID="10"}</li>

                <li class="top-0_5rem padTB-5">
                    <a href="{zPageUrl ID="10"}" class="pad-13 rad-10 blockThis {$zTools->zToolsSideColor([10], $zPage->id)}">
                        <i class="fas fa-cog {$zTools->zToolsSideIconColor([10], $zPage->id)}"></i>
                        <span class="padL-15">{zPageName ID="10"}</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="{zPageUrl ID="15"}" class="pad-13 rad-10 blockThis {$zTools->zToolsSideColor([15], $zPage->id)}">
                        <i class="fas fa-users {$zTools->zToolsSideIconColor([15], $zPage->id)}"></i>
                        <span class="padL-15">{zPageName ID="15"}</span>
                    </a>
                </li>

                <li class="text4 padLR-1rem weight-600 padT-30">{zThis z="Advanced"}</li>

                <li class="top-0_5rem padTB-5">
                    <a href="{zPageUrl ID="13"}" class="pad-13 rad-10 blockThis {$zTools->zToolsSideColor([13, 14], $zPage->id)}">
                        <i class="fas fa-server {$zTools->zToolsSideIconColor([13, 14], $zPage->id)}"></i>
                        <span class="padL-15">{zPageName ID="13"}</span>
                    </a>
                </li>

                <li class="top-0_5rem padTB-5">
                    <a href="{zPageUrl ID="12"}" class="pad-13 rad-10 blockThis {$zTools->zToolsSideColor([12], $zPage->id)}">
                        <i class="fas fa-terminal {$zTools->zToolsSideIconColor([12], $zPage->id)}"></i>
                        <span class="padL-15">{zPageName ID="12"}</span>
                    </a>
                </li>
                {/if}

            </ul>
        </div>
    </div>
    <div class="text5 font-25 floatingTheRight pad-32 displayNone zMob1200-no">
        <i class="button-sidebar-in pointThis fas fa-times"></i>
    </div>
</div>
<script>
function sidebarBtn() {
    if ($(window).width() < 1200) {
        $(".toggle-sidebar").css("margin-left", "-320px");
    } else {
        $(".toggle-sidebar").css("margin-left", "0");
    }
}

$(document).ready(function() {
    sidebarBtn();
    $(".button-sidebar").click(function() {
        $(".toggle-sidebar").css("margin-left", "0");
    });

    $(".button-sidebar-in").click(function() {
        $(".toggle-sidebar").css("margin-left", "-320px");
    });
});

$(window).resize(function(){
    sidebarBtn();
});
</script>
