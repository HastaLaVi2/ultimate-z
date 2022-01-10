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

if (strpos("$_SERVER[REQUEST_URI]", "zContent.php") !== false) {
    header("location: index.php");
}

class zContent {
    # an array contains the necessary directories' locations in "../" kind.
    public $src;

    # an array contains the necessary directories' locations in http/https.
    # srcFull has a "_main" value, which the $src property does not have,
    # and this value returns the domain name without the zLanguage iso code.
    public $srcFull;

    # base URI for the domain.
    public $base_uri;

    # current URL.
    public $current;

    # zLanguage for the current zPage.
    public $language;

    # connect to database
    public function __construct(array $data = NULL) {
        $db = zDB::get();

        $this->src = $data["src"];
        $this->srcFull = $data["srcFull"];

        $this->language = new zLanguage($data["id_lang"]);

        $this->base_uri =
            rtrim($this->srcFull["_main"], "/")
            . "/" . ltrim($data["direct"], "/")
            . "index.php" . ($data["params"] ? "?" . $data["params"] : "");

        $this->current =
            rtrim($this->srcFull["_main"], "/")
            . "/" . ltrim($data["direct"], "/");
    }
 }
