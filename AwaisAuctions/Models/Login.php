<?php
require_once 'Database.php';
require_once 'userLogin.php';

//require_once '../controllers/Login.php';
require_once '../Views/template/header.phtml';


class Login
{
    protected $_dbConnection, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbConnection = $this->_dbInstance->getDbConnection();
    }

        public function getAllUsers($name) {

            $sqlQuery = "SELECT * FROM users WHERE username = ?";     //Sql injection for security

            $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
            $statement->execute(array($name)); // execute the PDO statement

            $dataSet = [];
            while ($row = $statement->fetch()) {
                array_push($dataSet, new userModel($row));
            }
            return $dataSet;
        }



//    //public function login($email, $psw)
//        public function login()
//    {
//        $Username = $_POST['username'];
//        $Password = $_POST['password'];
//        echo $_REQUEST['username'];
//        echo $_REQUEST['password'];
//        $UsernameQuery = 'SELECT username FROM users WHERE username = $Username AND password = $Password';
//
//        if($UsernameQuery = true){
//            return "Sql Query Worked";
//        }
//
//        return $UsernameQuery;


}