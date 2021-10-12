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

        if(!empty($data)) {
            // if the user has already a database
            if (isset($data["create_db"]) && $data["create_db"] == "no") {
                // try connecting to the databae
                $test = mysqli_connect($data["host"], $data["name"], $data["password"], $data["database"]);
                ob_get_clean();

                if ($test) {
                    $this->writeToFile($data, "_config/z.php");
                    echo "1" . $zThis["Connection is successful."];
                    exit;
                } else {
                    // connection not established
                    echo "0" . $zThis["Cannot connect to database."];
                    exit;
                }
            } else {
                // if user does not have a database
                $test = mysqli_connect($data["host"], $data["name"], $data["password"]);
                ob_get_clean();

                if (!$test) {
                    // the user name or password wrong for the database
                    echo "0" . $zThis["Connection cannot be established with this user."];
                    exit;
                }

                if (isset($data["database"]) && !empty($data["database"])) {
                    // make database the current database
                    $db_selected = mysqli_select_db($test, $data["database"]);
                    ob_get_clean();

                    if ($db_selected) {
                        echo "0" . $zThis["Database already exists."];
                        exit;
                    } else {
                        // if we couldn't, then it either doesn't exist, or we can't see it
                        $db = $data["database"];
                        $sql = "CREATE DATABASE $db";

                        if (mysqli_query($test, $sql)) {
                            mysqli_query($test, "GRANT ALL PRIVILEGES ON $db.* TO '".$data["name"]."'@'".$data["host"]."';");
                            $this->writeToFile($data, "_config/z.php");
                            echo "1" . $zThis["Database created."];
                            exit;
                        } else {
                            echo "0" . $zThis["Database could not created."];
                            exit;
                        }
                    }
                } else {
                    echo "0" . $zThis["Enter a database name."];
                    exit;
                }
            }


        }
    }

    public function writeToFile(array $data = NULL, $ourFileHandle = NULL) {
        $contents = file_get_contents($ourFileHandle);
        $contents = preg_replace('/define\("HOST", "(.+?)"\)/s', "define(\"HOST\", \"".$data["host"]."\")", $contents);
        $contents = preg_replace('/define\("USER", "(.+?)"\)/s', "define(\"USER\", \"".$data["name"]."\")", $contents);
        $contents = preg_replace('/define\("PASS", "(.+?)"\)/s', "define(\"PASS\", \"".$data["password"]."\")", $contents);
        $contents = preg_replace('/define\("DABASE", "(.+?)"\)/s', "define(\"DABASE\", \"".$data["database"]."\")", $contents);
        $contents = preg_replace('/define\("CONNECTION", (.+?)\)/s', "define(\"CONNECTION\", true)", $contents);
        file_put_contents($ourFileHandle, $contents);
    }
}
