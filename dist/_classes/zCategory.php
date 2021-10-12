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

if (strpos("$_SERVER[REQUEST_URI]", "zCategory.php") !== false) {
    header("location: index.php");
}

class zCategory {
    public $id;
    public $name;

    # connect to database
    public function __construct($id_category = NULL, $id_lang = NULL) {
        $db = zDB::get();

        $this->id = $id_category;

        # get template id
		$query = $db->select("SELECT * FROM zCategories WHERE id_category = '$this->id'");

        # get name
		$query_tr = $db->select("SELECT * FROM zCategories_tr WHERE id_category = '$this->id' AND id_lang = '$id_lang'");

        if (!empty($query_tr)) {
            $this->name = $query_tr[0]["value"];
        } else {
            $query_tr = $db->select("SELECT * FROM zCategories_tr WHERE id_category = '$this->id' AND id_lang = '1'");
            $this->name = $query_tr[0]["value"];
        }
    }

    # connect to database
    public function zCategoryGetPages($id_lang = NULL) {
        $db = zDB::get();

        # get page ids
		$query = $db->select("SELECT * FROM zPagesCategories WHERE id_category = '$this->id' ORDER BY id_page");

        $names = array();
        if (!empty($query)) {
            foreach ($query as $i) {
                $id_page = $i["id_page"];
                $zPage = new zPage($id_page, $id_lang);
                array_push($names, $zPage);
            }
        }

        return $names;
    }
 }
