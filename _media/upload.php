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

$allowed_formats = array("jpg", "bmp", "xbm", "wbmp", "webp", "png", "jpeg", "gif", "mp4", "m4v");

$target_file = $target_dir . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
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

$target_file = preg_replace("/\.".$imageFileType."$/", ".webp", $target_file);

// Check if file already exists for these types
while (file_exists($target_file)) {
    $newName = strtolower(pathinfo($target_file,PATHINFO_FILENAME)) . "_new.webp";
    $_FILES["fileToUpload"]["name"] = $newName;
    $target_file = $target_dir . $newName;
}

$_FILES["fileToUpload"]["name"] = preg_replace("/\.webp$/", ".".$imageFileType, $_FILES["fileToUpload"]["name"]);
$target_file = preg_replace("/\.webp$/", ".".$imageFileType, $target_file);

// Check file size
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    $error = $lang["Sorry, your file is too large."];
    $uploadOk = 0;
}

if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
        $quality = 50;
    } else {
        $quality = 100;
    }
}

// Allow certain file formats
if (!isset($_POST["filepond"])) {
    if (!in_array($imageFileType, $allowed_formats)) {
        $error = $lang["Sorry, only JPG, JPEG, PNG, GIF, MP4 & M4V files are allowed."];
        $uploadOk = 0;
    }
}

// copied from: https://stackoverflow.com/questions/26314508/convert-jpg-to-webp-using-imagewebp
function webpConvert2($file, $type, $compression_quality = 80) {
    // check if file exists
    if (!file_exists($file)) {
        return false;
    }
    $file_type = exif_imagetype($file);
    //https://www.php.net/manual/en/function.exif-imagetype.php
    //exif_imagetype($file);
    // 1    IMAGETYPE_GIF
    // 2    IMAGETYPE_JPEG
    // 3    IMAGETYPE_PNG
    // 6    IMAGETYPE_BMP
    // 15   IMAGETYPE_WBMP
    // 16   IMAGETYPE_XBM
    $output_file = $file_type != "1" ? preg_replace("/\.".$type."$/", ".webp", $file) : $file;
    if (function_exists("imagewebp")) {
        switch ($file_type) {
            case '1': //IMAGETYPE_GIF
                $image = imagecreatefromgif($file);
                break;
            case '2': //IMAGETYPE_JPEG
                $image = imagecreatefromjpeg($file);
                break;
            case '3': //IMAGETYPE_PNG
                    $image = imagecreatefrompng($file);
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);
                    break;
            case '6': // IMAGETYPE_BMP
                $image = imagecreatefrombmp($file);
                break;
            case '15': //IMAGETYPE_WBMP
               return false;
                break;
            case '16': //IMAGETYPE_XBM
                $image = imagecreatefromxbm($file);
                break;
            case '18': //IMAGETYPE_WEBP
                break;
            default:
                return false;
        }
        if (getimagesize($file)[0] > 2000) {
            $image = imagescale($image, 2000);
        }
        if ($file_type != "1" && $file_type != "18") {
            // Save the image
            $result = imagewebp($image, $output_file, $compression_quality);
            if (false === $result) {
                return false;
            }
            // Free up memory
            imagedestroy($image);
            unlink($file);
        }
        return basename($output_file);
    } elseif (class_exists("Imagick")) {
        $image = new Imagick();
        $image->readImage($file);
        if ($file_type === "3") {
            $image->setImageFormat("webp");
            $image->setImageCompressionQuality($compression_quality);
            $image->setOption("webp:lossless", "true");
        }
        $image->writeImage($output_file);
        unlink($file);
        return basename($output_file);
    }
    return false;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Content-Type: application/json; charset=UTF-8");
    die(isset($error) ? $error : $lang["There was an error uploading your file."]);
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo ($imageFileType != "mp4" && $imageFileType != "m4v") ? webpConvert2($target_file, $imageFileType) : basename($target_file);
    } else {
        header("Content-Type: application/json; charset=UTF-8");
        die($target_file . "||" . $_FILES["fileToUpload"]["tmp_name"]);
    }
}
?>
