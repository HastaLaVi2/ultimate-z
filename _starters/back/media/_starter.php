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
        $zContent = $zSmarty->tpl_vars["zContent"]->value;

        function endsWith($haystack, $needle) {
            $length = strlen($needle);
            if(!$length) {
                return true;
            }
            return substr($haystack, - $length) === $needle;
        }

        $files = array();

        foreach (scandir($zContent->src["media"]) as $file) {
            if (is_file($zContent->src["media"] . "/" . $file) && !endsWith($file, ".php") && $file !== ".DS_Store") {
                array_push($files, $file);
            }
        }
        $zSmarty->assign("files", $files);
    }
}
