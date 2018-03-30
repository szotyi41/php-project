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
     * Return post or get variables
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
}