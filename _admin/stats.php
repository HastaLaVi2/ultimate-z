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

header("Content-Type: application/json; charset=UTF-8");

include_once("../_config/z.php");
include_once("../_config/zDB.php");
include_once("../_classes/zThis.php");
include_once("../_classes/zTools.php");

$zTools = new zTools();

$result = json_encode($zTools->zToolsViewsTotalForPeriod("7", null, null, $_POST["barDate"]));

die("'" . $result . "'");
