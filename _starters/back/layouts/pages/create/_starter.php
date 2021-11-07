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
        $zPageTools = $zSmarty->tpl_vars["zPageTools"]->value;

        if (!empty($data)) {
            if (isset($data["page_name"]) && isset($data["id_lang"]) && isset($data["change_template"])) {
                try {
                    $data = $zPageTools->zPageUpdate($data);
                    if ($data) {
                        die($zThis["Page created."] . " " . $zThis["Now go to the edit page."]);
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
