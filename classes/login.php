<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 1:11
 */

namespace classes;

class login
{
    public function get() {
        $sql = "SELECT name, password FROM buza_peter_Users WHERE name='$name' AND password='$password' LIMIT 1;";
        $db = database::getConnection();
        $result = $db->query($sql);

        if(!empty($result)) {
            $_SESSION['user'] = json_encode($result);
            echo $result['name'];
        }
    }
}