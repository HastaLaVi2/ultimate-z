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

/*
    START SESSION
*/

ob_start();
if (version_compare(phpversion(), "5.4.0", "<")) {
        if(session_id() == "") {
            session_start();
        }
    } else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
}
error_reporting(E_ALL ^ E_NOTICE);

/*
    CONNECTION
*/
include "_config/z.php";

if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on"){
    $http = "https";
} else {
    $http = "http";
}

$checkSetup = SETUP;

if ($checkSetup == false) {
    if (!isset($_GET["view"])) {
        $_GET["view"] = "setup/1";
    }
}

$checkWritten = true;

if ($checkWritten == false) {
    $url = $http . "://";

    // append the host(domain name, ip) to the URL.
    $url .= $_SERVER["HTTP_HOST"];

    // append the requested resource location to the URL
    $url .= $_SERVER["REQUEST_URI"];

    $subfolder = substr($url, strpos($url, $_SERVER["SERVER_NAME"]));
    $subfolder = str_replace($_SERVER["SERVER_NAME"], "", $subfolder);
    if (strpos($subfolder, "index.php") !== false) {
        $subfolder = substr($subfolder, 0, strpos($subfolder, "index.php"));
    }

    // wewrite ".htaccess" file
    $contents = file_get_contents(".htaccess");
    $contents = preg_replace('/\}\/index.php\s\[NC\,L\]/s', "}" . $subfolder . "index.php [NC,L]", $contents);
    $contents = preg_replace('/\}\/(.+?)\/index.php\s\[NC\,L\]/s', "}" . $subfolder . "index.php [NC,L]", $contents);
    $contents = preg_replace('/([034])\s\/index.php/s', "$1 " . $subfolder . "index.php", $contents);
    $contents = preg_replace('/([034])\s\/(.+?)\/index.php/s', "$1 " . $subfolder . "index.php", $contents);
    file_put_contents(".htaccess", $contents);

    // wewrite subfolder parameter
    $contents1 = file_get_contents("__start.php");
    $contents2 = preg_replace('/define\("SUBFOLDER", "(.+?)"\)/s', "define(\"SUBFOLDER\", \"".$subfolder."\")", $contents1);
    // wewrite checkWritten parameter
    $contents2 = preg_replace('/\$checkWritten\s=\s(.+?)\;/s', "\$checkWritten = true;", $contents2);

    if ($contents1 !== $contents2) {
        header("Refresh:0");
    }

    file_put_contents("__start.php", $contents2);
}

if (isset($_GET["view"]) && strpos($_GET["view"], "setup/") == false) {
    $setup = explode("/", $_GET["view"]);
}

/*
    PARAMETERS
*/
define("HTTP_HTTPS", $http);
define("SUBFOLDER", "/ultimate-z/");

/*
    CLASSES
*/
include "_config/zDB.php";

spl_autoload_register(function($class_name) {
    // we do not want to load smarty class under "_classes" folder
    // because it is located in "_scripts/smarty"
    if ($class_name !== "Smarty_Autoloader" &&
        substr($class_name, 0, 24) !== "Smarty_Internal_Compile_" &&
        $class_name !== "zPageStarterSpecial") {
        include "_classes/" . $class_name . ".php";
    }
});

// load tools
$zTools = new zTools();
$zUserTools = new zUserTools();
$zPageTools = new zPageTools();
$zCategoryTools = new zCategoryTools();

// load PHPMailer
require "_scripts/phpmailer/src/Exception.php";
require "_scripts/phpmailer/src/PHPMailer.php";
require "_scripts/phpmailer/src/SMTP.php";

// load Smarty
require "_scripts/smarty/libs/Smarty.class.php";
$zSmarty = new Smarty;
$zSmarty->force_compile = true;
$zSmarty->debugging = false;
$zSmarty->caching = true;
$zSmarty->cache_lifetime = 120;

# DEVELOP THIS "Z"
$z = new z(1);

$subfolder = SUBFOLDER;
$zAdmin = false;

zDB::get()->execute("SET NAMES 'utf8mb4'");
zDB::get()->execute("SET CHARACTER SET 'utf8mb4'");

/*
    URL PARSING
*/
if(isset($_SERVER["REQUEST_URI"])) {
    /*
        DEAL WITH DIRECT URL
    */
    // get the redirect page
    $server = HTTP_HTTPS . "://" . $_SERVER["SERVER_NAME"] . $subfolder;
    $direct = $_SERVER["REQUEST_URI"];

    // if we have parameters, we should parse them
    if (strpos($direct, ".php?") !== false) {
        $params = substr($direct, strpos($direct, "?") + 1);
        $direct = str_replace("index.php?".$params, "", $direct);
    }

    // if direct ends with a question mark
    if (strpos($direct, "/?") !== false) {
        $direct = substr($direct, 0, strpos($direct, "?"));
    }

    // if direct includes a file name such as "index.php"
    if (strpos($direct, ".php") !== false) {
        preg_match_all('#/([^/]*).php#', $direct, $mat);
        $direct = str_replace($mat[0][0], "/", $direct);
    }

    // if direct does not have "/" at the end
    $direct = rtrim($direct, "/") . "/";

    $subfolderForContent = substr($subfolder, 0, -1);
    // if we have a subfolder on our base name
    // we need to remove it, because we need to set
    // our base folder to there
    if (strlen($subfolder) > 1) {
        while (substr_count($subfolder, "/") > 1) {
            $subfolder = substr($subfolder, strpos(substr($subfolder, 1), "/")+1);
            $direct = substr($direct, strpos(substr($direct, 1), "/")+1);
        }
    }

    /*
        CHECK WHICH LANGUAGE SHOULD BE SEEN
    */
    // detect the server language (browser language)
    $lang_server = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

    foreach ($zTools->zToolsGetAllLangs() as $l) {
        if (!$l->disabled) {
            // next, if we have a language code in the URL,
            // detect it
            if (substr($direct, 0, 4) == "/" . $l->iso_code . "/") {
                $direct = str_replace("/" . $l->iso_code . "/", "", $direct);
                $langcode = $l->iso_code;
                $found = true;
            }

            # DEVELOP THIS "Z"
            // this is for checking the language code stored in the cookie
            if (isset($_COOKIE["zLangcode-" . $z->key]) && !isset($langcode)) {
                $langcode = $_COOKIE["zLangcode-" . $z->key];
            }

            // we still don't have a language code?
            if (!isset($langcode)) {
                if (substr($lang_server, 0, 3) === $l->iso_code."-" || substr($lang_server, 0, 2) === $l->iso_code."$") {
                    $langcode = $l->iso_code;
                }
            }
        }
    }

    // maybe we have a GET language code?
    if (isset($_GET["lang"])) {
        $langcode = $_GET["lang"];
    }

    // yet still?..
    if (!isset($langcode)) {
        $zLangs = $zTools->zToolsGetAllLangs();
        for ($x = 0; $x < count($zLangs); $x++) {
            if (!$zLangs[$x]->disabled) {
                $langcode = $zLangs[$x]->iso_code;
                break;
            }
        }
    }

    # DEVELOP THIS "Z"
    if ($z->key) {
        setcookie("zLangcode-" . $z->key, $langcode, time() + 1728000, "/");
    }

    /*
        DO WE HAVE PERMISSION FOR THE PAGE?
    */
    if (strpos($direct, "_admin") !== false || strpos($direct, "_mail") !== false) {
        $zAdmin = true;
    }

    $userIP = $_SERVER["REMOTE_ADDR"];
    $all_ips = array();
    $checkIP = zDB::get()->select("SELECT * FROM zUsers WHERE ip_user = '$userIP'");
    foreach ($checkIP as $ip) {
        array_push($all_ips, $ip["ip_user"]);
    }

    // if site is disabled
    if ($z->status == "disabled" && !in_array($userIP, $all_ips) && (isset($zAdmin) && $zAdmin == false)) {
        $_GET["view"] = "500";
    }

    /*
        CREATE THE PAGE OBJECT
    */
    $allPages = $zPageTools->zPageGetAll($zTools->zToolsGetLangByCode($langcode)->id);

    // language code for admin page
    $admin_langcode = $zUserTools->zUserCheckUserLanguage($zAdmin, $z->key);
    $prelangcode = $langcode;
    $langcode = $zAdmin == true ? $admin_langcode : $langcode;

    if (!isset($_GET["view"])) {
        foreach ($allPages as $page) {
            if (ltrim(rtrim($direct, "/"), "/") == ltrim(rtrim($page->url, "/"), "/")) {
                $zPage = new zPage($page->id, $zTools->zToolsGetLangByCode($langcode)->id);
                break;
            }
        }
    }

    if ($direct == "/" && !isset($_GET["view"])) {
        $zPage = new zPage(1001, $zTools->zToolsGetLangByCode($langcode)->id);
    } elseif (!isset($zPage)) {
        $direct = "/";
        if (!isset($_GET["view"])) {
            $_GET["view"] = "404";
        }
    }

    if (isset($_GET["view"])) {
        $zAdmin = true;
    }

    // update the langcode according to error pages or login page
    $langcode = (isset($_GET["view"]) || $zPage->id == 2 || $zPage->id == 3) ? $prelangcode : $langcode;

    /*
        FIND THE DIRECTORY
    */
    // start searching for "/" in url
    // we are removing the last "/", because the base uri has it at the end
    $slash = "";
    if (isset($zPage) && $zPage->area == "front") {
        $count = substr_count(preg_replace("/\/$/", "", ltrim($direct, "/")), "/");
    } else {
        $count = substr_count(preg_replace("/\/$/", "", $direct), "/");
    }

    // now lets start our directory wizard,
    // by adding the "../" at the begginning
    for ($x = 1; $x <= $count; $x++) {
        $slash .= "../";
    }

    // check if we have a language code right before "_admin"
    if (isset($found) && $found && preg_match("/_admin/", $direct)) {
        header("Location: " . $server . $direct . (isset($params) ? "index.php?".$params : ""));
    }

    /*
        CREATE THE SRC OBJECT WHICH HOLDS THE MAIN FOLDERS
    */
    // and now let's check if we have the desired
    // directories in the root directory
    // and if they do, let's create a table and add them inside
    global $src;
    foreach (array_filter(glob($slash.'*'), "is_dir") as $folder) {
        // our called directories all starts with "/"
        $find = $slash."_";
        $newName = substr($folder, strlen($find));
        if (substr($folder, 0, strlen($find)) === $find) {
            $src[$newName] = $folder;
            $srcFull[$newName] = $server . "_" . $newName;
        }
    }

    // specify the main directory
    $src["main"] = $slash;
    $srcFull["main"] = $server . $langcode . "/";
    $srcFull["_main"] = $server;

    // later changed directories
    $src["images"] = $src["media"];
    $srcFull["images"] = $srcFull["media"];

    // get the base url, after the language code
    $src["base"] = str_replace("/".$langcode, "", (isset($zPage) ? $zPage->url : null));

    // language change links
    foreach ($zTools->zToolsGetAllLangs() as $l) {
        $srcFull["change_lang_" . $l->iso_code] = $server . $l->iso_code . $src["base"] . (isset($params) ? "index.php?".$params : "");
    }

    $dataForContent = [
        "src" => $src,
        "srcFull" => $srcFull,
        "id_lang" => $zTools->zToolsGetLangByCode(($langcode))->id,
        "subfolder" => $subfolderForContent,
        "direct" => $direct,
        "params" => isset($params) ? $params : NULL
    ];

    $zContent = new zContent($dataForContent);

    if ($zAdmin == true) {
        if (
            isset($zPage) &&
            $zPage->id !== "2" &&
            $zPage->id !== "3" &&
            $zPage->id !== "19" &&
            !isset($_GET["view"]) &&
            $checkSetup == true && (!file_exists($slash . "_setup") && !is_dir($slash . "_setup"))
        ) {
            // if we have a different link let's cache it
             $redirectURL = str_replace("/_admin/", "", $direct) . (isset($params) ? "index.php?".$params : "");
             $zUserTools->zUserPermission($src["admin"]."/login/", $z->key, $redirectURL);
             $zUserTools->zUserPermission($src["admin"]."/login/", $z->key);
        }
        $zUser = new zUser($_SESSION["zUser-" . $z->key]);

        $userIP = $_SERVER["REMOTE_ADDR"];
        $updateIP = zDB::get()->execute("UPDATE zUser SET ip_user = '$userIP' WHERE id_user = '$zUser->id'");
    }

    // if 404 error page is disabled
    if (isset($_GET["view"]) && $_GET["view"] == "404" && $z->error == "disabled") {
        header("Location: " . $srcFull["_main"]);
    }

    /*
        CREATE THE PAGE
    */

    if (isset($zPage)) {
        $tempDirectory = $zPage->zPageGetTemplateDir($slash);
    } else {
        if (isset($setup) && !empty($setup) && $setup[0] == "setup") {
            $tempDirectory = "_setup/" . $setup[1] . "/";
        } else {
            $tempDirectory = "_templates/error/" . $_GET["view"] . "/";
        }
    }

    // first, we need to define a language array to store data inside
    $lang = array();

    // first things first, we should store the lang-code and lang-name inside this array
    // it might come in handy
    $lang["iso_code"] = $langcode;
    $lang["name"] = $zTools->zToolsGetLangByCode($langcode)->name;
    $lang["id"] = $zTools->zToolsGetLangByCode($langcode)->id;

    if (file_exists($slash . "_config/_" . $langcode . ".php")) {
        include_once($slash . "_config/_" . $langcode . ".php");
    } else if (file_exists($slash . "_config/_en.php")) {
        include_once($slash . "_config/_en.php");
    }

    // if there is a language file, load it, and the items in it
    if (file_exists($tempDirectory . "_" . $langcode . ".php")) {
        include_once($tempDirectory . "_" . $langcode . ".php");
    } elseif (file_exists($tempDirectory . "_en.php")) {
        include_once($tempDirectory . "_en.php");
    }

    if (file_exists($slash . "_templates/_lang/" . "_" . $langcode . ".php")) {
        include_once($slash . "_templates/_lang/" . "_" . $langcode . ".php");
    }

    // DEVELOP THIS "Z"
    // create main menu
    $zThis = new zThis($lang);

    // assign smarty variables
    $zSmarty->template_dir = $slash . ($zAdmin == true ? "_admin" : "_templates");
    $zSmarty->compile_dir = $slash . "_templates/cache";
    $zSmarty->cache_dir = $slash . "_scripts/smarty/cache";
    $zSmarty->assign("z", $z);
    $zSmarty->assign("zValidate", json_encode($zUserTools->zUserGetUsers()));
    $zSmarty->assign("zThis", $zThis);
    $zSmarty->assign("zAdmin", $zAdmin);
    if (isset($zPage)) {$zSmarty->assign("zPage", $zPage);}
    if (isset($zUser)) {$zSmarty->assign("zUser", $zUser);}
    $zSmarty->assign("zContent", $zContent);
    $zSmarty->assign("zTools", $zTools);
    $zSmarty->assign("zUserTools", $zUserTools);
    $zSmarty->assign("zPageTools", $zPageTools);
    $zSmarty->assign("zCategoryTools", $zCategoryTools);
    $zSmarty->assign("tempDirectory", $tempDirectory);

    // if we have a "starter" for the current page
    if (isset($zPage)) {
        foreach ($zPage->zPageGetStarters() as $starter) {
            if (file_exists($src["main"] . $starter)) {
                include_once($src["main"] . $starter);

                $zStarter = new zPageStarter($zPage->id, $zContent->language->id);
                $zStarter->_zStarter($_POST, $zSmarty);

                if (class_exists("zPageStarterSpecial")) {
                    $zStarter = new zPageStarterSpecial($zPage->id, $zContent->language->id);
                    $zStarter->_zStarter($_POST, $zSmarty);
                }
            }
        }
    }

    // if we have a "starter" for a setup page
    if (!empty($setup)) {
        if (isset($setup[1]) && file_exists("_starters/setup/" . $setup[1] . "/_starter.php")) {
            include_once("_starters/setup/" . $setup[1] . "/_starter.php");

            $zStarter = new zPageStarter(0, $zContent->language->id);
            $zStarter->_zStarter($_POST, $zSmarty);
        }
    }

    // and if we have a template file to show on the page, include it
    if (file_exists($tempDirectory . "_template.tpl")) {
        if ($zAdmin == true && empty($setup) && (file_exists($slash . "_setup") && is_dir($slash . "_setup"))) {
            $zSmarty->display($slash . "_setup/_template.tpl");
        } else {
            $zSmarty->display($tempDirectory . "_template.tpl");
        }
    }

    if (isset($zPage) && isset($zPage->id)) {
        $zTools->zToolsViewCounter($zPage->id, (isset($zUser) ? $zUser : null));
    }
}

if (zDB::get()->conn) {
    mysqli_close(zDB::get()->conn);
}
ob_end_flush();

?>
