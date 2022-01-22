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

        if (!empty($data)) {
            $query = "";
            if (isset($data["type"]) && $data["type"] == "edit_row") {
                $query .= "UPDATE " . $_GET["table"] . " SET ";
                foreach ($data as $key => $value) {
                    if ($key !== "type" && $key !== "key" && $key !== "keyValue") {
                        $query .= "`" . $key . "` = '" . str_replace("'", "\'", $value) . "',";
                    }
                }
                $query = rtrim($query, ",") . " WHERE " . $data["key"] . " = '" . $data["keyValue"] . "'";

                $run = zDB::get()->execute($query);

                if ($run) {
                    die($zThis["Change has been made."]);
                } else {
                    die($zThis["Change has failed."] . " " . mysqli_error(zDB::get()->conn));
                }
            }
        }
    }
}
