<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 13:31
 */

namespace classes;

/**
 * Class input
 * You can get check your get and post variables, and check the text validations.
 * @package classes
 */
abstract class input {

    /**
     * Check if post or get declarated already
     * @param string $type
     * @return bool
     */
    public static function exists($type = 'POST')
    {
        switch ($type) {
            case 'POST':
                return (!empty($_POST)) ? true : false;
                break;
            case 'get':
                return (!empty($_GET)) ? true : false;
                break;
            default:
                return false;
                break;
        }
    }

    /**
     * Return post or get variables.
     * @param $item
     * @return string
     */
    public static function get($item)
    {
        if(isset($_POST[$item]))
        {
            return $_POST[$item];
        }
        elseif (isset($_GET[$item])) {
            return $_GET[$item];
        }
        return '';
    }

    /**
     * Check name validation.
     * @param $string
     * @return null
     */
    public static function validName($name) {

        if ((strlen($name) < 6) or (!preg_match("/^[a-z][a-z0-9_]*[a-z0-9]$/", $name)))
        {
            return null;
        }

        return $name;
    }

    /**
     * Check mail validation.
     * @param $string
     * @return null
     */
    public static function validMail($mail)
    {
        if ((strlen($mail) < 6) or (!filter_var($mail, FILTER_VALIDATE_EMAIL)))
        {
            return null;
        }

        return $mail;
    }

    /**
     * Check the two password is same, and validation.
     * @param $pass1
     * @param $pass2
     * @return null
     */
    public static function validPaswords($pass1, $pass2)
    {
        if ((strlen($pass1) < 6 ) or ($pass1 !== $pass2))
        {
            return null;
        }

        return $pass1;
    }

}