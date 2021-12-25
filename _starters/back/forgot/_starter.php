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
        $z = $zSmarty->tpl_vars["z"]->value;
        $zThis = $zSmarty->tpl_vars["zThis"]->value;
        $zUserTools = $zSmarty->tpl_vars["zUserTools"]->value;

        $params = array();

        $params["name"] = $z->name;
        $params["cookie_key"] = $z->key;
        $params["hidden_key"] = $z->hidden_key;
        $params["host"] = $_SERVER["HTTP_HOST"];

        $email = isset($_GET["email"]) ? $_GET["email"] : $data["email"];
        $token = isset($_GET["token"]) ? $_GET["token"] : $data["token"];

        if (isset($email)) {
            $checkForUser = zDB::get()->select("SELECT * FROM zUsers WHERE email = '" . $email . "'");
            $zUser = new zUser($checkForUser[0]);

            if (isset($token)) {
                if ($checkForUser) {
                    $user_token = $zUser->zUserGetToken();

                    if (isset($user_token) && $user_token == $token) {
                        $zSmarty->assign("changeToken", $zUser->zUserGetToken());
                    }
                }

                if (isset($data["password"]) && isset($data["confirm_password"])) {
                    $data["id_user"] = $zUser->id;
                    $data["password"] = $zUser->password;
                    $data["password_new"] = $data["confirm_password"];
                    try {
                        $send = $zUserTools->zUserChangePassword($data);
                        if ($send) {
                            $update_token = zDB::get()->execute("UPDATE zUsers SET token_expire = CURRENT_TIMESTAMP WHERE id_user = '$zUser->id'");
                            die($zThis->value("Password updated."));
                        }
                    } catch(Exception $e) {
                        $error = $e->getMessage();
                        die($error);
                    }
                }
            } else {
                if ($checkForUser) {
                    $zUser->zUserUpdateToken();

                    $params["token"] = $zUser->token;
                    $params["langcode"] = $data["langcode"];
                    $params["email"] = $data["email"];

                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, "https://onucyirmibir.com/zMail.php");
                    curl_setopt($ch, CURLOPT_POST, count($params));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    $result = curl_exec($ch);

                    curl_close($ch);

                    die($result);
                } else {
                    die($zThis->value("No account found for this e-mail."));
                }
            }

        }

    }
}
