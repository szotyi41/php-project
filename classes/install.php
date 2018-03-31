<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 22:50
 */

namespace classes;


/**
 * Class install
 * @package classes
 */
class install
{

    /**
     * Check the app is installed already.
     * @return bool
     */
    public static function getInstalled() {
        if(!isset($_GET['step'])) $_GET['step'] = 1;
        if(!isset($_GET['valid'])) $_GET['valid'] = true;
        return false;
        //return (is_file("config.ini")) or ($_GET['step'] < 4);*/
    }

    /**
     * Functioning back and next buttons.
     */
    public static function steps() {

        if(input::exists())
        {
            for($i = 0; $i < 4; $i++) {
                if(input::get("next-" . $i)) {
                    if($_GET['valid'] === true) $_GET['step'] = $i + 1;
                }

                if(input::get("back-" . $i)) {
                    if($_GET['valid'] === true) $_GET['step'] = $i - 1;
                }
            }
        }

    }

    /**
     * Save the database config, then install it.
     */
    public static function database() {

        if(input::exists())
        {
            if ((input::get('next-2')) and (input::get('dbhost')) and (input::get('dbname')) and (input::get('dbuser')) and (input::get('dbpass')))
            {
                $ini = fopen("config.ini", "w");
                fwrite($ini, "host=" . $_POST['dbhost'] . PHP_EOL);
                fwrite($ini, "name=" . $_POST['dbname'] . PHP_EOL);
                fwrite($ini, "user=" . $_POST['dbuser'] . PHP_EOL);
                fwrite($ini, "pass=" . $_POST['dbpass'] . PHP_EOL);
                fwrite($ini, "charset=utf8");
                fclose($ini);

                if(!defined("CONFIG")) {
                    define("CONFIG", parse_ini_file(DIR_LOCAL . "config.ini"));
                }

                database::install();
            }
        }
    }

    /**
     * Register the first user.
     */
    public static function register() {

        if(input::exists())
        {
            if (input::get('next-3'))
            {
                $register = new register();
                $register->setName($_POST["name"]);
                $register->setMail($_POST["mail"]);
                $register->setPassword($_POST["password-1"], $_POST['password-2']);
                $register->setAdmin(1);
                $register->submit();
            }
        }

    }

}