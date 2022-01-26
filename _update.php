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

include "_config/z.php";
include "_config/zDB.php";
include "_classes/zThis.php";
include "_classes/z.php";

$z = new z(1);

# version update: ultimate Z 0.3.1

if (isset($_POST["hidden_key"]) && $_POST["hidden_key"] == $z->hidden_key) {
    $lang = array();

    if (file_exists("_config/_" . $_POST["langcode"] . ".php")) {
        include_once("_config/_" . $_POST["langcode"] . ".php");
    } else {
        include_once("_config/_en.php");
    }

    $zThis = new zThis($lang);

    # update from version 0.3.0 to 0.3.1
    if (isset($_POST["version"]) && $_POST["version"] == "0.3.0") {
        zDB::get()->execute("ALTER TABLE `zHolders` CHANGE `type` `partials` text");
        zDB::get()->execute("ALTER TABLE `zHolders_tr` ADD COLUMN `names` text COLLATE utf8mb4_unicode_ci NOT NULL AFTER `value`");
        zDB::get()->execute("ALTER TABLE `zHolders_tr` ADD COLUMN `options` text COLLATE utf8mb4_unicode_ci NOT NULL AFTER `names`");
        file_put_contents("_scripts/smarty/libs/plugins/function.zBlock.php", "#");

        foreach (glob("_templates/".'*') as $file) {
            $name = str_replace("_templates/", "", $file);
            if (is_numeric($name)) {
                $contents = file_get_contents($file . "/" . "_template.tpl");

                $contents = preg_replace('/{assign var=holders value=\$zPage->zPageGetHolders\(\$zContent->language->id, 1\)}(.+?)<!-- zHolder: {\$holder->name} -->\n +{\/foreach}/s', "{zBlock ID=\"1\"}", $contents);
                $contents = preg_replace('/{assign var=holders value=\$zPage->zPageGetHolders\(\$zContent->language->id, 2\)}(.+?)<!-- zHolder: {\$holder->name} -->\n +{\/foreach}/s', "{zBlock ID=\"2\"}", $contents);

                echo $contents;
                file_put_contents($file . "/" . "_template.tpl", $contents);
            }
        }
    } else {
    # update older versions to 0.3.1
        rename("_scripts/spa.js", "_scripts/spa_v1.js");
        mkdir("_media/cache");
        mkdir("_media/hidden_drive");
        zDB::get()->execute("ALTER TABLE `zHolders` CHANGE `type` `partials` text");
        zDB::get()->execute("ALTER TABLE `zHolders_tr` ADD COLUMN `names` text COLLATE utf8mb4_unicode_ci NOT NULL AFTER `value`");
        zDB::get()->execute("ALTER TABLE `zHolders_tr` ADD COLUMN `options` text COLLATE utf8mb4_unicode_ci NOT NULL AFTER `names`");
        file_put_contents("_scripts/smarty/libs/plugins/function.zBlock.php", "#");

        foreach (glob("_templates/".'*') as $file) {
            $name = str_replace("_templates/", "", $file);
            if (is_numeric($name)) {
                $contents = file_get_contents($file . "/" . "_template.tpl");

                $contents = preg_replace('/{assign var=holders value=\$zPage->zPageGetHolders\(\$zContent->language->id, 1\)}(.+?)<!-- zHolder: {\$holder->name} -->\n +{\/foreach}/s', "{zBlock ID=\"1\"}", $contents);
                $contents = preg_replace('/{assign var=holders value=\$zPage->zPageGetHolders\(\$zContent->language->id, 2\)}(.+?)<!-- zHolder: {\$holder->name} -->\n +{\/foreach}/s', "{zBlock ID=\"2\"}", $contents);

                echo $contents;
                file_put_contents($file . "/" . "_template.tpl", $contents);
            }
        }
    }

    $params = array();
    $params["langcode"] = $_POST["langcode"];
    $params["cookie_key"] = $z->key;
    $params["hidden_key"] = $z->hidden_key;

    $toBeUpdated = array(
        "__start.php",
        "_admin",
        "_classes",
        "_config/_en.php",
        "_config/_tr.php",
        "_config/zDB.php",
        "_favicon/configure.php",
        "_favicon/delete.php",
        "_favicon/deleteInd.php",
        "_favicon/upload.php",
        "_holders/footer.tpl",
        "_holders/head.tpl",
        "_holders/validate.tpl",
        "_media/delete.php",
        "_media/error",
        "_media/upload.php",
        "_media/user",
        "_scripts",
        "_starters/back",
        "_templates/_main.tpl",
        "_templates/error"
    );

    $updated = array();

    function loop($up, &$t) {
        foreach (glob($up."/".'*') as $file) {
            if (str_replace($up."/", "", $file) !== "cache" && str_replace($up."/", "", $file) !== "error_log") {
                if (is_dir($file)) {
                    loop($file, $t);
                } else {
                    array_push($t, $file);
                }
            }
        }
    }

    # start checking each folder or file
    foreach ($toBeUpdated as $file) {
        if (is_dir($file)) {
            loop($file, $updated);
        } else {
            array_push($updated, $file);
        }
    }

    foreach ($updated as $url) {
        $ch = curl_init();

        $params["page"] = $url;

        curl_setopt($ch, CURLOPT_URL, "https://onucyirmibir.com/zUpdate.php");
        curl_setopt($ch, CURLOPT_POST, count($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $new = curl_exec($ch);

        $current = file_get_contents($url);

        if (file_exists($url) && $current !== $new) {
            if (strpos($new, "<!-- variables start -->") !== false) {
                $match = preg_match('/<!-- variables start -->(.+?)<!-- variables end -->/s', $current, $vars);

                if (!empty($vars)) {
                    $new = preg_replace('/<!-- variables start -->(.+?)<!-- variables end -->/s', $vars[0], $new);
                }
            }

            file_put_contents($url, $new);
        }

        curl_close($ch);
    }

    echo $zThis->value("ultimate Z updated.");
} else {
    header("Location: index.php");
}
