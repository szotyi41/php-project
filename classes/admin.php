<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 16:59
 */

namespace classes;

use PDO;

/**
 * Class admin
 * @package classes
 */
class admin
{
    /**
     * Query all of register details.
     * @return array
     */
    public static function getAllUsers() {
        $rows = array(array('id'=>'ID', 'name'=>'Username', 'mail'=>'E-mail', 'registered'=>'Registered at', 'lastloggedin'=>'Last logged in', 'admin'=>'Permission', 'remove'=>'Remove'));
        $sql = "SELECT id, name, mail, registered, lastloggedin, admin FROM buza_peter_Users LIMIT 30;";
        $db = database::getConnection();
        $result = $db->query($sql);
        return array_merge($rows, $result->fetchAll(PDO::FETCH_ASSOC));
    }

    /**
     * Set the register of permissions by id.
     * @param $id
     * @param $permission (true-false)
     */
    public static function setPermission($id, $permission) {
        $sql = "UPDATE buza_peter_Users SET admin = '$permission' WHERE id = '$id';";
        $db = database::getConnection();
        return $db->exec($sql);
    }

    /**
     * Remove user by id.
     * @param $id
     */
    public static function removeUser($id) {
        $sql = "DELETE FROM buza_peter_Users WHERE id = '$id';";
        $db = database::getConnection();
        return $db->exec($sql);
    }
}