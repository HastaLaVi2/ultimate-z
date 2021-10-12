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
        $zUserTools = $zSmarty->tpl_vars["zUserTools"]->value;

        if ($_GET["id_user"]) {
            $editUser = new zUser($_GET);
            $zSmarty->assign("editUser", $editUser);
        }

        if (!empty($data)) {
            if (isset($data["form_type"]) && $data["form_type"] == "change-name") {
                try {
                    $data = $zUserTools->zUserChangeName($data);
                    if ($data) {
                        die($zThis["Change has been made."]);
                    }
                } catch(Exception $e) {
                    $error = $e->getMessage();
                    header("Content-Type: application/json; charset=UTF-8");
                    die($error);
                }
            }

            if (isset($data["form_type"]) && $data["form_type"] == "change-password") {
                try {
                    $data = $zUserTools->zUserChangePassword($data);
                    if ($data) {
                        die($zThis["Change has been made."]);
                    }
                } catch(Exception $e) {
                    $error = $e->getMessage();
                    header("Content-Type: application/json; charset=UTF-8");
                    die($error);
                }
            }

            if (isset($data["form_type"]) && $data["form_type"] == "change-avatar") {
                try {
                    $data = $zUserTools->zUserChangePicture($data);
                    if ($data) {
                        die($zThis["Change has been made."]);
                    }
                } catch(Exception $e) {
                    $error = $e->getMessage();
                    header("Content-Type: application/json; charset=UTF-8");
                    die($error);
                }
            }

            if (isset($data["form_type"]) && $data["form_type"] == "change-language") {
                try {
                    $data = $zUserTools->zUserChangeLanguage($data);
                    if ($data) {
                        die($zThis["Change has been made."] . " " . $zThis["Please refresh the page."]);
                    }
                } catch(Exception $e) {
                    $error = $e->getMessage();
                    header("Content-Type: application/json; charset=UTF-8");
                    die($error);
                }
            }

            if (isset($data["form_type"]) && $data["form_type"] == "change-rank") {
                try {
                    $data = $zUserTools->zUserChangeRank($data);
                    if ($data) {
                        die($zThis["Change has been made."]);
                    }
                } catch(Exception $e) {
                    $error = $e->getMessage();
                    header("Content-Type: application/json; charset=UTF-8");
                    die($error);
                }
            }

            if (isset($data["form_type"]) && $data["form_type"] == "change-email") {
                try {
                    $data = $zUserTools->zUserChangeEmail($data);
                    if ($data) {
                        die($zThis["Change has been made."]);
                    }
                } catch(Exception $e) {
                    $error = $e->getMessage();
                    header("Content-Type: application/json; charset=UTF-8");
                    die($error);
                }
            }
        }
    }
}
