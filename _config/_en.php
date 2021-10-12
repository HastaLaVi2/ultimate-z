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

if (strpos("$_SERVER[REQUEST_URI]", "_en.php") !== false) {
    header("location: index.php");
}

# INFORMATION DESK
$lang["Connection is successful."] = "Connection is successful.";
$lang["Cannot connect to database."] = "Cannot connect to database.";
$lang["Operation failed while trying to login."] = "Operation failed while trying to login.";
$lang["The information is missing."] = "The information is missing.";
$lang["Passwords do not match."] = "Passwords do not match.";
$lang["A user with the exact name provided already exists."] = "A user with the exact name provided already exists.";
$lang["A site with the exact name provided already exists."] = "A site with the exact name provided already exists.";
$lang["The user does not exists."] = "The user does not exists.";
$lang["Please enter a name."] = "Please enter a name.";
$lang["Please enter a surname."] = "Please enter a surname.";
$lang["Please enter an email."] = "Please enter an email.";
$lang["Please enter a password."] = "Please enter a password.";
$lang["Please enter password again."] = "Please enter password again.";
$lang["Please enter a site name."] = "Please enter a site name.";
$lang["Please choose a rank."] = "Please choose a rank.";
$lang["Wrong password."] = "Wrong password.";
$lang["Your message was sent, we will be back to you on that shortly."] = "Your message was sent, we will be back to you on that shortly.";
$lang["Change has failed."] = "Change has failed.";
$lang["Change has been made."] = "Change has been made.";
$lang["Please refresh the page."] = "Please refresh the page.";
$lang["Page created."] = "Page created.";
$lang["Page deleted."] = "Page deleted.";
$lang["Category created."] = "Category created.";
$lang["Category deleted."] = "Category deleted.";

# MEDIA ISSUES
$lang["File is not an image nor a video."] = "File is not an image nor a video.";
$lang["Sorry, your file is too large."] = "Sorry, your file is too large.";
$lang["Sorry, only JPG, JPEG, PNG, GIF, MP4 & M4V files are allowed."] = "Sorry, only JPG, JPEG, PNG, GIF, MP4 & M4V files are allowed.";
$lang["There was an error uploading your file."] = "There was an error uploading your file.";
$lang["File has been deleted."] = "File has been deleted.";
$lang["There was an error deleting your file."] = "There was an error deleting your file.";
$lang["Delete File"] = "Delete File";
$lang["Are you sure you want to delete this file?"] = "Are you sure you want to delete this file?";

# GENERAL
$lang["Hello"] = "Hello";
$lang["All"] = "All";
$lang["Menu"] = "Menu";
$lang["Layouts"] = "Layouts";
$lang["Error"] = "Error";
$lang["View"] = "View";
$lang["Advanced"] = "Advanced";
$lang["Button"] = "Button";
$lang["Link"] = "Link";

# zSETUP
$lang["or"] = "or";
$lang["Setup."] = "Setup.";
$lang["Choose a language to start."] = "Choose a language to start.";
$lang["Input your data to create your own control panel."] = "Input your data to create your own control panel.";
$lang["Choose..."] = "Choose...";
$lang["Thanks for choosing"] = "Thanks for choosing";
$lang["ultimate Z."] = "ultimate Z.";
$lang["Test your database connection."] = "Test your database connection.";
$lang["I have a database"] = "I have a database";
$lang["I do not have a database"] = "I do not have a database";
$lang["Go Back"] = "Go Back";
$lang["Continue"] = "Continue";
$lang["Database created."] = "Database created.";
$lang["Database could not created."] = "Database could not created.";
$lang["Create tables."] = "Create tables.";
$lang["Tables created."] = "Tables created.";
$lang["Tables could not created."] = "Tables could not created.";
$lang["Enter a database name."] = "Enter a database name.";
$lang["Database already exists."] = "Database already exists.";
$lang["Connection cannot be established with this user."] = "Connection cannot be established with this user.";
$lang["Site created."] = "Site created.";

# zFORM
$lang["Name"] = "Name";
$lang["Surname"] = "Surname";
$lang["Email"] = "Email";
$lang["Password"] = "Password";
$lang["Confirm Password"] = "Confirm Password";
$lang["Old Password"] = "Old Password";
$lang["New Password"] = "New Password";
$lang["Rank"] = "Rank";
$lang["Create"] = "Create";
$lang["Keep me logged in"] = "Keep me logged in";
$lang["Log in"] = "Log in";
$lang["Log out"] = "Log out";
$lang["Site name"] = "Site name";
$lang["Save"] = "Save";
$lang["Send"] = "Send";
$lang["Reset"] = "Reset";
$lang["Check"] = "Check";
$lang["Accept"] = "Accept";
$lang["Close"] = "Close";
$lang["Submit"] = "Submit";
$lang["Category..."] = "Category...";
$lang["Choose..."] = "Choose...";
$lang["Search..."] = "Search...";
$lang["Type your message"] = "Type your message";
$lang["Forgot your password?"] = "Forgot your password?";
$lang["Remember your account?"] = "Remember your account?";
$lang["Host"] = "Host";
$lang["Database"] = "Database";
$lang["New Database"] = "Database";
$lang["Category"] = "Category";

# zLOGIN
$lang["Log in with your data that you entered during installation."] = "Log in with your data that you entered during installation.";

# zFORGOT
$lang["Forgot Password"] = "Forgot Password";
$lang["Input your email and we will send you reset password link."] = "Input your email and we will send you reset password link.";

# zDASHBOARD
$lang["Welcome to the ultimate Z!"] = "Welcome to the ultimate Z!";
$lang["Total Page Views"] = "Total Page Views";
$lang["Total Users"] = "Total Users";
$lang["Total Pages"] = "Total Pages";
$lang["Visits"] = "Visits";
$lang["Views by Pages"] = "Views by Pages";
$lang["Total Views by Period"] = "Total Views by Period";

# zSETTINGS
$lang["Change Rank"] = "Change Rank";
$lang["Change Name"] = "Change Name";
$lang["Change Password"] = "Change Password";
$lang["Change Language"] = "Change Language";
$lang["Change Email"] = "Change Email";
$lang["Change Avatar"] = "Change Avatar";
$lang["Select Language"] = "Select Language";
$lang["Site Settings"] = "Site Settings";
$lang["Site Name"] = "Site Name";
$lang["Enable site"] = "Enable site";
$lang["Disable site"] = "Disable site";
$lang["This option will determine whether your website should be open to the internet or not. If this is disabled, the system will recognise your IP and let you see the website, but others will not."] = "This option will determine whether your website should be open to the internet or not. If this is disabled, the system will recognise your IP and let you see the website, but others will not.";
$lang["404 Error Page"] = "404 Error Page";
$lang["Enable 404 error page"] = "Enable 404 error page";
$lang["Disable 404 error page"] = "Disable 404 error page";
$lang["This option will determine whether your website should display a 404 error page, or redirect to homepage when an unknown url entered."] = "This option will determine whether your website should display a 404 error page, or redirect to homepage when an unknown url entered.";
$lang["Enable or Disable Languages on Frontend"] = "Enable or Disable Languages on Frontend";

# zPAGE EDIT
$lang["View Page"] = "View Page";
$lang["Page List"] = "Page List";
$lang["Template"] = "Template";
$lang["Choose a Template"] = "Choose a Template";
$lang["Edit"] = "Edit";
$lang["Editing page:"] = "Editing page:";
$lang["Add New Page"] = "Add New Page";
$lang["Title"] = "Title";
$lang["Text"] = "Text";
$lang["URL with / at start"] = "URL with / at start";
$lang["Holders"] = "Holders";
$lang["Add a New Holder"] = "Add a New Holder";
$lang["Delete"] = "Delete";
$lang["Delete Page"] = "Delete Page";
$lang["Seperate each category with comma"] = "Seperate each category with comma";
$lang["Are you sure you want to delete this page?"] = "Are you sure you want to delete this page?";
$lang["Delete Holder"] = "Delete Holder";
$lang["Are you sure you want to delete this holder?"] = "Are you sure you want to delete this holder?";
$lang["Meta Description"] = "Meta Description";
$lang["If you do not enter a meta description, the first text on the page will be used."] = "If you do not enter a meta description, the first text on the page will be used.";
$lang["Block"] = "Block";

# zCATEGORY EDIT
$lang["Category List"] = "Category List";
$lang["Add New Category"] = "Add New Category";
$lang["Editing category:"] = "Editing category:";
$lang["Delete Category"] = "Delete Category";
$lang["Are you sure you want to delete this category?"] = "Are you sure you want to delete this category?";

# zDATABASE
$lang["Table"] = "Table";
$lang["Number of Rows"] = "Number of Rows";

# zUSER
$lang["Add a User"] = "Add a User";
$lang["Delete User"] = "Delete User";
$lang["Are you sure you want to delete this user?"] = "Are you sure you want to delete this user?";

# zFAVICON
$lang["Desktop Browsers"] = "Desktop Browsers";
$lang["Search Engines"] = "Search Engines";
$lang["Normal Theme"] = "Normal Theme";
$lang["Dark Theme"] = "Dark Theme";
$lang["Use the original image."] = "Use the original image.";
$lang["Add margins and background."] = "Add margins and background.";
$lang["Background"] = "Background";
$lang["Background Radius"] = "Background Radius";
$lang["Image Size"] = "Image Size";
$lang["iOS Icon"] = "iOS Icon";
$lang["iPhone and iPad users can pin your web site on their home screen. The link looks like a native app."] = "iPhone and iPad users can pin your web site on their home screen. The link looks like a native app.";
$lang["Android Chrome Icon"] = "Android Chrome Icon";
$lang["Add to Homescreen is a also a feature of Android Chrome."] = "Add to Homescreen is a also a feature of Android Chrome.";
$lang["Apply a slight drop shadow."] = "Apply a slight drop shadow.";
$lang["Windows 8 and 10 Icon"] = "Windows 8 and 10 Icon";
$lang["Windows 8 and 10 users can pin your web site on their start menu."] = "Windows 8 and 10 users can pin your web site on their desktop.";
$lang["Preferably, choose one suggested for the Windows Metro UI."] = "Preferably, choose one suggested for the Windows Metro UI.";
$lang["Use white logo, for transparent background logos."] = "Use white logo, for transparent background logos.";
$lang["macOS Safari Icon"] = "macOS Safari Icon";
$lang["Safari implements pinned tabs and takes advantage of the MacBook Touch Bar. This feature relies on an SVG icon."] = "Safari implements pinned tabs and takes advantage of the MacBook Touch Bar. This feature relies on an SVG icon.";
$lang["Pinned Tab, No Focus"] = "Pinned Tab, No Focus";
$lang["Pinned Tab, With Focus"] = "Pinned Tab, With Focus";
$lang["Touch Bar"] = "Touch Bar";
$lang["Theme Color"] = "Theme Color";

# SCRIPT: simple-datatables
$lang["entries per page"] = "entries per page";
$lang["Showing [start] to [end] of [rows] entries"] = "Showing [start] to [end] of [rows] entries";
$lang["No entries found"] = "No entries found";
