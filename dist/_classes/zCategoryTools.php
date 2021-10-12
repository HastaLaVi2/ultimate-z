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

    public function zCategoryUpdate(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # seperate each data
            $id_langs = $data["id_lang"];
            $id_category = $data["id_category"];

            if (!empty($id_langs)) {
                foreach ($id_langs as $id_lang) {
                    $category_name = $data["category_name"][$id_lang];

                    # check if there is missing information
                    if ((!$id_lang) ) {
                        throw new Exception($zThis["The information is missing."]);
                    }

                    $query = "UPDATE zCategories_tr SET value = '$category_name' WHERE id_category = '$id_category' AND id_lang = '$id_lang'";
                    $result = $db->execute($query);
                }
            }

            if($result) {
                return true;
            } else {
                throw new Exception(CHANGE_FAILED);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    public function zCategoryDelete(array $data) {
        $db = zDB::get();
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

            if($result) {
                return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    public function zCategoryEditTable($id_lang = NULL, array $srcFull = NULL, array $lang = NULL, array $src = NULL) {
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zCategories");

        if (!$id_lang) {
            $id_lang = "1";
        }

        if (!empty($query)) {
            foreach ($query as $c){
                $id_category = $c["id_category"];

                $trPage = $db->select("SELECT * FROM zCategories_tr WHERE id_category = '$id_category' AND id_lang = '$id_lang'");

                echo "<tr><td>" . $id_category . "</td><td>" . $trPage[0]["value"] . "</td><td>"
                    . "<a href='" . $srcFull["_main"] . "_admin/layouts/categories/edit/index.php?id_category=" . $id_category
                    . "' class='zButton primary sweet'>" . $lang['Edit']
                    . "</a></td>";

                $modal["button"] = $lang["Delete"];
                $modal["title"] = $lang["Delete Category"];
                $modal["label"] = $id_category;
                $modal["hidden-content"] = "<input name='id_category' value='" . $id_category . "'>";
                $modal["content"] = $lang["Are you sure you want to delete this category?"];

                echo "<td>";
                include($src["admin"]."/_partials/modal/deleteFromTable.php");
                echo "</td>";
                echo "</tr>";
            }
        }
    }

    public function zCategoryCheckboxes($id_lang = NULL, $id_page = NULL) {
        $db = zDB::get();

        $query_f = $db->select("SELECT * FROM zCategories");

        if (!$id_lang) {
            $id_lang = "1";
        }

        $checked = false;

        $alreadyCats = array();
        if ($id_page) {
            $query = $db->select("SELECT * FROM zPagesCategories WHERE id_page = '$id_page'");
            if (!empty($query)) {
                foreach ($query as $c) {
                    array_push($alreadyCats, $c["id_category"]);
                }
            }
        }

        echo '<ul class="cleanList nextToEach bottom-10">';

        if (!empty($query_f)) {
            foreach ($query_f as $c){
                $zCategory = new zCategory($c["id_category"], $id_lang);

                if (in_array($zCategory->id, $alreadyCats)) {
                    $checked = true;
                } else {
                    $checked = false;
                }

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

    public function zCategoryGetAll($id_lang = NULL) {
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
