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

if (strpos("$_SERVER[REQUEST_URI]", "zTools.php") !== false) {
    header("location: index.php");
}

class zTools {

    # get languages by id
    public function zToolsGetLangById($id_lang) {
        $db = zDB::get();

        // languages table
        $language_result = $db->select("SELECT * FROM zLanguages WHERE id_lang = '$id_lang'");

        if (!empty($language_result)) {
            return new zLanguage($language_result[0]["id_lang"]);
        }
    }

    # get languages by language code
    public function zToolsGetLangByCode($iso_code) {
        $db = zDB::get();

        // languages table
        $language_result = $db->select("SELECT * FROM zLanguages WHERE iso_code = '$iso_code'");

        if (!empty($language_result)) {
            return new zLanguage($language_result[0]["id_lang"]);
        }
    }

    # get languages by language name
    public function zToolsGetLangByName($name) {
        $db = zDB::get();

        // languages table
        $language_result = $db->select("SELECT * FROM zLanguages WHERE name = '$name'");

        if (!empty($language_result)) {
            return new zLanguage($language_result[0]["id_lang"]);
        }
    }

    # get all language objects
    public function zToolsGetAllLangs() {
        $db = zDB::get();

        $languages = array();

        // languages table
        $language_result = $db->select("SELECT * FROM zLanguages");

        if (!empty($language_result)) {
            foreach ($language_result as $l){
                $lang = new zLanguage($l["id_lang"]);
                array_push($languages, $lang);
            }
        }

        return $languages;
    }

    # get the languages name
    public function zToolsGetLangName($id_lang) {
        $db = zDB::get();

        $result = $db->select("SELECT * FROM zLanguages WHERE id_lang = '$id_lang'");
        if($result[0])$l=$result[0];

        return $l["name"];
	}

    # get the languages name
    public function zToolsGetLangCode($id_lang) {
        $db = zDB::get();

        $result = $db->select("SELECT * FROM zLanguages WHERE id_lang = '$id_lang'");
        if($result[0])$l=$result[0];

        return $l["iso_code"];
	}

    # get languages and their names from database
    public function zToolsGetLanguages($id_lang = NULL) {
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zLanguages");

        if (!empty($query)) {
            foreach ($query as $l){
                echo "<option value='" . $l["id_lang"] . "'"
                    . ((isset($id_lang) && $id_lang == $l["id_lang"]) ? "selected" : "") . ">"
                    .$l["name"]."</option>";
            }
        }
    }

    # get templates and their names from database
    public function zToolsGetTemplates($id_lang = NULL) {
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zTemplates_tr WHERE id_lang = '$id_lang'");

        if (!empty($query)) {
            foreach ($query as $h){
                echo "<option value='" . $h["id_template"] . "'>"
                    .$h["value"]."</option>";
            }
        } else {
            $query = $db->select("SELECT * FROM zTemplates_tr WHERE id_lang = '1'");
            foreach ($query as $h){
                echo "<option value='" . $h["id_template"] . "'>"
                    .$h["value"]."</option>";
            }
        }
    }

    # get ranks and their names from database
    public function zToolsGetRanks($id_lang = NULL, $id_rank = NULL) {
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zRanks");

        if (!$id_lang) {
            $id_lang = "1";
        }

        $final = "";
        if (!empty($query)) {
            foreach ($query as $r){
                $rank = $r["id_rank"];
                $trans = $db->select("SELECT * FROM zRanks_tr WHERE id_rank = '$rank' AND id_lang = '$id_lang'");

                $final .= "<option value='" . $rank . "' "
                       . ((isset($id_rank) && $id_rank == $rank) ? "selected" : "")
                       . ">".$trans[0]["value"]."</option>";
            }
        }

        return $final;
    }

    # warning messages on top of every form
    public function zToolsFormWarning($success = NULL, $error = NULL) {
        if(!empty($error)) {
        	echo "<div class='zShow-alert alertBack whiteText animation zAlert bottom-20 font-16'>" . $error
                . "<div class='zTog-alert pointThis floatingTheRight'><i class='far fa-times'></i></div></div>";
        }

        if(!empty($success)) {
        	echo "<div class='zShow-alert succBack whiteText animation zAlert bottom-20 font-16'>" . $success
                . "<div class='zTog-alert pointThis floatingTheRight'><i class='far fa-times'></i></div></div>";
        }
    }

    # page view counter
    public function zToolsViewCounter($id_page, object $zUser = NULL) {
        $db = zDB::get();
        $date = date("Y-m-d");

        if (isset($zUser) && isset($zUser->name)) {
            $user = $zUser->name . " " . $zUser->surname;
        } else {
            $user = $_SERVER["REMOTE_ADDR"];
        }

        $check_idp = $db->select("SELECT * FROM zPages WHERE id_page = '$id_page' AND area = 'front'");

        if (!empty($check_idp)) {
            $id_page = $check_idp[0]["id_page"];

            $check_page_by_user = $db->select("SELECT * FROM zViewsPageByUser WHERE id_page = '$id_page' AND ip_user = '$user' AND date = '$date'");
            if (!empty($check_page_by_user)) {
                $update_page_by_user = $db->execute("UPDATE `zViewsPageByUser` SET value = value+1 WHERE id_page = '$id_page' AND ip_user = '$user' AND date = '$date'");
            } else {
                $insert_page_by_user = $db->execute("INSERT INTO `zViewsPageByUser` (id_page, ip_user, value, date) VALUES ('$id_page', '$user', '1', '$date')");
            }

            $check_page = $db->select("SELECT * FROM zViewsPage WHERE id_page = '$id_page' AND date = '$date'");
            if (!empty($check_page)) {
                $update_page = $db->execute("UPDATE `zViewsPage` SET value = value+1 WHERE id_page = '$id_page' AND date = '$date'");
            } else {
                $insert_page = $db->execute("INSERT INTO `zViewsPage` (id_page, value, date) VALUES ('$id_page', '1', '$date')");
            }

            $check_total = $db->select("SELECT * FROM zViewsTotal WHERE date = '$date'");
            if (!empty($check_total)) {
                $id_views_total = $check_total[0]["id_views_total"];
                $update_total = $db->execute("UPDATE `zViewsTotal` SET value = value+1 WHERE id_views_total = '$id_views_total'");
            } else {
                $insert_total = $db->execute("INSERT INTO `zViewsTotal` (value, date) VALUES ('1', '$date')");
            }
        }
    }

    # get total page view number
    public function zToolsViewsTotal() {
        $db = zDB::get();

        $total = $db->select("SELECT * FROM zViewsTotal");

        $value = 0;

        if (!empty($total)) {
            foreach ($total as $i) {
                $value = $value + $i["value"];
            }
        }

        return $value;
    }

    public function zToolsViewsTotalForPeriod($period = NULL, $id_page = NULL, $specDate = NULL) {
        $db = zDb::get();

        $result = array();
        $date = date("Y-m-d");

        if ($specDate) {
            $date = date("Y-m-d", strtotime($specDate));
        }

        if (!$period) {
            $period = 7;
        }

        for ($i = 1; $i <= $period; $i++) {
            if (isset($id_page)) {
                $query = $db->select("SELECT * FROM zViewsPage WHERE id_page = '$id_page' AND date = '$date'");
            } else {
                $query = $db->select("SELECT * FROM zViewsTotal WHERE date = '$date'");
            }
            array_push($result, (!empty($query) ? $query[0]["value"] : "0"));
            $date = date("Y-m-d", strtotime(($specDate ? $specDate . " " : "")."-".$i." days"));
        }

        return $result;
    }

    public function zToolsViewsByPagesNumbers() {
        $db = zDB::get();

        $check_total = $db->select("SELECT * FROM zViewsPage WHERE id_page > '1000' ORDER BY id_page");

        $result = array();
        $ids = array();

        if (!empty($check_total)) {
            foreach ($check_total as $page) {
                if ($ids[$page["id_page"]]) {
                    $ids[$page["id_page"]] = $ids[$page["id_page"]] + $page["value"];
                } else {
                    $ids[$page["id_page"]] = $page["value"];
                }
            }
        }

        if (!empty($ids)) {
            foreach ($ids as $id) {
                array_push($result, $id);
            }
        }

        return $result;
    }

    public function zToolsViewsByPagesNames($id_lang = NULL) {
        $db = zDB::get();

        $check_total = $db->select("SELECT DISTINCT id_page FROM zViewsPage WHERE id_page > '1000' ORDER BY id_page");

        $result = array();
        if (!empty($check_total)) {
            foreach ($check_total as $page) {
                $id_page = $page["id_page"];
                $query = $db->select("SELECT * FROM zPages_tr WHERE id_page = '$id_page' AND id_lang = '$id_lang'");
                if (!empty($query)) {
                    array_push($result, $query[0]["value"]);
                } else {
                    $query = $db->select("SELECT * FROM zPages_tr WHERE id_page = '$id_page' AND id_lang = '1'");
                    array_push($result, $query[0]["value"]);
                }
            }
        }

        return $result;
    }

    # get total user number
    public function zToolsUsersTotal() {
        $db = zDB::get();

        $query = $db->select("SELECT count(id_user) cnt FROM zUsers");
        if(!empty($query))$data=$query[0];

        return $data["cnt"];
    }

    # get total user number
    public function zToolsPagesTotal() {
        $db = zDB::get();

        $query = $db->select("SELECT count(id_page) cnt FROM zPages WHERE area = 'front'");
        if(!empty($query))$data=$query[0];

        return $data["cnt"];
    }

    # get total user number
    public function zToolsIssetVariables(array $data = NULL) {
        foreach ($data as $in) {
            if (!isset($in)) {
                $in = "";
            }
        }
    }

    public function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function zToolsCreate(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map("trim", $data);

            # seperate each data
            $name = $db->trim($trimmedData["site_name"]);
            $cookie_key = $this->generateRandomString();

            if((!$name)) {
				throw new Exception($zThis["The information is missing."]);
			}

            # check if the site already exists
            $check = $db->select("SELECT id_z FROM z WHERE name = '$name'");

            if($check[0]["id_z"]) {
                throw new Exception($zThis["A site with the exact name provided already exists."]);
            }
            $query = $db->execute("INSERT INTO `z` (name, cookie_key, status, error) VALUES ('$name', '$cookie_key', 'enabled', 'enabled')");
            if($query) {} else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    public function zToolsGetAllHolders($id_lang) {
        $db = zDB::get();

        $query = $db->select("SELECT * FROM zHolders");

        $result = array();

        if (!empty($query)) {
            foreach ($query as $holder) {
                array_push($result, new zHolder($holder["id_holder"], $id_lang));
            }
        }

        return $result;
    }

    private function zToolsSideAutomate(array $cond, string $id, string $classes1, string $classes2) {
        $condition = "";

        foreach ($cond as $c) {
            $condition .= $id == $c;
        }

        if ($condition) {
            return $classes1;
        } else {
            return $classes2;
        }
    }

    public function zToolsSideColor(array $cond, string $id) {
        return $this->zToolsSideAutomate($cond, $id, "back5 color-white", "zHov-grayBack1 animSlow text4");
    }

    public function zToolsSideIconColor(array $cond, string $id) {
        return $this->zToolsSideAutomate($cond, $id, "whiteText", "text6");
    }

    public function zToolsSideLinkItem(array $cond, string $id) {
        return $this->zToolsSideAutomate($cond, $id, "text5", "animSlow text4 zHov-text5 zHov-padL-5");
    }

    public function zToolsSideToggleOpt(array $cond, string $id) {
        return $this->zToolsSideAutomate($cond, $id, "toggled", "displayNone");
    }
}
