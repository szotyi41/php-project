<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 29.
 * Time: 21:20
 */

/* Define constants */
ini_set('display_errors', 1);
define("DIR", DIRECTORY_SEPARATOR);
define("DIR_LOCAL", __DIR__ . DIR);
define("DIR_TEMPLATE", DIR_LOCAL . "template" . DIR);
define("DIR_CLASSES", DIR_LOCAL . "classes" . DIR);
define("DIR_JS", DIR_LOCAL . "js" . DIR);
define("CONFIG", parse_ini_file(DIR_LOCAL . "config.ini"));

require DIR_LOCAL . "vendor" . DIR . "autoload.php";

$database = new \classes\database();
$connection = $database->getConnection();
//$database->install();

require DIR_TEMPLATE . "install-firstusers.php";