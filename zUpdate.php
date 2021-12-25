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

header('Access-Control-Allow-Origin: bellis.com.tr');
header('Access-Control-Allow-Origin: co-fact.com');
header('Access-Control-Allow-Origin: donmezoglubilisim.com');

include "_config/z.php";
include "_config/zDB.php";
include "_classes/zThis.php";

if (!empty($_POST)) {
    $lang = array();
    
    if (file_exists("_config/_" . $_POST["langcode"] . ".php")) {
        include_once("_config/_" . $_POST["langcode"] . ".php");
    } else {
        include_once("_config/_en.php");
    }
    
    $zThis = new zThis($lang);
    
    $cookie_key = $_POST["cookie_key"];
    $hidden_key = $_POST["hidden_key"];
    $checkTheKeys = zDB::get()->select("SELECT * FROM zHiddenKeys WHERE cookie_key = '$cookie_key' AND hidden_key = '$hidden_key'");
    
    if (!empty($checkTheKeys)) {
        echo file_get_contents($_POST["page"]);
    } else {
        echo "~" . $zThis->value("You are using unauthorised ultimate Z account. Please contact your provider.");
    }
} else {
    header("Location: index.php");
}


