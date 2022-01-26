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
    # id of the zHolder.
    public $id;

    # name of the zHolder in given zLanguage.
    public $name;

    # order of the zHolder on the block that belongs to a zPage.
    public $order;

    # data partials contained in the zHolder.
    public $partials;
    # contents of the data partials contained in the zHolder.
    public $content;

    # id of the zHolder that specifically belongs to the zPage.
    public $id_page_holder;

    # construct the object.
    public function __construct($id_holder = NULL, $id_lang = NULL, $id_page = NULL, $id_block = NULL, $order = NULL) {
        # get the database instance.
        $db = zDB::get();

        # assign the id property.
        $this->id = $id_holder;

        # create an empty array for the contents in the zHolder.
        $this->content = array();

        # get the data applicable for all zHolders across zPages with the same id from the database.
        $query = $db->select("SELECT * FROM zHolders WHERE id_holder = '$this->id'");
        if (!empty($query)) {
            # assign the properies.
            $this->partials = explode(';', $query[0]["partials"]);
        }

        # get the data of the zHolder for the given zLanguage from the database.
        $query_n = $db->select("SELECT * FROM zHolders_tr WHERE id_holder = '$this->id' AND id_lang = '$id_lang'");

        if (!empty($query_n)) {
            # assign the properies.
            $this->name = $query_n[0]["value"];
        } else {
            # if our query returned empty, this means we do not have a zLanguage id.
            # then use the default zLanguage: English.
            $query_n = $db->select("SELECT * FROM zHolders_tr WHERE id_holder = '$this->id' AND id_lang = '1'");
            $this->name = $query_n[0]["value"];
        }

        # get the data that only used on a spesific zPage from the database.
        $query_p1 = $db->select("SELECT * FROM zPagesHolders WHERE id_holder = '$this->id' AND id_page = '$id_page' AND id_block = '$id_block' AND `order` = '$order'");

        if (!empty($query_p1)) {
            # assign the properies.
            $this->order = $query_p1[0]["order"];
            $id_page_holder = $query_p1[0]["id_page_holder"];

            # now, get the zLanguage-related data that only used on a spesific zPage from the database.
            $query_p2 = $db->select("SELECT * FROM zPagesHolders_tr WHERE id_page_holder = '$id_page_holder' AND id_lang = '$id_lang' ORDER BY id_partial");
            if (!empty($query_p2)) {
                foreach ($query_p2 as $c) {
                    # push the contents in different zLanguages into the contents array.
                    array_push($this->content, $c["value"]);
                }
            }

            # assign the properies.
            $this->id_page_holder = $query_p1[0]["id_page_holder"];
        }

        # if our contents array is empty, this means the class does not belong to a zPage.
        # but we still need empty strings inside the contents array,
        # that matchs with the partials array.
        if (empty($this->content)) {
            foreach ($this->partials as $c) {
                array_push($this->content, "");
            }
        }
    }
 }
