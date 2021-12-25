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
    public $id;
    public $name;
    public $creation;
    public $key;
    public $status;
    public $error;
    public $hidden_key;

    # connect to database
    public function __construct($id_site = NULL) {
        $db = zDB::get();

        $this->id = $id_site;

        # get value
        $query = $db->select("SELECT * FROM z WHERE id_z = '$this->id'");

        if (!empty($query)) {
            $this->name = $query[0]["name"];
            $this->key = $query[0]["cookie_key"];
            $this->hidden_key = $query[0]["hidden_key"];
            $this->status = $query[0]["status"];
            $this->error = $query[0]["error"];
            $this->creation = $query[0]["create_date"];
        }
    }
 }
