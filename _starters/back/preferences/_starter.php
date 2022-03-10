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

class zPageStarter extends zPage {
    public function __construct($id_page = NULL, $id_lang = NULL) {
        parent::__construct($id_page, $id_lang);
    }

    public function _zStarter(array $data = NULL, $zSmarty = NULL) {
        $zThis = $zSmarty->tpl_vars["zThis"]->value;
        $z = $zSmarty->tpl_vars["z"]->value;
        $zUser = $zSmarty->tpl_vars["zUser"]->value;
        $zContent = $zSmarty->tpl_vars["zContent"]->value;

        if ($zUser->id_rank !== "1") {
            header("Location: " . $zContent->srcFull["_main"] . "index.php?view=403");
        }

        $version = "0.3.1";

        if(!empty($data)) {
            if (isset($data["updateSite"])) {
                $params = array();
                $params["langcode"] = $data["langcode"];
                $params["cookie_key"] = $z->key;
                $params["hidden_key"] = $z->hidden_key;
                $params["version"] = $version;

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, "https://onucyirmibir.com/zUpdate.php");
                curl_setopt($ch, CURLOPT_POST, count($params));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $up_to_date = curl_exec($ch);
                if ($up_to_date == $version) {
                    $result = $zThis->value("ultimate Z is up to date.");
                    curl_close($ch);
                } else {
                    $ch = curl_init();
                    $params["page"] = "_update.php";

                    curl_setopt($ch, CURLOPT_URL, "https://onucyirmibir.com/zUpdate.php");
                    curl_setopt($ch, CURLOPT_POST, count($params));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    $new = curl_exec($ch);
                    $current = file_get_contents($zContent->src["main"] . $params["page"]);
                    if ($current !== $new) {
                        file_put_contents($zContent->src["main"] . $params["page"], $new);
                    }
                    curl_close($ch);

                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, $zContent->srcFull["_main"] . "/_update.php");
                    curl_setopt($ch, CURLOPT_POST, count($params));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    $result = curl_exec($ch);
                    curl_close($ch);
                }

                die($result);
            }

            if (isset($data["e_commerce"])) {
                $eCommerce = $data["eCommerce"];

                $query = "UPDATE z SET e_commerce = '$eCommerce' WHERE id_z = '1';";
                if (zDB::get()->execute($query)) {
                    die($zThis->value("Change has been made."));
                } else {
                    header("Content-Type: application/json; charset=UTF-8");
                    die($zThis->value("Change has failed."));
                }
            }

            if (isset($data["preferences"])) {
                $error_page = $data["error_page"];
    			$site_name = $data["site_name"];
    			$status = $data["enabledSite"];
    			$disabledLangs = $data["languages"];
                if (!isset($error_page))$error_page = "disabled";
                if (!isset($status))$status = "disabled";

                $query = "UPDATE zLanguages SET disabled = '1';";
                if (!empty($disabledLangs)) {
                    foreach ($disabledLangs as $id_lang) {
                        $query .= "UPDATE zLanguages SET disabled = '0' WHERE id_lang = '$id_lang';";
                    }
                }
    			$query .= "UPDATE z SET name = '$site_name', status = '$status', error = '$error_page' WHERE id_z = '1';";
                if (zDB::get()->execute($query)) {
                    die($zThis->value("Change has been made."));
                } else {
                    header("Content-Type: application/json; charset=UTF-8");
                    die($zThis->value("Change has failed."));
                }
            }
		}
    }
}
