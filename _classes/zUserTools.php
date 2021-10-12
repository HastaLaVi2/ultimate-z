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

if (strpos("$_SERVER[REQUEST_URI]", "zUserTools.php") !== false) {
    header("location: index.php");
}

class zUserTools {

    # create a new user for the system
    public function zUserCreate(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map("trim", $data);

            # seperate each data
            $name = $db->trim($trimmedData["name"]);
            $surname = $db->trim($trimmedData["surname"] );
            $id_rank = $db->trim($trimmedData["rank"] );
            $email = $db->trim($trimmedData["email"] );
            $passw = $db->trim($trimmedData["password"] );
            $passw_again = $db->trim($trimmedData["confirm_password"] );
            $id_lang = $db->trim($trimmedData["langcode"]);
            $ip_user = $_SERVER["REMOTE_ADDR"];
            $id_picture = "1";

            if((!$name) || (!$surname) || (!$id_rank) || (!$passw) || (!$passw_again) ) {
				throw new Exception($zThis["The information is missing."]);
			}

            # check if the passwords are the same
			if($passw !== $passw_again) {
				throw new Exception($zThis["Passwords do not match."]);
			}

            # check if the user already exists
            $check = zDB::get()->select("SELECT id_user FROM zUsers WHERE name = '$name' AND surname = '$name'");

            if($check[0]["id_user"]) {
                throw new Exception($zThis["A user with the exact name provided already exists."]);
            }

            # turn the password into md5
            $passw = md5($passw);

            # run the query
            $query = zDB::get()->execute("INSERT INTO `zUsers` (name, surname, email, password, id_rank, id_picture, id_lang, register_date, ip_user) VALUES ('$name', '$surname', '$email', '$passw', '$id_rank', '$id_picture', '$id_lang', CURRENT_TIMESTAMP, '$ip_user')");

            if($query) {
                return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    # sign in form
    public function zUserLogin(array $data, $key) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        $_SESSION["zLogged-" . $key] = false;
        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map("trim", $data);

            # seperate each data
            $name = $db->trim($trimmedData["name"]);
            $surname = $db->trim($trimmedData["surname"]);
            $passw = $db->trim($trimmedData["password"]);
            $keep_loged_in = $trimmedData["keepLoggedIn"];

            # check if there is missing information
            if ((!$name) || (!$surname) || (!$passw) ) {
				throw new Exception($zThis["The information is missing."]);
			}

            # turn the password into md5
            $passw = md5($passw);

            $query = "SELECT * FROM zUsers WHERE name = '$name' AND surname = '$surname' AND password = '$passw' ";
			$result = $db->select($query);
            if(!empty($result))$data=$result[0];

            $check_for_user = "SELECT * FROM zUsers WHERE name = '$name' AND surname = '$surname'";
			$check_for_user = $db->select($check_for_user);

            if (empty($check_for_user)) {
                throw new Exception($zThis["The user does not exists."]);
            }

            if (!empty($check_for_user) && empty($result)) {
                throw new Exception($zThis["Wrong password."]);
            }

            if (isset($keep_loged_in) && $keep_loged_in == "1") {
                // store user data in cookie
                setcookie("zUser-" . $key, json_encode($data), time() + 3600 * 24 * 30, "/");
            }
            if(!empty($result)) {
                $_SESSION["zUser-" . $key] = $data;
				$_SESSION["zLogged-" . $key] = true;
				return true;
            } else {
                throw new Exception($zThis["Operation failed while trying to login."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    # change name and surname
    public function zUserChangeName(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map('trim', $data);

            # seperate each data
            $id_user = $db->trim($trimmedData["id_user"] );
            $name_new = $db->trim($trimmedData["name_new"] );
            $surname_new = $db->trim($trimmedData["surname_new"] );

            # check if there is missing information
            if ((!$id_user) || (!$name_new) || (!$surname_new) ) {
				throw new Exception($zThis["The information is missing."]);
			}

            $query = "SELECT * FROM zUsers WHERE id_user = '$id_user'";
			$result = $db->select($query);
            if(!empty($result))$data=$result[0];

            if(!empty($result)) {
                $update = $db->execute("UPDATE zUsers SET name = '$name_new', surname = '$surname_new' WHERE id_user = '$id_user'");
				return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    # change password
    public function zUserChangePassword(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map('trim', $data);

            # seperate each data
            $id_user = $db->trim($trimmedData["id_user"] );
            $passw = $db->trim($trimmedData["password"] );
            $passw_new = $db->trim($trimmedData["password_new"] );

            # check if there is missing information
            if ((!$id_user) || (!$passw) || (!$passw_new) ) {
				throw new Exception($zThis["The information is missing."]);
			}

            $query = "SELECT * FROM zUsers WHERE id_user = '$id_user'";
			$result = $db->select($query);
            if(!empty($result))$data=$result[0];

            if ($data["password"] !== md5($passw)) {
                throw new Exception($zThis["Wrong password."]);
            }

            $passw_new = md5($passw_new);

            if(!empty($result) && $data["password"] == md5($passw)) {
                $update = $db->execute("UPDATE zUsers SET password = '$passw_new' WHERE id_user = '$id_user'");
				return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    # change password
    public function zUserChangePicture(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            $new_data = array();
            $new_data["id_user"] = $data["id_user"];
            $new_data["avatar"] = $data["avatar"][0];

            # getting the data first
            $trimmedData = array_map('trim', $new_data);

            # seperate each data
            $id_user = $db->trim($trimmedData["id_user"] );
            $id_picture = $db->trim($trimmedData["avatar"] );

            $query = "SELECT * FROM zUsers WHERE id_user = '$id_user'";
			$result = $db->select($query);
            if(!empty($result))$data=$result[0];

            if(!empty($result)) {
                $update = $db->execute("UPDATE zUsers SET id_picture = '$id_picture' WHERE id_user = '$id_user'");
				return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        }
    }

    # change language
    public function zUserChangeLanguage(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map('trim', $data);

            # seperate each data
            $id_user = $db->trim($trimmedData["id_user"] );
            $id_lang = $db->trim($trimmedData["id_lang"] );

            $query = "SELECT * FROM zUsers WHERE id_user = '$id_user'";
			$result = $db->select($query);
            if(!empty($result))$data=$result[0];

            if(!empty($result)) {
                $update = $db->execute("UPDATE zUsers SET id_lang = '$id_lang' WHERE id_user = '$id_user'");
				return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        }
    }

    # change rank
    public function zUserChangeRank(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map("trim", $data);

            # seperate each data
            $id_user = $db->trim($trimmedData["id_user"] );
            $id_rank = $db->trim($trimmedData["id_rank"] );

            $query = "SELECT * FROM zUsers WHERE id_user = '$id_user'";
			$result = $db->select($query);
            if(!empty($result))$data=$result[0];

            if(!empty($result)) {
                $update = $db->execute("UPDATE zUsers SET id_rank = '$id_rank' WHERE id_user = '$id_user'");
				return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        }
    }

    # change email
    public function zUserChangeEmail(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map("trim", $data);

            # seperate each data
            $id_user = $db->trim($trimmedData["id_user"] );
            $email_new = $db->trim($trimmedData["email_new"] );

            $query = "SELECT * FROM zUsers WHERE id_user = '$id_user'";
			$result = $db->select($query);
            if(!empty($result))$data=$result[0];

            if(!empty($result)) {
                $update = $db->execute("UPDATE zUsers SET email = '$email_new' WHERE id_user = '$id_user'");
				return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        }
    }

    public function zUserDelete(array $data) {
        $db = zDB::get();
        $zThis = zThis::get()->table;

        if(!empty($data)) {
            # getting the data first
            $trimmedData = array_map("trim", $data);

            # seperate each data
            $id_user = $db->trim($trimmedData["id_user"]);

            if((!$id_user) ) {
				throw new Exception($zThis["The information is missing."]);
			}

            $result = $db->execute("DELETE FROM `zUsers` WHERE id_user = '$id_user';");

            if ($result) {
                return true;
            } else {
                throw new Exception($zThis["Cannot connect to database."]);
            }
        } else {
            throw new Exception($zThis["The information is missing."]);
        }
    }

    # check if any user exists in the database
    public function zUserAnyoneThere($page) {
        $db = zDB::get();

        $query = $db->select("SELECT count(id_user) cnt FROM zUsers");
        if(!empty($query))$data = $query[0];

        if($data["cnt"] == 0) {
            return ($page == "index") ? true : false;
        } else {
            return ($page == "index") ? false : true;
        }
    }

    # check if the user with the name and the surname already exists
    public function zUserAlreadyExists(array $data) {
        $db = zDB::get();

        if(isset($data[0]) && !empty($data[0]) && isset($data[1]) && !empty($data[1])) {
        	$name = $data[0];
        	$surname = $data[1];
        	$query = "SELECT count(id_user) cnt FROM zUsers where name = '$name' and  surname = '$surname'";
        	$result = $db->select($query);
        	if(!empty($result))$data=$result[0];
        	if($data["cnt"] > 0) {
        		echo "false";
        	} else {
        		echo "true";
        	}
        }
    }

    public function zUserPermission($loginPage, $key) {
        if((isset($_SESSION["zLogged-" . $key]) && !$_SESSION["zLogged-" . $key]) || !isset($_SESSION["zLogged-" . $key])) {
        	header("Location: " . $loginPage);
            exit();
        }

        $this->zUserOnCookie($key);
    }

    public function zUserCheckUserLanguage(bool $zAdmin = NULL, $key) {
        $this->zUserOnCookie($key);
        $zTools = new zTools();

        if (isset($zAdmin) && $zAdmin && isset($_SESSION["zUser-" . $key])) {
            $checkUser = new zUser($_SESSION["zUser-" . $key]);
            return $zTools->zToolsGetLangCode($checkUser->id_lang);
        }
    }

    public function zUserOnCookie($key = NULL) {
        # check if there is an already logged in user in the cookie and then set its data to the session
        if (isset($_COOKIE["zUser-" . $key]) && !isset($_SESSION["zLogged-" . $key])) {
            $user = json_decode($_COOKIE["zUser-" . $key], true);

            # do the stuff to check if there is a user with $user['username'] and $user['password'] in the database, then if there is one, do as below :
            $_SESSION["zLogged-" . $key] = true;
            if (gettype($_SESSION["zUser-" . $key]) !== "object") {
                $_SESSION["zUser-" . $key] = $user;
            }
        }
    }

    # get all users names and surnames from database
    public function zUserGetUsers() {
        $db = zDB::get();

        $users = array();
        $query = $db->select("SELECT * FROM zUsers");

        if (!empty($query)) {
            foreach ($query as $u){
                array_push($users, $u["name"] . " " . $u["surname"]);
            }
        }

        return $users;
    }

    # get all users from database
    public function zUserGetAll() {
        $db = zDB::get();

        $users = array();
        $query = $db->select("SELECT * FROM zUsers");

        if (!empty($query)) {
            foreach ($query as $u){
                $data = array();
                $data["id_user"] = $u["id_user"];
                $zUser = new zUser($data);
                array_push($users, $zUser);
            }
        }

        return $users;
    }

    # get all users from database
    public function zUserLogout() {
		session_unset();
		session_destroy();
		header("Location: ../login/");
    }
}
