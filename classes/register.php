<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 1:11
 */

namespace classes;

use PDO;

/**
 * Class login
 * @package classes
 */
class register
{
    private $name;
    private $password;
    private $mail;
    private $admin;
    private $valid;

    function __construct()
    {
        $this->admin = false;
        $this->valid = true;
    }

    /**
     * Submit the registration.
     * @return bool|null
     */
    public function submit() {

        $sql = "SELECT name, mail FROM buza_peter_Users WHERE name = '$this->name' OR mail = '$this->mail'";
        $db = database::getConnection();
        $result = $db->query($sql);

        if($result->rowCount() > 0)
        {
            echo "<p class='error-text'>This username or email is already registered.</p>";
            $_GET['step'] = 3;
            return false;
        }
        else
        {

            if ($this->valid === true)
            {
                $sql = "INSERT INTO buza_peter_Users (name, password, mail, admin) VALUES ('$this->name', '$this->password', '$this->mail', '$this->admin')";
                $db = database::getConnection();
                $db->exec($sql);

                echo "<p class='access-text'>You are registered now.</p>";
                return true;
            }

        }

        return false;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        if(input::validName($name)) {
            $this->name = $name;
        } else {
            echo "<p class='error-text'>Username must be at least 6 characters, and only letters and numbers.</p>";
            $this->valid = false;
        }
    }

    /**
     * @param mixed $password
     */
    public function setPassword($pass1, $pass2)
    {
        if(input::validPaswords($pass1, $pass2)) {
            $this->password = sha1($pass1);
        } else {
            echo "<p class='error-text'>Password must be same, and minimum 6 characters.</p>";
            $this->valid = false;
        }
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        if(input::validMail($mail)) {
            $this->mail = $mail;
        } else {
            echo "<p class='error-text'>Incorrect email format.</p>";
            $this->valid = false;
        }
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

}