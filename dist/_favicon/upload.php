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

$target_file = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file = $_POST["filename"] . "." . $imageFileType;

if (isset($_POST["langcode"])) {
    $pathForThis = "../_config/_" . $_POST["langcode"] . ".php";
    if(!file_exists($pathForThis))$pathForThis="../_config/_en.php";
} else {
    $pathForThis = "../_config/_en.php";
}
include($pathForThis);

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $error = $lang["File is not an image nor a video."];
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    unlink($target_file);
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    $error = $lang["Sorry, your file is too large."];
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Content-Type: application/json; charset=UTF-8");
    die(isset($error) ? $error : $lang["There was an error uploading your file."]);
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if ($target_file == "favicon.png") {
            $image_info = getimagesize($target_file);
        }
        echo htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
    } else {
        header("Content-Type: application/json; charset=UTF-8");
        die($target_file . "||" . $_FILES["fileToUpload"]["tmp_name"]);
    }
}
?>
