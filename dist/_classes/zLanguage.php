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

if (strpos("$_SERVER[REQUEST_URI]", "zLanguage.php") !== false) {
    header("location: index.php");
}

class zLanguage {
    public $id;
    public $name;
    public $iso_code;
    public $four_code;
    public $disabled;

    # connect to database
    public function __construct($id_language = NULL) {
        $db = zDB::get();

        $this->id = $id_language;

        # get the name
        $query = $db->select("SELECT * FROM zLanguages WHERE id_lang = '$this->id'");

        if ($query[0]) {
            $this->name = $query[0]["name"];
            $this->iso_code = $query[0]["iso_code"];
            $this->four_code = $query[0]["four_code"];
            $this->disabled = $query[0]["disabled"];
        }
    }
}
