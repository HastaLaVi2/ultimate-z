{**
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
 *}

<!-- form validation -->
<script src="{$zContent->srcFull["scripts"]}/jquery/jquery.validate.min.js"></script>
<script type="text/javascript">
var formMessages = {
    name_req: "{zThis z='Please enter a name.'}",
    name_remote: "{zThis z='A user with the exact name provided already exists.'}",
    surname_req: "{zThis z='Please enter a surname.'}",
    email_req: "{zThis z='Please enter an email.'}",
    password_req: "{zThis z='Please enter a password.'}",
    confirm_password_req: "{zThis z='Please enter password again.'}",
    confirm_password_equal: "{zThis z='Passwords do not match.'}",
    rank_req: "{zThis z='Please choose a rank.'}",
    site_name_req: "{zThis z='Please enter a site name.'}"
};
var zUsers = {$zValidate};
$.validator.addMethod("alreadyexist", function(value, element, parameter) {
    return zUsers.indexOf(parameter[0] + " " + parameter[1]) == -1;
}, formMessages.name_remote);
</script>
<script src="{$zContent->srcFull["scripts"]}/validation.js"></script>
