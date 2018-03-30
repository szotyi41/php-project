<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 1:11
 */

namespace classes;

use PDO;

class login
{

    private $data;
    private $id;
    private $name;
    private $password;

    function __construct()
    {
        $this->name = $_POST['name'];
        $this->password = sha1($_POST['password']);
    }

    /* Check your username and password validation */
    public function check() {
        $sql = "SELECT id, name, password, mail, registered, lastloggedin, admin FROM buza_peter_Users WHERE name='$this->name' AND password='$this->password' LIMIT 1;";
        $db = database::getConnection();
        $result = $db->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);

        if(empty($row)) {
            echo "Wrong username or password";
            return null;
        }

        $this->data = $row;
        $this->id = $row['id'];
        $this->lastlogin();
        $this->setSession();
        return true;
    }

    /* Update your last logged in datetime to now */
    public function lastlogin() {
        $sql = "UPDATE buza_peter_Users SET lastloggedin = now() WHERE id = '$this->id';";
        $db = database::getConnection();
        $db->exec($sql);
    }

    /* Log out and redirect */
    public static function logout() {

        session_unset();

        redirect::to('index.php');
    }

    /* Save your logged in status to session */
    public function setSession() {

        session_unset();

        $_SESSION = array(
            'login' => true,
            'id' => $this->data['id'],
            'name' => $this->data['name'],
            'mail' => $this->data['mail'],
            'registered' => $this->data['registered'],
            'lastloggedin' => $this->data['lastloggedin'],
            'admin' => $this->data['admin']
        );
    }

}