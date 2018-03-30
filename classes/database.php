<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 29.
 * Time: 21:24
 */

namespace classes;

use PDO;

/**
 * Class database
 * @package classes
 */
class database
{
    static public $connection;

    /**
     * Get the database connection from config file and create if not exists
     * @return null|PDO
     */
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
                $connection = new PDO("mysql:host={$host};dbname={$name};charset={$char};", $user, $pass);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                $_POST["error"] = $e;
                include DIR_TEMPLATE . "error.php";
            }
        }

        return $connection;
    }

    /**
     * Create all of tables what are needed.
     */
    public function install() {
        $sql = 'CREATE TABLE IF NOT EXISTS buza_peter_Users (id INT NOT NULL AUTO_INCREMENT , name VARCHAR(30) NOT NULL , password CHAR(40) NOT NULL , mail VARCHAR(50) NOT NULL , registered TIMESTAMP NOT NULL , lastloggedin DATE NULL , admin BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
        $db = $this->getConnection();
        $db->exec($sql);

        echo "All tables just created in your database.";
    }
}