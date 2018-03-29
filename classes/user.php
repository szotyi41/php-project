<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 29.
 * Time: 23:19
 */

namespace classes;


class user
{
    private $name;
    private $password;
    private $mail;
    private $admin;

    private function create() {
        $sql = "INSERT INTO buza_peter_Users (name, password, mail, admin) VALUES ('$this->name', '$this->password', '$this->mail', $this->admin);";
        $db = database::getConnection();
        $db->exec($sql);

        echo "User created.";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }
}