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

if (strpos("$_SERVER[REQUEST_URI]", "zPageTools.php") !== false) {
    header("location: index.php");
}

class zPageTools {
    /*
        used on files     : {
            "_admin/_partials/pageHeader.tpl",
            "_admin/layouts/pages/edit/_template.tpl",
            "_scripts/smarty/libs/plugins/function.zPageName.php"
        }
        what does it do   : this function is called on a smarty plugin,
                            which helps on smarty template files to get the link of a zPage.
        returns           : STRING
    */
    public function zPageGetPageName($id_page = NULL, $id_lang = NULL) {
        $zPage = new zPage($id_page, $id_lang);

        return $zPage->name;
    }

    /*
        used on files     : {
            "_scripts/smarty/libs/plugins/function.zPageUrl.php"
        }
        what does it do   : this function is used to get the link of a zPage.
        returns           : STRING
    */
    public function zPageGetPageUrl($id_page = NULL, $id_lang = NULL) {
        $zPage = new zPage($id_page, $id_lang);

        return $zPage->url;
    }

    /*
        used on files     : {
            "_starters/back/layouts/pages/create/starter.php",
            "_starters/back/layouts/pages/edit/starter.php"
        }
        what does it do   : this function is called both when creating a zPage, or editing a zPage.
        returns           : PHP BOOLEAN
    */
    public function zPageUpdate(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        $query = "";

        if(!empty($data)) {
            # get zPage id from form.
            $id_page = $data["id_page"];

            # fet zPage url from form.
            $page_url = $data["page_url"];

            # prepare contains all the data for all languages.
            $prepare = $data["id_lang"];

            # get all used holders ids and holders special ids for the current zPage
            # all holders have an id of their own, and other ids on different zPages.
            $holder_ids = $data["id_holder"] ? $data["id_holder"] : array();
            $unique_holders = $data["id_page_holder"] ? $data["id_page_holder"] : array();

            # getting the categories' data.
            $categories = $data["categories"] ? $data["categories"] : array();

            # what is our template's id, if we have? and start its block number.
            $id_template = $data["change_template"];
            $blocks = array();

            # is this a subpage? and maybe not?
            $subpage = $data["change_subpage"];
            if (isset($data["not_a_subpage"]) || !is_numeric($subpage)) {
                $subpage = 0;
            }

            # get zPage status value
            $page_status = isset($data["page_status"]) ? 1 : 0;

            # get zPage product status
            $is_product = isset($data["is_product"]) ? 1 : 0;

            # check if we are on a "create page" or "edit page".
            if (!isset($id_page) || (isset($id_page) && $id_page == "")) {
                # if we are creating a zPage, we need to set a new id to our zPage.
                # check he last biggest number on the database.
                $check_id_page = $db->select("SELECT * FROM zPages WHERE id_page > 1000 ORDER BY id_page");
                if (!empty($check_id_page)) {
                    foreach ($check_id_page as $ch) {
                        $check = $ch["id_page"];
                    }
                }

                # plus one to that number and insert a new zPage row.
                $id_page = $check + 1;
                $query .= "INSERT INTO `zPages` (id_page, url, area, id_template, subpage, status, is_product) VALUES ('$id_page', '$page_url', 'front', '$id_template', '$subpage', '$page_status', '$is_product');";
            } else {
                # if we are editing a zPage, we need to update some values.
                # url is always a single value, so we start with that.
                # also, we need to update subpage parameter as well.
                $query .= "UPDATE zPages SET url = '$page_url', subpage = '$subpage', status = '$page_status', is_product = '$is_product' WHERE id_page = '$id_page';";

                # now, time to find out which template is used on the zPage.
                $select1 = $db->select("SELECT * FROM zPages WHERE id_page = '$id_page'");

                # we got our zPage from the table?
                if (!empty($select1)) {
                    # get the template's id.
                    $id_template = $select1[0]["id_template"];
                    # now find the template's data from database.
                    $select2 = $db->select("SELECT * FROM zTemplates WHERE id_template = '$id_template'");
                    # is the template valid?
                    if (!empty($select2)) {
                        # all templates have their block numbers stored in the database.
                        $block_number = $select2[0]["blocks"];

                        # we are pushing the blocks' data gained from the original form,
                        # to the blocks array we created at the beginning.
                        for ($x = 0; $x < $block_number; $x++) {
                            array_push($blocks, $data["block".$x]);
                        }
                    }
                }
            }

            # which block should we start adding the holders to?
            # the first block might be empty, so maybe we will skip it.
            # this specifies the first block id to be start the loop.
            foreach ($blocks as $key => $block) {
                if ($block > 0) {
                    $id_block = $key + 1;
                    break;
                }
            }

            # insert new categories.
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    $check = $db->select("SELECT * FROM zPagesCategories WHERE id_page = '$id_page' AND id_category = '$category'");

                    if ($check[0] && $check[0]["id_category"]) {} else {
                        $query .= "INSERT INTO `zPagesCategories` (id_page, id_category) VALUES ('$id_page', '$category');";
                    }
                }
            }

            # if some categories have been removed, delete those.
            $alreadyCats = array();
            $check_cat = $db->select("SELECT * FROM zPagesCategories WHERE id_page = '$id_page'");
            if (!empty($check_cat)) {
                foreach ($check_cat as $c) {
                    array_push($alreadyCats, $c["id_category"]);
                }
            }
            if (!empty($alreadyCats)) {
                foreach ($alreadyCats as $already) {
                    if (!in_array($already, $categories)) {
                        $query .= "DELETE FROM `zPagesCategories` WHERE id_page = '$id_page' AND id_category = '$already';";
                    }
                }
            }

            # find the last holder id for the current zPage, we may need to insert a new holder,
            # so we might assign a new holder id.
            $lastId = $this->zPageGetHolderLastId();

            # holder's order on the block always starts at 0.
            $orderOnBlock = 0;

            # start updating zPagesHolders.
            if (!empty($holder_ids)) {
                foreach ($holder_ids as $orderPre => $id_holder) {
                    $order = $orderPre + 1;
                    $id_page_holder = $unique_holders[$orderPre];

                    if ($orderOnBlock >= $blocks[$id_block-1]) {
                        $id_block = $id_block + 1;
                        $orderOnBlock = 0;
                    }

                    if ($id_page_holder == "") {
                        $id_page_holder = $lastId + 1;
                        $unique_holders[$orderPre] = $id_page_holder;
                        $lastId = $lastId + 1;
                    }

                    $sHol = $db->select("SELECT * FROM zPagesHolders WHERE id_page_holder = '$id_page_holder'");

                    if (empty($sHol)) {
                        $query .= "INSERT INTO `zPagesHolders` (id_page_holder, id_holder, id_page, id_block, `order`) VALUES ('$id_page_holder', '$id_holder', '$id_page', '$id_block', '$order');";
                    } else {
                        $query .= "UPDATE `zPagesHolders` SET id_block = '$id_block', `order` = '$order' WHERE id_page_holder = '$id_page_holder';";
                    }
                    $orderOnBlock = $orderOnBlock + 1;
                }
            }

            // check if a holder has been removed
            $check_hold = $db->select("SELECT * FROM zPagesHolders WHERE id_page = '$id_page'");
            if (!empty($check_hold)) {
                foreach ($check_hold as $h) {
                    if (!in_array($h["id_page_holder"], $unique_holders)) {
                        $id_page_holder = $h["id_page_holder"];
                        $query .= "DELETE FROM `zPagesHolders` WHERE id_page_holder = '$id_page_holder';";
                        $query .= "DELETE FROM `zPagesHolders_tr` WHERE id_page_holder = '$id_page_holder';";
                    }
                }
            }

            // update zPagesHolders_tr
            // start seperating each value by language
            foreach ($prepare as $id_lang) {
                $page_name = $data["page_name"][$id_lang];
                $page_meta = $data["page_meta"][$id_lang];
                $page_name = str_replace("'", "\'", $page_name);

                $check_for_lang = $db->select("SELECT * FROM zPages_tr WHERE id_page = '$id_page'");

                if (empty($check_for_lang)) {
                    $query .= "INSERT INTO `zPages_tr` (id_page, id_lang, value, meta) VALUES ('$id_page', '$id_lang', '$page_name', '$page_meta');";
                } else {
                    $query .= "UPDATE zPages_tr SET `value` = '$page_name', `meta` = '$page_meta' WHERE `id_page` = '$id_page' AND `id_lang` = '$id_lang';";
                }

                # check if there is missing information
                if ((!$id_page) || (!$id_lang) ) {
    				throw new Exception($zThis["The information is missing."]);
    			}

                if ($data["content"][$id_lang]) {
                    $holder_content = array_map("trim", $data["content"][$id_lang]);
                }

                if ($data["images"][$id_lang]) {
                    $images = array_map("trim", $data["images"][$id_lang]);
                }

                // now time for holders
                if (!empty($holder_ids)) {
                    foreach ($holder_ids as $orderPre => $id_holder) {
                        $order = $orderPre + 1;
                        $id_page_holder = $unique_holders[$orderPre];

                        $zHolder = new zHolder($id_holder);

                        foreach ($zHolder->partials as $k => $v) {
                            $id_partial = $k + 1;
                            $check_page_holder = $db->select("SELECT * FROM zPagesHolders_tr WHERE id_page_holder = '$id_page_holder' AND id_partial = '$id_partial' AND id_lang = '$id_lang'");
                            $content = ($v["type"] == "image" || $v["type"] == "images") ? ltrim(rtrim($images[0], ";"), ";") : $holder_content[0];
                            $content = str_replace("'", "\'", $content);
                            $now = $now . $v["name"] . "-" . $content . "\n";

                            if ($v["type"] == "link") {
                                $content = ltrim(rtrim($content, ";"), ";");
                            }

                            if (!empty($check_page_holder)) {
                                $query .= "UPDATE zPagesHolders_tr SET value = '$content' WHERE id_page_holder = '$id_page_holder' AND id_partial = '$id_partial' AND id_lang = '$id_lang';";
                            } else {
                                $query .= "INSERT INTO `zPagesHolders_tr` (id_page_holder, id_partial, id_lang, value) VALUES ('$id_page_holder', '$id_partial', '$id_lang', '$content');";
                            }

                            if ($v["type"] == "image" || $v["type"] == "images") {
                                array_shift($images);
                            } else {
                                array_shift($holder_content);
                            }
                        }
                    }
                }
            }

            $result = $db->execute($query);

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
            "_starters/back/layouts/pages/_starter.php"
        }
        what does it do   : this function is used to delete a zPage.
        returns           : PHP BOOLEAN
    */
    public function zPageDelete(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map("trim", $data);

            # seperate each data
            $id_page = $db->trim($trimmedData["id_page"]);

            if((!$id_page) ) {
				throw new Exception($zThis["The information is missing."]);
			}

            $query = "";

            # run the query
            $query .= "DELETE FROM `zPages` WHERE id_page = '$id_page';";
            $query .= "DELETE FROM `zPages_tr` WHERE id_page = '$id_page';";

            $selectHolders = $db->select("SELECT * FROM `zPagesHolders` WHERE id_page = '$id_page'");
            if (!empty($selectHolders)) {
                foreach ($selectHolders as $holder) {
                    $id_page_holder = $holder["id_page_holder"];

                    $query .= "DELETE FROM `zPagesHolders_tr` WHERE id_page_holder = '$id_page_holder';";
                }
            }

            $query .= "DELETE FROM `zPagesHolders` WHERE id_page = '$id_page';";
            $query .= "DELETE FROM `zPagesCategories` WHERE id_page = '$id_page';";
            $query .= "DELETE FROM `zViewsPage` WHERE id_page = '$id_page';";
            $query .= "DELETE FROM `zViewsPageByUser` WHERE id_page = '$id_page';";

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
        used on files     : {}
        what does it do   : this function is used to get list of zPages categorised by their templates.
        returns           : PHP ARRAY
    */
    public function zPageGetByTemplate($id_template = NULL, $id_lang = NULL) {
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zPages WHERE id_template = '$id_template'");

        $result = array();
        if (!empty($query)) {
            foreach ($query as $p) {
                $newPage = new zPage($p["id_page"], $id_lang);
                array_push($result, $newPage);
            }
        }

        return $result;
    }

    /*
        used on files     : {}
        what does it do   : this function is used to get list of zPages categorised by their categories.
        returns           : PHP ARRAY
    */
    public function zPageGetByCategory($id_category = NULL, $id_lang = NULL) {
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zPagesCategories WHERE id_category = '$id_category'");

        $result = array();
        if (!empty($query)) {
            foreach ($query as $p) {
                $newPage = new zPage($p["id_page"], $id_lang);
                array_push($result, $newPage);
            }
        }

        return $result;
    }

    /*
        used on files     : {
            "__start.php",
            "_admin/_template.tpl",
            "_admin/layouts/pages/_template.tpl"
        }
        what does it do   : this function is used to get list of all zPages.
        returns           : PHP ARRAY
    */
    public function zPageGetAll($id_lang = NULL, $area = NULL) {
        $db = zDB::get();

        if ($area) {
            $query = $db->select("SELECT * FROM zPages WHERE area = '$area' ORDER BY id_page");
        } else {
            $query = $db->select("SELECT * FROM zPages ORDER BY id_page");
        }

        $result = array();

        if (!empty($query)) {
            foreach ($query as $page) {
                $page_obj = new zPage($page["id_page"], $id_lang);
                array_push($result, $page_obj);
            }
        }

        return $result;
    }

    /*
        used on files     : {
            "_starters/back/layouts/pages/create/starter.php",
            "_starters/back/layouts/pages/edit/starter.php"
        }
        what does it do   : this function is called both when creating a new zPage, or editing a zPage.
        returns           : HTML OUTPUT
    */
    public function zPageGetSubpageSelector($id_page = NULL, $id_lang = NULL) {
        $db = zDB::get();

        $result = "";
        $allPages = $this->zPageGetAll($id_lang, "front");
        $mainPage = new zPage($id_page, $id_lang);
        if (!empty($allPages)) {
            foreach ($allPages as $zPage) {
                $sub = ($mainPage->isSubpage && $mainPage->subpageOf == $zPage->id) ? true : null;
                if ($zPage->id !== $id_page) {
                    $result .= "<option value='".$zPage->id."'".($sub ? "selected" : "").">".$zPage->name."</option>";
                }
            }
        }

        return $result;
    }

    #
    # internal functions
    #

    /*
        what does it do   : this function is used to get the id of the last saved holder to the database.
        returns           : INTEGER
    */
    private function zPageGetHolderLastId() {
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zPagesHolders ORDER BY id_page_holder");

        $result = 0;
        if (!empty($query)) {
            foreach ($query as $p) {
                $result = $p["id_page_holder"];
            }
        }

        return $result;
    }
}
