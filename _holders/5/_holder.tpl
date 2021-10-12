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

{assign var="images" value=";"|explode:$_1}
{assign var="_id" value="{$images[0][0]}{$images[0][-1]}{$images[0][1]}{$images[0][-2]}"}
<div class="pad-40">
    {if $_1}
    <div id="owl{$_id}" class="owl-carousel owl-theme rad-20 hideRest grayBack1 padB-10">
        {foreach from=$images key=key item=image}
            <div class="item item{$_id}-{$key} coverBack whiteText">
                <img src="{$zContent->srcFull["images"]}/uploads/{$zPage->id}/{$image}" />
            </div>
        {/foreach}
    </div>
    <script>
    $(document).ready(function() {
        var owl{$_id} = $('#owl{$_id}');
        owl{$_id}.owlCarousel({
            loop:true,
            nav:true,
            autoHeight:true,
            responsive:{
                0:{
                    items:1
                }
            }
        });
        $('#owl{$_id}').find(".owl-dots").children().each(function(key, v) {
            $(this).find("span").text(key+1);
        });
    });
    </script>
    {/if}
</div>
