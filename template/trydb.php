<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 19:08
 * Description: This file is called by ajax to check the database connection
 */

try
{
    $host = $_POST["dbhost"];
    $name = $_POST["dbname"];
    $user = $_POST["dbuser"];
    $pass = $_POST["dbpass"];
    $char = 'utf8';

    $connection = new PDO("mysql:host={$host};dbname={$name};charset={$char};", $user, $pass);

    if (!$connection)
    {
        echo 0;
    }

    echo 1;
}
catch(PDOException $e)
{
    echo 0;
}