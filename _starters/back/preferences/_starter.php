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
        $zThis = zThis::get()->table;
        $zUser = $zSmarty->tpl_vars["zUser"]->value;
        $zContent = $zSmarty->tpl_vars["zContent"]->value;

        if ($zUser->id_rank !== "1") {
            header("Location: " . $zContent->srcFull["_main"] . "index.php?view=403");
        }

		if(!empty($data)) {
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
                die($zThis["Change has been made."]);
		    } else {
                header("Content-Type: application/json; charset=UTF-8");
                die($zThis["Change has failed."]);
		    }
		}
    }
}
