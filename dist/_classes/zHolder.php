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

if (strpos("$_SERVER[REQUEST_URI]", "zHolder.php") !== false) {
    header("location: index.php");
}

class zHolder {
    public $id;
    public $name;
    public $order;
    public $types;
    public $content;
    public $id_page_holder;

    # connect to database
    public function __construct($id_holder = NULL, $id_lang = NULL, $id_page = NULL, $id_block = NULL, $order = NULL) {
        $db = zDB::get();

        $this->id = $id_holder;
        $this->content = array();

        # get value
        $query = $db->select("SELECT * FROM zHolders WHERE id_holder = '$this->id'");
        if (!empty($query)) {
            $this->types = explode(';', $query[0]["type"]);
        }

        # get name
        $query_n = $db->select("SELECT * FROM zHolders_tr WHERE id_holder = '$this->id' AND id_lang = '$id_lang'");

        if (!empty($query_n)) {
            $this->name = $query_n[0]["value"];
        } else {
            $query_n = $db->select("SELECT * FROM zHolders_tr WHERE id_holder = '$this->id' AND id_lang = '1'");
            $this->name = $query_n[0]["value"];
        }

        # get content
        $query_p1 = $db->select("SELECT * FROM zPagesHolders WHERE id_holder = '$this->id' AND id_page = '$id_page' AND id_block = '$id_block' AND `order` = '$order'");

        if (!empty($query_p1)) {
            $this->order = $query_p1[0]["order"];

            $id_page_holder = $query_p1[0]["id_page_holder"];

            $query_p2 = $db->select("SELECT * FROM zPagesHolders_tr WHERE id_page_holder = '$id_page_holder' AND id_lang = '$id_lang' ORDER BY id_partial");
            if (!empty($query_p2)) {
                foreach ($query_p2 as $c) {
                    array_push($this->content, $c["value"]);
                }
            }

            $this->id_page_holder = $query_p1[0]["id_page_holder"];
        }

        if (empty($this->content)) {
            foreach ($this->types as $c) {
                array_push($this->content, "");
            }
        }
    }
 }
