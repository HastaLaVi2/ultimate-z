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

if (strpos("$_SERVER[REQUEST_URI]", "zCategoryTools.php") !== false) {
    header("location: index.php");
}

class zCategoryTools {

    /*
        TODO:             : Merge this function into zCategoryUpdate

        used on files     : {
            "_starters/back/layouts/categories/create/_starter.php"
        }
        what does it do   : create a zCategory row in the database.
        returns           : PHP BOOLEAN
    */
    public function zCategoryCreate(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            $id_langs = $data["id_lang"];

            $check_id_cat = $db->select("SELECT * FROM zCategories");

            if (!empty($check_id_cat)) {
                foreach ($check_id_cat as $ch) {
                    $check = $ch["id_category"];
                }
            }

            $id_category = $check + 1;
            $result = $db->execute("INSERT INTO `zCategories` (id_category) VALUES ('$id_category')");

            if (!empty($id_langs)) {
                foreach ($id_langs as $id_lang) {
                    $category_name = $data["category_name"][$id_lang];

                    if (!$category_name) {
                        $category_name = "Untitled";
                    }

                    if (!$id_lang) {
        				throw new Exception($zThis["The information is missing."]);
        			}

                    $query = "INSERT INTO `zCategories_tr` (id_category, id_lang, value) VALUES ('$id_category', '$id_lang', '$category_name')";
                    $result = $db->execute($query);
                }
            }

            if($result) {
                return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    /*
        used on files     : {
            "_starters/back/layouts/categories/edit/_starter.php"
        }
        what does it do   : this function is called both when creating a zCategory, or editing a zCategory.
        returns           : PHP BOOLEAN
    */
    public function zCategoryUpdate(array $data) {
        # get the database instance.
        $db = zDB::get();

        # get the zThis instance, which contains localization.
        $zThis = zThis::get()->table;

        # do we have information in $data?
        if(!empty($data)) {
            # seperate each data
            $id_langs = $data["id_lang"];
            $id_category = $data["id_category"];

            # do we have zLanguage ids in our data?
            if (!empty($id_langs)) {
                # if so, start the loop for them.
                foreach ($id_langs as $id_lang) {
                    # detect the category name in the zLanguage in question.
                    $category_name = $data["category_name"][$id_lang];

                    # check if there is missing information
                    if ((!$id_lang) ) {
                        throw new Exception($zThis["The information is missing."]);
                    }

                    # update the category name in the zLanguage in question.
                    $query = "UPDATE zCategories_tr SET value = '$category_name' WHERE id_category = '$id_category' AND id_lang = '$id_lang'";

                    # execute the query.
                    $result = $db->execute($query);
                }
            }

            # was our query a success?
            if ($result) {
                return true;
            } else {
                throw new Exception(CHANGE_FAILED);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    /*
        used on files     : {
            "_starters/back/layouts/categories/_starter.php"
        }
        what does it do   : deletes a zCategory row from the database.
        returns           : PHP BOOLEAN
    */
    public function zCategoryDelete(array $data) {
        # get the database instance.
        $db = zDB::get();

        # get the zThis instance, which contains localization.
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map("trim", $data);

            # seperate each data
            $id_category = $db->trim($trimmedData["id_category"]);

            if((!$id_category) ) {
				throw new Exception($zThis["The information is missing."]);
			}

            # run the query
            $query = "DELETE FROM `zCategories` WHERE id_category = '$id_category'";
            $result = $db->execute($query);

            $query = "DELETE FROM `zCategories_tr` WHERE id_category = '$id_category'";
            $result = $db->execute($query);

            if ($result) {
                return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    /*
        used on files     : {
            "_admin/layouts/pages/create/_template.tpl",
            "_admin/layouts/pages/edit/_template.tpl"
        }
        what does it do   : outputs the list of the categories, either when creating
                            a new zPage, or editing one.
        returns           : HTML OUTPUT
    */
    public function zCategoryCheckboxes($id_lang = NULL, $id_page = NULL) {
        # get the database instance.
        $db = zDB::get();

        # if we do not have any zLanguage id, assign the default: English.
        if (!$id_lang) {
            $id_lang = "1";
        }

        # the checked is false by default.
        $checked = false;

        # which zCategories that the zPage in question is already in.
        # create an empty array first.
        $alreadyCats = array();
        if ($id_page) {
            # do we have a valid id zPage?
            $query = $db->select("SELECT * FROM zPagesCategories WHERE id_page = '$id_page'");
            if (!empty($query)) {
                foreach ($query as $c) {
                    # push each zCategory into the empty array.
                    array_push($alreadyCats, $c["id_category"]);
                }
            }
        }

        # now, start the HTML <ul>.
        echo '<ul class="cleanList nextToEach bottom-10">';

        # get all zCategories.
        $query_f = $db->select("SELECT * FROM zCategories");

        # check if we have any zCategories in the database yet.
        if (!empty($query_f)) {
            foreach ($query_f as $c){
                # create a new zCategory for each category id.
                $zCategory = new zCategory($c["id_category"], $id_lang);

                # if the zCategory in question is in the $alreadyCats array,
                # if so, set the $checked true, or else, false.
                if (in_array($zCategory->id, $alreadyCats)) {
                    $checked = true;
                } else {
                    $checked = false;
                }

                # finally, echo the HTML <li> and the <input> checkbox for each zCategory.
                echo '<li class="padL-0"><div>'
                    . '<input type="checkbox" id="checkbox'. $zCategory->id . '" name="categories[]" '
                    . 'value="' . $zCategory->id . '"'
                    . ($checked ? 'checked' : '') . '>'
                    . '<label for="checkbox' . $zCategory->id . '">'
                    . $zCategory->name . '</label>'
                    . "</div></li>";
            }
        }

        echo '</ul>';
    }

    /*
        used on files     : {
            "_admin/_partials/holderEdit.tpl",
            "_admin/layouts/categories/_template.tpl"
        }
        what does it do   : outputs all the zCategories into a php array.
        returns           : PHP ARRAY
    */
    public function zCategoryGetAll($id_lang = NULL) {
        # get the database instance.
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zCategories");

        $result = array();
        if (!empty($query)) {
            foreach ($query as $c) {
                $newCat = new zCategory ($c["id_category"], $id_lang);
                array_push($result, $newCat);
            }
        }

        return $result;
    }
}
