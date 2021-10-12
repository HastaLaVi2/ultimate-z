<?php
/**
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
 */

$data = $_GET;

foreach ($_GET as $key => $value) {
    if ($key !== "pathToHere" && $key !== "_" && $key !== "z") {
        $contents = file_get_contents("../" . $_GET["pathToHere"] . "_template.tpl");
        $contents = preg_replace('/\{assign var\='.$key.' value\="(.+?)"\}/s', '{assign var='.$key.' value="'.$value.'"}', $contents);
        file_put_contents("../" . $_GET["pathToHere"] . "_template.tpl", $contents);
    }
}

// browserconfig.xml
$mstile = glob("mstile-*.{png}", GLOB_BRACE);
$mstile_cont = '<?xml version="1.0" encoding="utf-8"?>
<browserconfig>
    <msapplication>
        <tile>
';
foreach ($mstile as $file) {
    $size = str_replace("mstile-", "", str_replace(".png", "", $file));
    $size = ($size == "310x150") ? "wide" . $size : "square" . $size;
    if ($size !== "square144x144") {
        $mstile_cont .= "            <".$size."logo src=\"/_favicon/".$file."\"/>\n";
    }
}
$mstile_cont .= "            <TileColor>".$_GET["winDiffer_bg"]."</TileColor>\n";
$mstile_cont .= "        </tile>
    </msapplication>
</browserconfig>";
file_put_contents("browserconfig.xml", $mstile_cont);

// site.webmanifest
$android = glob("android-chrome-*.{png}", GLOB_BRACE);
$android_cont = '{
    "name": "'.$_GET["z"].'",
    "short_name": "'.$_GET["z"].'",
    "icons": [';
foreach ($android as $file) {
    $size = str_replace("android-chrome-", "", str_replace(".png", "", $file));
    $android_cont .= '
        {
            "src": "/_favicon/'.$file.'",
            "sizes": "'.$size.'",
            "type": "image/png"
        },';
}
$andr_color = ($_GET["androidType"] == "differ" ? $_GET["androidDiffer_bg"] : $_GET["macDiffer_bg"]);
$android_cont .= '
    ],
    "theme_color": "'.$andr_color.'",
    "background_color": "'.$andr_color.'",
    "display": "standalone"
}';
file_put_contents("site.webmanifest", $android_cont);

// head.tpl
$head_con = file_get_contents("../_holders/head.tpl");
$head_con = preg_replace('/safari-pinned-tab.svg" color="(.+?)">/s', 'safari-pinned-tab.svg" color="'.$_GET["macDiffer_bg"].'">', $head_con);
$head_con = preg_replace('/<meta name="msapplication-TileColor" content="(.+?)">/s', '<meta name="msapplication-TileColor" content="'.$_GET["winDiffer_bg"].'">', $head_con);
$head_con = preg_replace('/<meta name="theme-color" content="(.+?)">/s', '<meta name="theme-color" content="'.$andr_color.'">', $head_con);
file_put_contents("../_holders/head.tpl", $head_con);

?>
