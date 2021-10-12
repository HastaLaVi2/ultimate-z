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

class zPageStarter extends zPage {
    public function __construct($id_page = NULL, $id_lang = NULL) {
        parent::__construct($id_page, $id_lang);
    }

    public function _zStarter(array $data = NULL, $zSmarty = NULL) {
        $zThis = zThis::get()->table;
        $zUser = $zSmarty->tpl_vars["zUser"]->value;
        $zContent = $zSmarty->tpl_vars["zContent"]->value;

        if ($zUser->id_rank !== "1") {
            header("Location: " . $zContent->srcFull["_main"] . "index.php?view=403");
        }

        $defaultTables = array(
            "z",
            "zCategories",
            "zCategories_tr",
            "zHolders",
            "zHolders_tr",
            "zLanguages",
            "zPages",
            "zPages_tr",
            "zPagesCategories",
            "zPagesHolders",
            "zPagesHolders_tr",
            "zRanks",
            "zRanks_tr",
            "zTemplates",
            "zTemplates_tr",
            "zUsers",
            "zViewsPage",
            "zViewsPageByUser",
            "zViewsTotal"
        );

        $zSmarty->assign("defaultTables", $defaultTables);

        if(!empty($data)) {
            if (isset($data["table_name"])) {
                $query = zDB::get()->execute("DROP TABLE " . $data["table_name"]);

                if ($run) {
                    $success = $zThis["Table dropped."];
                    $zSmarty->assign("success", $success);
                } else {
                    echo mysqli_error(zDB::get()->conn);
                    $error = $zThis["Change has failed."];
                    $zSmarty->assign("error", $error);
                }
            }
        }
    }
}
