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

<div class="pad-40">
    {if $_1|substr:-3 == "mp4"}
    <video class="widthAll rad-20 hideRest" preload="auto" muted="" autoplay="" loop="" playsinline="" oncanplay="this.play()">
        <source src="{$zContent->srcFull["media"]}/uploads/{$zPage->id}/{$_1}" type="video/mp4"/>
    </video>
    {else}
    <img src="{$zContent->srcFull["images"]}/uploads/{$zPage->id}/{$_1}" class="widthAll rad-20">
    {/if}
</div>
