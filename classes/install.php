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

        if(is_file("config.ini")) {
            define("CONFIG", parse_ini_file(DIR_LOCAL . "config.ini"));

            if(CONFIG['install'] === "complete") {
                return true;
            }
        }

        if(!isset($_GET['step'])) $_GET['step'] = 1;
        if(!isset($_GET['valid'])) $_GET['valid'] = true;
        return false;
    }

    /**
     * Functioning back and next buttons.
     */
    public static function steps() {

        if(input::exists())
        {
            for($i = 0; $i < 4; $i++) {
                if(input::get("next-" . $i)) {
                    $_GET['step'] = $i + 1;
                }

                if(input::get("back-" . $i)) {
                    $_GET['step'] = $i - 1;
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
            if (input::get('next-2'))
            {
                $ini = fopen("config.ini", "w") or die("Permission denied");
                fwrite($ini, "host=" . $_POST['dbhost'] . PHP_EOL);
                fwrite($ini, "name=" . $_POST['dbname'] . PHP_EOL);
                fwrite($ini, "user=" . $_POST['dbuser'] . PHP_EOL);
                fwrite($ini, "pass=" . $_POST['dbpass'] . PHP_EOL);
                fwrite($ini, "charset=utf8" . PHP_EOL);
                fclose($ini);

                if(is_file(DIR_LOCAL . "config.ini")) {
                    define("CONFIG", parse_ini_file(DIR_LOCAL . "config.ini"));
                    database::install();
                }
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

                if($register->submit()) {
                    file_put_contents("config.ini", "install=complete", FILE_APPEND | LOCK_EX);
                }

            }
        }

    }

}