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

if (strpos("$_SERVER[REQUEST_URI]", "_en.php") !== false) {
    header("location: index.php");
}

$lang["page-title"] = "Page Not Found";
$lang["not-found"] = "NOT FOUND";
$lang["not-found-text"] = "The page you are looking not found.";
$lang["not-found-button"] = "Go Home";

?>
