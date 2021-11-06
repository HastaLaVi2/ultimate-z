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

if (strpos("$_SERVER[REQUEST_URI]", "zPage.php") !== false) {
    header("location: index.php");
}

class zPage {
    public $id;
    public $name;
    public $id_template;
    public $template;
    public $area;
    public $url;
    public $meta;
    public $subpageOf;
    public $isSubpage;

    # connect to database
    public function __construct($id_page = NULL, $id_lang = NULL) {
        $db = zDB::get();

        $this->id = $id_page;

        # get the name
        $query_tr = $db->select("SELECT * FROM zPages_tr WHERE id_page = '$this->id' AND id_lang = '$id_lang'");
        if (!empty($query_tr)) {
            $this->name = $query_tr[0]["value"];
            $this->meta = $query_tr[0]["meta"];
        } else {
            $query_tr = $db->select("SELECT * FROM zPages_tr WHERE id_page = '$this->id' AND id_lang = '1'");
            $this->name = $query_tr[0]["value"];
            $this->meta = $query_tr[0]["meta"];
        }

        # get template id
		$query = $db->select("SELECT * FROM zPages WHERE id_page = '$this->id'");
        if($query[0])$this->id_template=$query[0]["id_template"];

        if($query[0])$this->url=$query[0]["url"];
        if($query[0])$this->area=$query[0]["area"];
        if($query[0])$this->subpageOf=$query[0]["subpage"];

        if ($this->subpageOf > 0) {
            $this->isSubpage = true;
        }

        if (isset($id_lang) && isset($this->id_template)) {
            $this->template = new zTemplate($this->id_template, $id_lang);
        }
    }

    public function zPageGetTemplateDir($slash = NULL) {
        $tree = $this->zPageGetTree();
        $finalDir = "";

        if ($this->area == "back") {
            $finalDir .= ($slash ? $slash : "");
            foreach ($tree as $dir) {
                $finalDir .= $dir . "/";
            }
        } else {
            $finalDir .= "_templates/" . $this->id_template . "/";
        }

        return $finalDir;
    }

    public function zPageGetTree() {
        $result = array();
        $url = $this->url;

        while (substr_count($url, "/") > 0) {
            $url = ltrim($url, "/");
            if (strpos($url, "/") > 0) {
                array_push($result, substr($url, 0, strpos($url, "/")));
            } else {
                array_push($result, $url);
            }
            $url = substr($url, strpos($url, "/"));
        }

        return $result;
    }

    public function zPageGetStarters() {
        $tree = $this->zPageGetTree();
        $result = array();

        if ($this->area == "front") {
            array_push($result, "_starters/front/_starter.php");
        } else {
            array_push($result, "_starters/back/_starter.php");
        }

        $finalDir = "_starters/" . ($this->area == "front" ? "front" : "back");
        foreach ($tree as $dir) {
            $finalDir .= ($dir == "_admin" ? "" : $dir) . ($dir !== "" ? "/" : "home/");
        }
        array_push($result, $finalDir . "_starter.php");

        return $result;
    }

    public function zPageGetHolder($id_lang = NULL, $id_holder = NULL, $id_block = NULL, $order = NULL) {
        $db = zDB::get();

        if (!$id_lang) {
            $id_lang = 1;
        }
        $zHolder = "";

        if ($id_holder && $order) {
            $zHolder = new zHolder($id_holder, $id_lang, $this->id, $id_block, $order);
        }

        return $zHolder;
    }

    public function zPageGetHolders($id_lang = NULL, $id_block = NULL) {
        $db = zDB::get();

        if (!$id_lang) {
            $id_lang = 1;
        }

        if (isset($id_block)) {
            $query = $db->select("SELECT * FROM zPagesHolders WHERE id_page = '$this->id' AND id_block = '$id_block' ORDER BY `order`");
        } else {
            $query = $db->select("SELECT * FROM zPagesHolders WHERE id_page = '$this->id' ORDER BY `id_block` DESC, `order`");
        }

        $result = array();

        if (!empty($query)) {
            foreach ($query as $n => $holder) {
                $zHolder = new zHolder($holder["id_holder"], $id_lang, $this->id, $holder["id_block"], $holder["order"]);
                array_push($result, $zHolder);
            }
        }

        return $result;
    }

    public function zPageGetViews() {
        $db = zDB::get();

        $total = $db->select("SELECT * FROM zViewsPage WHERE id_page = '$this->id'");

        $value = 0;

        if (!empty($total)) {
            foreach ($total as $i) {
                $value = $value + $i["value"];
            }
        }

        return $value;
    }

    public function zPageGetCategories($id_lang = NULL) {
        $db = zDB::get();

        $total = $db->select("SELECT * FROM zPagesCategories WHERE id_page = '$this->id'");

        $value = array();

        if (!empty($total)) {
            foreach ($total as $i) {
                $zCategory = new zCategory($i["id_category"], $id_lang);
                array_push($value, $zCategory);
            }
        }

        return $value;
    }

    public function zPageGetSubpages($id_lang = NULL) {
        $db = zDB::get();

        $total = $db->select("SELECT * FROM zPages WHERE subpage = '$this->id'");

        $value = array();

        if (!empty($total)) {
            foreach ($total as $i) {
                $zPage = new zPage($i["id_page"], $id_lang);
                array_push($value, $zPage);
            }
        }

        return $value;
    }
 }
