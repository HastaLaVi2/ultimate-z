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
<script src="{$zContent->srcFull["scripts"]}/jquery/jquery.lazy.min.js"></script>
<script src="{$zContent->srcFull["scripts"]}/jquery/jquery.lazy.plugins.min.js"></script>

<!-- font-awesome -->
<link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/fontawesome/css/all.min.css"/>

<!-- the ultimate z -->
<link rel="stylesheet" type="text/css" href="{$zContent->srcFull["scripts"]}/ultimate-z/z.min.css"/>
<script src="{$zContent->srcFull["scripts"]}/ultimate-z/z.min.js"></script>

<!-- owl.carousel -->
<link href="{$zContent->srcFull["scripts"]}/owl.carousel/owl.carousel.css" rel="stylesheet"/>
<link href="{$zContent->srcFull["scripts"]}/owl.carousel/owl.theme.default.css" rel="stylesheet"/>
<script src="{$zContent->srcFull["scripts"]}/owl.carousel/owl.carousel.min.js"></script>

<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{$zContent->srcFull["favicon"]}/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{$zContent->srcFull["favicon"]}/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="{$zContent->srcFull["favicon"]}/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="{$zContent->srcFull["favicon"]}/favicon-16x16.png">
<link rel="manifest" href="{$zContent->srcFull["favicon"]}/site.webmanifest">
<link rel="mask-icon" href="{$zContent->srcFull["favicon"]}/safari-pinned-tab.svg" color="#2d89ef">
<link rel="shortcut icon" href="{$zContent->srcFull["favicon"]}/favicon.ico">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="{$zContent->srcFull["favicon"]}/mstile-144x144.png">
<meta name="msapplication-config" content="{$zContent->srcFull["favicon"]}/browserconfig.xml">
<meta name="theme-color" content="#2d89ef">

{if !$zAdmin}
    <!-- font libraries -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/fonts/stylesheet.css" type="text/css" charset="utf-8" />

    <!-- custom css/javascript libraries -->
    {if file_exists("{$zContent->srcFull["templates"]}/assets/styles.css")}
        <link rel="stylesheet" type="text/css" href="{$zContent->srcFull["templates"]}/assets/styles.css"/>
    {/if}
    {if file_exists("{$zContent->srcFull["templates"]}/assets/javascript.js")}
        <script src="{$zContent->srcFull["templates"]}/assets/javascript.js"></script>
    {/if}
    {if file_exists("{$tempDirectory}assets/styles.css")}
        <link rel="stylesheet" type="text/css" href="{$zContent->srcFull["_main"]}{$tempDirectory}assets/styles.css"/>
    {/if}
    {if file_exists("{$tempDirectory}assets/javascript.js")}
        <script src="{$zContent->srcFull["_main"]}{$tempDirectory}assets/javascript.js"></script>
    {/if}
{/if}

{if $zAdmin}
    <!-- dragula -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/dragula/dragula.min.css"/>
    <script src="{$zContent->srcFull["scripts"]}/dragula/dragula.min.js"></script>

    <!-- toastify -->
    <link rel="stylesheet" href="{$zContent->srcFull["scripts"]}/toastify/toastify.css">

    <!-- imagetracer -->
    <script src="{$zContent->srcFull["scripts"]}/imagetracer/imagetracer_v1.2.6.js"></script>

    <!-- html2canvas -->
    <script src="{$zContent->srcFull["scripts"]}/html2canvas/html2canvas.min.js"></script>

    <!-- admin javascript functions -->
    <script src="{$zContent->srcFull["scripts"]}/admin.js"></script>
{/if}
