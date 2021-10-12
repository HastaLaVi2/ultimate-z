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

if (strpos("$_SERVER[REQUEST_URI]", "zTemplate.php") !== false) {
    header("location: index.php");
}

class zTemplate {
    public $id;
    public $name;
    public $blocks;

    # connect to database
    public function __construct($id_template = NULL, $id_lang = NULL) {
        $db = zDB::get();

        $this->id = $id_template;

        # get the name
        $query = $db->select("SELECT * FROM zTemplates_tr WHERE id_template = '$this->id' AND id_lang = '$id_lang'");

        if (!empty($query)) {
            $this->name = $query[0]["value"];
        } else {
            $query = $db->select("SELECT * FROM zTemplates_tr WHERE id_template = '$this->id' AND id_lang = '1'");
            $this->name = $query[0]["value"];
        }

        # get the block number
        $query2 = $db->select("SELECT * FROM zTemplates WHERE id_template = '$this->id'");
        if (!empty($query2)) {
            $this->blocks = $query2[0]["blocks"];
        }
    }

    public function zPageGetHooks() {
        $db = zDB::get();

        $result = array();

        $query = $db->select("SELECT * FROM zTemplatesHooks WHERE id_template = '$this->id'");

        if (!empty($query)) {
            foreach ($query as $hook) {
                array_push($result, $hook);
            }
        }

        return $result;
    }
 }
