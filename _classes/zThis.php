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

if (strpos("$_SERVER[REQUEST_URI]", "zThis.php") !== false) {
    header("location: index.php");
}

class zThis {
    public $table;
    public static $instance;

    public function __construct($zThis = NULL) {
        $this->table = $zThis;

        self::$instance = $this;
    }

    public static function get() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
 }
