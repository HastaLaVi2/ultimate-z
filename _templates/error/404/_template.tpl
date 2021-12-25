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
<html lang="{zThis z="iso_code"}">
<head>
    <title>{zThis z="page-title"}</title>
    {include file="_holders/head.tpl"}
</head>
<body class="back7">
    <div class="width-760 zMob768-widthAll horMid centerText">
        <img src="{$zContent->srcFull["images"]}/error/error-404.png" class="widthAll">
        <div class="text-center padB-100">
            <h1 class="font-4rem">{zThis z="not-found"}</h1>
            <p class="gray2 font-20 bottom-50 top-50">{zThis z="not-found-text"}</p>
            <a href="{$zContent->srcFull["_main"]}" class="forceLink zButton secondary sweet">{zThis z="not-found-button"}</a>
        </div>
    </div>
</body>
</html>
