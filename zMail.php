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

header('Access-Control-Allow-Origin: bellis.com.tr');
header('Access-Control-Allow-Origin: co-fact.com');
header('Access-Control-Allow-Origin: donmezoglubilisim.com');

include "_config/z.php";
include "_config/zDB.php";
include "_classes/zThis.php";
    
// load PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (!empty($_POST)) {
    $lang = array();

    if (file_exists("_config/_" . $_POST["langcode"] . ".php")) {
        include_once("_config/_" . $_POST["langcode"] . ".php");
    } else {
        include_once("_config/_en.php");
    }
    
    $zThis = new zThis($lang);
    
    $cookie_key = $_POST["cookie_key"];
    $hidden_key = $_POST["hidden_key"];
    $checkTheKeys = zDB::get()->select("SELECT * FROM zHiddenKeys WHERE cookie_key = '$cookie_key' AND hidden_key = '$hidden_key'");
    
    require "_scripts/phpmailer/src/Exception.php";
    require "_scripts/phpmailer/src/PHPMailer.php";
    require "_scripts/phpmailer/src/SMTP.php";
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    if (!empty($checkTheKeys)) {
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.onucyirmibir.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
            //Recipients
            $mail->setFrom("ultimate-z@onucyirmibir.com", "ultimate Z");
            $mail->addAddress($_POST["email"]);
            
            $mail->setLanguage($_POST["langcode"], "_scripts/phpmailer/language/");
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $zThis->value("Password Renew Link");
            $mail->Body    = '
    <!DOCTYPE html>
    <html lang="'.$_POST["langcode"].'">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- font libraries -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- the ultimate z -->
    <link rel="stylesheet" type="text/css" href="https://onucyirmibir.com/_scripts/ultimate-z/z.min.css"/>
    <script src="https://onucyirmibir.com/_scripts/ultimate-z/z.min.js"></script>
    </head>
    <body class="back7">
    <div style="width:100%;color:#666;padding:30px">
        <div style="margin-bottom:50px">
            <div style="font-size:30px;font-weight:900;color:#99154e">ultimate Z</div>
            <div style="margin-top:-5px;font-size:13px;font-weight:bolder;color:#a8aebb">powered by <a href="https://onucyirmibir.com" target="_blank">13/21</a></div>
        </div>
        <div style="background:white;border-radius:20px;padding:20px">
            <div style="position:absolute;top:-25px;left:20px;font-weight:bold;color:#2d499d">'.$zThis->value("Password Renew Link").'</div>
            '.$zThis->value("Hello").',
            <br><br>'.$zThis->value("You requested to change your password, if this is not your doing, you can dismiss this e-mail.").'
            <br><br><a target="_blank" href="https://'.$_POST["host"].'/_admin/forgot/index.php?email='.$_POST["email"].'&token='.$_POST["token"]
            .'" style="background:#2d499d;color:white;padding:5px;border-radius:5px;">'.$zThis->value("Click here").'</a> '.$zThis->value("to change your password").'.
        </div>
        <div style="font-size:12px;padding-top:20px;text-align:center">
            Copyright &copy; 2021 ultimate Z
        </div>
    </div></body></html>';
            $mail->AltBody = 'ultimate Z\n\n'.$zThis->value("You requested to change your password, if this is not your doing, you can dismiss this e-mail.")
                .'\n'.$zThis->value("Click here")
                .' (https://'.$_POST["host"].'/_admin/forgot/index.php?email='.$_POST["email"].'&token='.$_POST["token"].') '
                .$zThis->value("to change your password").'\nCopyright &copy; 2021 ultimate Z';
            
            $mail->send();
            echo "~" . $zThis->value("A renew link has been sent to your e-mail.");
        } catch (Exception $e) {
            echo "~" . $zThis->value("Message could not be sent. Mailer Error: ") . $mail->ErrorInfo;
        }
    } else {
        echo "~" . $zThis->value("You are using unauthorised ultimate Z account. Please contact your provider.");
    }
} else {
    header("Location: index.php");
}



