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

if (strpos("$_SERVER[REQUEST_URI]", "z.php") !== false) {
    header("location: index.php");
}

class z {
    # id of the Z.
    public $id;

    # name of the Z.
    public $name;

    # creation date in timestamp format.
    public $creation;

    # the cookie key.
    public $key;

    # if the website is accessible.
    # DEFAULT: enabled.
    public $status;

    # 404 zPage is enabled or not.
    # DEFAULT: enabled.
    public $error;

    # the hidden key to check the authorisation for the ultimate Z.
    public $hidden_key;

    # e-commerce?
    public $eCommerce;

    # construct the object.
    public function __construct($id_site = NULL) {
        # get the database.
        $db = zDB::get();

        # assign the id to the Z.
        $this->id = $id_site;

        # let us get the data for the current Z from the database.
        $query = $db->select("SELECT * FROM z WHERE id_z = '$this->id'");

        # assign all properties.
        if (!empty($query)) {
            $this->name = $query[0]["name"];
            $this->key = $query[0]["cookie_key"];
            $this->hidden_key = $query[0]["hidden_key"];
            $this->status = $query[0]["status"];
            $this->error = $query[0]["error"];
            $this->creation = $query[0]["create_date"];
            $this->eCommerce = $query[0]["e_commerce"];
        }
    }
 }
