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

        $langs = array();

        $files = glob("_config/*.php", GLOB_BRACE);
        foreach($files as $file) {
            $name = str_replace("_config/", "", $file);
            if (substr($name, 0, 1) == "_") {
                if (substr($name, 1, 2) == "en") {$langName = "English";}
                if (substr($name, 1, 2) == "tr") {$langName = "Türkçe";}
                $langs[substr($name, 1, 2)] = $langName;
            }
        }

        $zSmarty->assign("langs", $langs);
    }
}
