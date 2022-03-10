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

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
{if $zPage->meta && $zPage->meta !== ""}
<meta name="description" content="{$zPage->meta}" />
{/if}

<!-- alternate links -->
<link rel="alternate" href="{$zContent->current}" />
{foreach from=$zTools->zToolsGetAllLangs() item=l}
<link rel="alternate" hreflang="{$l->iso_code}" href="{$zContent->srcFull["change_lang_{$l->iso_code}"]}" />
{/foreach}

<!-- font libraries -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- jquery -->
<script src="{$zContent->srcFull["scripts"]}/jquery/jquery-3.6.0.min.js"></script>

<!-- font-awesome -->
<link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/fontawesome/css/all.min.css"/>

<!-- the ultimate z -->
<link rel="stylesheet" type="text/css" href="{$zContent->srcFull["scripts"]}/ultimate-z/z.min.css"/>
<script defer src="{$zContent->srcFull["scripts"]}/ultimate-z/z.min.js"></script>

<!-- owl.carousel -->
{if file_exists("{$tempDirectory}assets/owl.carousel.css")}
    <link rel="stylesheet" href="{$zContent->srcFull["_main"]}{$tempDirectory}assets/owl.carousel.css"/>
{else}
    <link href="{$zContent->srcFull["scripts"]}/owl.carousel/owl.carousel.css" rel="stylesheet"/>
{/if}
{if file_exists("{$tempDirectory}assets/owl.theme.default.css")}
    <link rel="stylesheet" href="{$zContent->srcFull["_main"]}{$tempDirectory}assets/owl.theme.default.css"/>
{else}
    <link href="{$zContent->srcFull["scripts"]}/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
{/if}
{if file_exists("{$tempDirectory}assets/owl.carousel.min.js")}
    <script defer src="{$zContent->srcFull["_main"]}{$tempDirectory}assets/owl.carousel.min.js"></script>
{else}
    <script defer src="{$zContent->srcFull["scripts"]}/owl.carousel/owl.carousel.min.js"></script>
{/if}

{if $zAdmin}
    {include file="../_holders/favicon.tpl"}
{else}
    {include file="_holders/favicon.tpl"}
{/if}

<!-- lazysizes -->
<script defer src="{$zContent->srcFull["scripts"]}/lazysizes/lazysizes.min.js" async=""></script>

<!-- single-page application functions -->
{if $zAdmin}<script>window.zAdmin = true</script>{/if}
<script defer src="{$zContent->srcFull["scripts"]}/spa_v1.js"></script>

{if $zAdmin}
    <!-- dragula -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/dragula/dragula.min.css"/>
    <script defer src="{$zContent->srcFull["scripts"]}/dragula/dragula.min.js"></script>

    <!-- toastify -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/toastify/toastify.css">

    <!-- imagetracer -->
    <script defer src="{$zContent->srcFull["scripts"]}/imagetracer/imagetracer_v1.2.6.js"></script>

    <!-- html2canvas -->
    <script defer src="{$zContent->srcFull["scripts"]}/html2canvas/html2canvas.min.js"></script>
{/if}
