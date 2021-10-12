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

if (strpos("$_SERVER[REQUEST_URI]", "zUser.php") !== false) {
    header("location: index.php");
}

class zUser {
    public $id;
    public $name;
    public $surname;
    public $nameSurname;
    public $email;
    public $password;
    public $id_rank;
    public $id_picture;
    public $id_lang;
    public $rank_name;

    # connect to database
    public function __construct(array $data = NULL) {
        $db = zDB::get();

        $this->id = $data["id_user"];

        $query = $db->select("SELECT * FROM zUsers WHERE id_user = '$this->id'");

        if (!empty($query)) {
            $this->name = $query[0]["name"];
            $this->surname = $query[0]["surname"];
            $this->email = $query[0]["email"];
            $this->password = $query[0]["password"];
            $this->id_rank = $query[0]["id_rank"];
            $this->id_picture = $query[0]["id_picture"];
            $this->id_lang = $query[0]["id_lang"];
        }

        # get the rank name
        $rank_query = $db->select("SELECT * FROM zRanks_tr WHERE id_rank = '$this->id_rank' AND id_lang = '$this->id_lang'");
        if (!empty($rank_query)) {
            $this->rank_name = $rank_query[0]["value"];
        } else {
            $rank_query = $db->select("SELECT * FROM zRanks_tr WHERE id_rank = '$this->id_rank' AND id_lang = '1'");
            $this->rank_name = $rank_query[0]["value"];
        }

        $this->nameSurname = $this->name . " " . $this->surname;
    }

 }
