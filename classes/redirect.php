<?php

namespace classes;

/**
 * Class redirect
 * @package classes
 */
abstract class redirect
{
    /**
     * This method can redirect you
     * @param null $location
     */
    public static function to($location = null)
    {
        if($location)
        {
            if(is_numeric($location))
            {
                switch ($location) {
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include 'template/error.php';
                        exit();
                        break;
                }
            }
            header('Location: '.$location);
            exit();
        }
    }
}