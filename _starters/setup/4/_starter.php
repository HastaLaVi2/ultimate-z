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
        $zTools = $zSmarty->tpl_vars["zTools"]->value;
        $zUserTools = $zSmarty->tpl_vars["zUserTools"]->value;

        if (!empty($data)) {
            try {
                $query = $zTools->zToolsCreate($data);
                $query = $zUserTools->zUserCreate($data);
                if ($query) {
                    $contents = file_get_contents("_config/z.php");
                    $contents = preg_replace('/define\("SETUP", (.+?)\)/s', "define(\"SETUP\", true)", $contents);
                    file_put_contents("_config/z.php", $contents);
                    $zSmarty->assign("success", $zThis["Site created."]);
                }
            } catch(Exception $e) {
                $zSmarty->assign("error", $e->getMessage());
            }
        }

    }
}
