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

if (isset($_POST["zPage"])) {
    $target_dir = "uploads/" . $_POST["zPage"] . "/";
} else {
    $target_dir = "";
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (isset($_POST["langcode"])) {
    $pathForThis = "../_config/_" . $_POST["langcode"] . ".php";
    if(!file_exists($pathForThis))$pathForThis="../_config/_en.php";
} else {
    $pathForThis = "../_config/_en.php";
}
include($pathForThis);

// check if the folder exists
$path = rtrim($target_dir, "/");
if (isset($_POST["zPage"]) && !is_dir($path)) {
    mkdir($path, 0777, true);
}

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
while (file_exists($target_file)) {
    $newName = strtolower(pathinfo($target_file,PATHINFO_FILENAME)) . "_new." . $imageFileType;
    $_FILES["fileToUpload"]["name"] = $newName;
    $target_file = $target_dir . $newName;
}

if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
    $target_file = preg_replace("/\.".$imageFileType."$/", ".webp", $target_file);

    // Check if file already exists for these types
    while (file_exists($target_file)) {
        $newName = strtolower(pathinfo($target_file,PATHINFO_FILENAME)) . "_new.webp";
        $_FILES["fileToUpload"]["name"] = $newName;
        $target_file = $target_dir . $newName;
    }

    $_FILES["fileToUpload"]["name"] = preg_replace("/\.webp$/", ".".$imageFileType, $_FILES["fileToUpload"]["name"]);
    $target_file = preg_replace("/\.webp$/", ".".$imageFileType, $target_file);
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    $error = $lang["Sorry, your file is too large."];
    $uploadOk = 0;
}

// Allow certain file formats
if (!isset($_POST["filepond"])) {
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "m4v") {
        $error = $lang["Sorry, only JPG, JPEG, PNG, GIF, MP4 & M4V files are allowed."];
        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Content-Type: application/json; charset=UTF-8");
    die(isset($error) ? $error : $lang["There was an error uploading your file."]);
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
            $file = $target_file;
            if ($imageFileType == "png") {
                $image = imagecreatefrompng($file);
            } else {
                $image = imagecreatefromjpeg($file);
            }
            ob_start();
            imagejpeg($image, NULL, 100);
            $cont = ob_get_contents();
            ob_end_clean();
            imagedestroy($image);
            $content = imagecreatefromstring($cont);
            imagewebp($content, preg_replace("/\.".$imageFileType."$/", ".webp", $target_file), 50);
            imagedestroy($content);
            unlink($target_file);

            echo htmlspecialchars(preg_replace("/\.".$imageFileType."$/", ".webp", basename($_FILES["fileToUpload"]["name"])));
        } else {
            echo htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
        }
    } else {
        header("Content-Type: application/json; charset=UTF-8");
        die($target_file . "||" . $_FILES["fileToUpload"]["tmp_name"]);
    }
}
?>
