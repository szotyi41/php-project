<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 16:59
 */

namespace classes;

use PDO;

class admin
{

    public static function getAllUsers() {
        $rows = array(array('id'=>'ID', 'name'=>'Username', 'mail'=>'E-mail', 'registered'=>'Registered at', 'lastloggedin'=>'Last logged in', 'admin'=>'Permission'));
        $sql = "SELECT id, name, mail, registered, lastloggedin, admin FROM buza_peter_Users LIMIT 30;";
        $db = database::getConnection();
        $result = $db->query($sql);
        return array_merge($rows, $result->fetchAll(PDO::FETCH_ASSOC));
    }
}