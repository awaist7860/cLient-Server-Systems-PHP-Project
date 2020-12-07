<?php

require_once 'Database.php';
require_once 'Login.php';

class LoginPage
{
    protected $_dbConnection, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbConnection = $this->_dbInstance->getDbConnection();
    }

    public function login($username, $password)
    {
        $userDataset = new userDataSet();
        $userData = $userDataset->fetchUsers($username);

        if (isset($userData[0]) && password_verify($password, $userData[0]->getPassword())) {
            $_SESSION["userID"] = $userData[0]->getID();
            $_SESSION["username"] = $username;
            return true;
        }
        return false;
    }
}