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

if (strpos("$_SERVER[REQUEST_URI]", "zDB.php") !== false) {
    header("location: index.php");
}

class zDB {
    public $conn;
    public static $instance;

    public function __construct() {
        $zThis = zThis::get()->table;

        $connection = CONNECTION;
        if ($connection == true) {
            $this->conn = mysqli_connect(HOST, USER, PASS, DABASE);
            if(mysqli_connect_error()) echo $zThis["Cannot connect to database."] . mysqli_connect_error();
        }

        self::$instance = $this;
    }

    public static function get() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function select($query) {
        $result = array();

        if ($this->conn) {
            $run = mysqli_query($this->conn, "SET CHARACTER SET utf8mb4");
            $run = mysqli_query($this->conn, $query);
        }

        if ($run) {
            while ($data = mysqli_fetch_assoc($run)) {
                array_push($result, $data);
            }
        }

        return $result;
    }

    public function execute($query) {
        if ($this->conn) {
            $run = mysqli_query($this->conn, "SET CHARACTER SET utf8mb4");
            $run = mysqli_query($this->conn, "SET character_set_connection = utf8mb4");
            $run = mysqli_query($this->conn, "SET character_set_results = utf8mb4");
            $run = mysqli_multi_query($this->conn, $query);
        }

        return $run;
    }

    public function trim($data) {
        if ($this->conn) {
            $run = mysqli_real_escape_string($this->conn, $data);
        }

        return $run;
    }

    public function all() {
        mysqli_query($this->conn, "SET CHARACTER SET utf8mb4");
        $all = mysqli_query($this->conn, "SHOW TABLES FROM `" . DABASE . "`");

        $result = array();

        // go through each row that was returned in $result
        while ($table = mysqli_fetch_array($all)) {
            // print the table that was returned on that row.
            array_push($result, $table);
        }

        return $result;
    }

    public function table($name = NULL) {
        $query = $this->select("SELECT * FROM " . $name);

        return $query;
    }

    public function has_ssl($domain) {
        $ssl_check = @fsockopen("ssl://" . $domain, 443, $errno, $errstr, 30);
        $res = !! $ssl_check;
        if ($ssl_check) {fclose( $ssl_check );}
        return $res;
    }

    public function primaryKey($name = NULL) {
        $findKey = mysqli_query(zDB::get()->conn, "SHOW KEYS FROM ". $name ." WHERE Key_name = 'PRIMARY'");

        if ($findKey) {
            $finalKey = mysqli_fetch_array($findKey);
            return $finalKey["Column_name"];
        }
    }
}
