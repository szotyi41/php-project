<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 29.
 * Time: 21:24
 */

namespace classes;

use PDO;

class database
{
    static public $connection;

    /* Get the database connection from config file and create if not exists */
    public static function getConnection() {

        if(!isset(self::$connection))
        {
            $connection = null;
            $host = CONFIG["host"];
            $name = CONFIG["name"];
            $user = CONFIG["user"];
            $pass = CONFIG["pass"];
            $char = CONFIG["charset"];

            try {
                $connection = new PDO("mysql:host={$host};dbname={$name};charset={$char};", "root", "");
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo "Something went wrong when you connect to database.";
            }
        }

        return $connection;
    }

    /* Create all of tables what are needed. */
    public function install() {
        $sql = 'CREATE TABLE IF NOT EXISTS buza_peter_Users ( id INT NOT NULL AUTO_INCREMENT , name VARCHAR(30) NOT NULL , password VARCHAR(30) NOT NULL , mail VARCHAR(50) NOT NULL , registered TIMESTAMP NOT NULL , lastloggedin DATE NULL , admin BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
        $db = $this->getConnection();
        $db->exec($sql);

        echo "All tables just created in your database.";
    }
}