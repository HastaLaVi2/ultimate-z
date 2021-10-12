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

$images = glob("*.png");

foreach ($images as $image){
    unlink($image);
}
unlink("favicon.ico");
unlink("safari-pinned-tab.svg");
unlink("white.svg");

$vars = array();
$vars["desktopType"] = "same";
$vars["desktopDiffer_bg"] = "#ffffff";
$vars["desktopDiffer_rad"] = "0";
$vars["desktopDiffer_size"] = "100";
$vars["iosType"] = "same";
$vars["iosDiffer_bg"] = "#ffffff";
$vars["iosDiffer_size"] = "100";
$vars["androidType"] = "same";
$vars["androidDiffer_bg"] = "#ffffff";
$vars["androidDiffer_size"] = "100";
$vars["winType"] = "same";
$vars["winDiffer_bg"] = "#2d89ef";
$vars["macDiffer_bg"] = "#2d89ef";

foreach ($vars as $key => $value) {
    $contents = file_get_contents("../" . $_POST["pathToHere"] . "_template.tpl");
    $contents = preg_replace('/\{assign var\='.$key.' value\="(.+?)"\}/s', '{assign var='.$key.' value="'.$value.'"}', $contents);
    file_put_contents("../" . $_POST["pathToHere"] . "_template.tpl", $contents);
}
