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
    # id of the zCategory.
    public $id;

    # name of the zCategory in the given zLanguage.
    public $name;

    # construct the object.
    public function __construct($id_category = NULL, $id_lang = NULL) {
        # get the database.
        $db = zDB::get();

        # assign the id to the zCategory.
        $this->id = $id_category;

        # get the data for the zCategory for all zLanguages from the database.
		$query = $db->select("SELECT * FROM zCategories WHERE id_category = '$this->id'");

        # get the data for the zCategory for given zLanguage from the database.
		$query_tr = $db->select("SELECT * FROM zCategories_tr WHERE id_category = '$this->id' AND id_lang = '$id_lang'");

        # if we have a given zLanguage, let us assign the zLanguage-related properties.
        if (!empty($query_tr)) {
            $this->name = $query_tr[0]["value"];
        } else {
            # and if we do not have information in the given zLanguage on the database,
            # assign all zLanguage-related properties based on the default zLanguage: English.
            $query_tr = $db->select("SELECT * FROM zCategories_tr WHERE id_category = '$this->id' AND id_lang = '1'");
            $this->name = $query_tr[0]["value"];
        }
    }

    /*
        used on files     : {}
        what does it do   : get the zPages belong to the zCategory in question.
        returns           : PHP ARRAY
    */
    public function zCategoryGetPages($id_lang = NULL) {
        # get the database.
        $db = zDB::get();

        # get the zPage ids belonging to this zCategory from the database.
		$query = $db->select("SELECT * FROM zPagesCategories WHERE id_category = '$this->id' ORDER BY id_page");

        # create an empty array.
        $names = array();

        # our request to the database returned any zPage ids?
        if (!empty($query)) {
            foreach ($query as $i) {
                # if so, let us create zPages out of them,
                # then push the zPages into the $names array.
                $id_page = $i["id_page"];
                $zPage = new zPage($id_page, $id_lang);
                array_push($names, $zPage);
            }
        }

        return $names;
    }
 }
