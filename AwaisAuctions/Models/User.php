<?php
class User
{
 protected $id;
 protected $username;
 protected $password;

    /**
     * User constructor.
     * @param $dbRow
     */
    public function __construct($dbRow)
    {
        $this->id=$dbRow['id'];
        $this->username = $dbRow['username'];
        $this->password = $dbRow['password'];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
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
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function validate($username,$password)
    {
        if(empty($username) && empty($password))
        {
            echo "<p> Your username and password boxes are empty</p>";
        }
        elseif (!empty($username) && !empty($password))
        {
            echo "<p>You have filled in your details suceesfully</p>";
        }
        else
        {
            return true;
        }
    }




}