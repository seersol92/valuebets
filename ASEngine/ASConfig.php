<?php

//Timezone
date_default_timezone_set('UTC');

//WEBSITE

define('WEBSITE_NAME', 'valuebets');
define('WEBSITE_DOMAIN', 'http://localhost/2018/October/valuebets/');

// It can be the same as domain (if script is placed on website's root folder)
// or it can contain path that include subfolders, if script is located in
//some subfolder and not in root folder.
define('SCRIPT_URL', 'http://localhost/2018/October/valuebets/');

//DATABASE CONFIGURATION
define('DB_HOST', 'localhost');
define('DB_TYPE', 'mysql');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'login');

//SESSION CONFIGURATION
define('SESSION_SECURE', false);
define('SESSION_HTTP_ONLY', true);
define('SESSION_USE_ONLY_COOKIES', true);

//LOGIN CONFIGURATION
define('LOGIN_MAX_LOGIN_ATTEMPTS', 20);
define('LOGIN_FINGERPRINT', true);
define('SUCCESS_LOGIN_REDIRECT', serialize(array('default' => "index.php")));

//PASSWORD CONFIGURATION
define('PASSWORD_ENCRYPTION', "bcrypt"); //available values: "sha512", "bcrypt"
define('PASSWORD_BCRYPT_COST', "13");
define('PASSWORD_SHA512_ITERATIONS', 25000);
define('PASSWORD_SALT', "wSgbhDz5gNIc3LHeqd8xTD"); //22 characters to be appended on first 7 characters that will be generated using PASSWORD_ info above
define('PASSWORD_RESET_KEY_LIFE', 60);

// REGISTRATION CONFIGURATION
define('MAIL_CONFIRMATION_REQUIRED', true);
define('REGISTER_CONFIRM', SCRIPT_URL."confirm.php");
define('REGISTER_PASSWORD_RESET', SCRIPT_URL.'passwordreset.php');

// EMAIL SENDING CONFIGURATION
// Available MAILER options are 'mail' for php mail() and 'smtp' for using SMTP server for sending emails
define('MAILER', "smtp");
define('SMTP_HOST', "smtp.mailtrap.io");
define('SMTP_PORT', 465);
define('SMTP_USERNAME', "2129acbf9ade71");
define('SMTP_PASSWORD', "f3d4b2e755a3bb");
define('SMTP_ENCRYPTION', "null");

define('MAIL_FROM_NAME', "valuebets");
define('MAIL_FROM_EMAIL', "noreply@seersol.com");

// SOCIAL LOGIN CONFIGURATION

define('SOCIAL_CALLBACK_URI', SCRIPT_URL."socialauth_callback.php");

// GOOGLE
define('GOOGLE_ENABLED', true);
define('GOOGLE_ID', "");
define('GOOGLE_SECRET', "");

// FACEBOOK
define('FACEBOOK_ENABLED', true);
define('FACEBOOK_ID', "1932067973737435");
define('FACEBOOK_SECRET', "a345c54f5d8ab2163945a6432668d016");

// TWITTER
define('TWITTER_ENABLED', true);
define('TWITTER_KEY', "");
define('TWITTER_SECRET', "");

// TRANSLATION
define('DEFAULT_LANGUAGE', 'en');
