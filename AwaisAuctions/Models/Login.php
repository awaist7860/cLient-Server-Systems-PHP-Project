<?php
require_once 'Database.php';
require_once '../controllers/Login.php';
require_once '../Views/template/header.phtml';


class Login
{
    protected $_dbConnection, $_dbInstance;


    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbConnection = $this->_dbInstance->getDbConnection();
    }



    //public function login($email, $psw)
        public function login()
    {
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        echo $_REQUEST['username'];
        echo $_REQUEST['password'];
        $UsernameQuery = 'SELECT username FROM users WHERE username = $Username AND password = $Password';

        return $UsernameQuery;


    }

}