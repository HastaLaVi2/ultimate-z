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

<div class="whiteBack rad-15 pad-20">
    <div class="font0 padB-20">
        <div class="width-70">
            <img src="{$zContent->srcFull["images"]}/user/profile/{$zUser->id_picture}.jpg" class="widthAll rad-half">
        </div>
        <div class="floatingSpace padL-85 padT-10">
            <h5 class="top-0 bottom-0 font-20 text4">{$zUser->nameSurname}</h5>
            <h6 class="top-0 bottom-0 font-16 text6">{$zUser->rank_name}</h6>
        </div>
    </div>

    <a href="{$zContent->srcFull["_main"]}_admin/logout/" class="forceLink weight-400">
        <div class="back5 zHov-back2 animation font-16 centerText whiteText bottom--20 left--20 right--20 pad-8 rad-c3-15 rad-c4-15 zShadow">
            <i class="fas fa-sign-out-alt"></i>
            {$zThis["Log out"]}
        </div>
    </a>
</div>
