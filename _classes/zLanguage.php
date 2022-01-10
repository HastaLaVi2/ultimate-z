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
    # id for the zLanguage.
    public $id;

    # name of the zLanguage.
    public $name;

    # iso code of the zLanguage.
    public $iso_code;

    # four-letter code (for example: en-EN) of the zLanguage
    public $four_code;

    # the status of the zLanguage.
    # DEFAULT: enabled.
    public $disabled;

    # construct the object.
    public function __construct($id_language = NULL) {
        $db = zDB::get();

        $this->id = $id_language;

        # get the data from the database.
        $query = $db->select("SELECT * FROM zLanguages WHERE id_lang = '$this->id'");

        if ($query[0]) {
            $this->name = $query[0]["name"];
            $this->iso_code = $query[0]["iso_code"];
            $this->four_code = $query[0]["four_code"];
            $this->disabled = $query[0]["disabled"];
        }
    }
}
