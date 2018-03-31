<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 29.
 * Time: 21:20
 */


if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

/* Define constants */
ini_set('display_errors', 0);
define("DIR", DIRECTORY_SEPARATOR);
define("DIR_LOCAL", __DIR__ . DIR);
define("DIR_TEMPLATE", DIR_LOCAL . "template" . DIR);
define("DIR_CLASSES", DIR_LOCAL . "classes" . DIR);
define("DIR_JS", DIR_LOCAL . "js" . DIR);
define("DIR_VENDOR", DIR_LOCAL . "vendor" . DIR);

/* Autoloader */
require DIR_VENDOR . "autoload.php";

/* Check if config.ini is exists */
if(is_file(DIR_LOCAL . "config.ini")) {
    define("CONFIG", parse_ini_file(DIR_LOCAL . "config.ini"));
}

/* Check installed status */
if(\classes\install::getInstalled())
{

    if (isset($_SESSION['login'])) {
        require DIR_TEMPLATE . "user.php";
    } else {
        require DIR_TEMPLATE . "login.php";
    }

}
else
{
    require DIR_TEMPLATE . "install.php";
}


