<?php

require_once ('../Models/User.php');
require_once ('../Models/Database.php');


class UserDataSet
{
 protected $_dbHandle;
 protected $_dbInstance;

 //userdataset constructor
    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    //Get all the users from the DBS
 public function fetchAllUsers()
 {
     $sqlQuery = 'SELECT * FROM users';

     echo $sqlQuery;

     $statement =$this->_dbHandle->prepare($sqlQuery);
     $statement->execute();

     $dataSet =[];
     while ($row=$statement->fetch())
     {
         $dataSet[] = new User($row);
     }
   return $dataSet;

 }

 //Put a user inside the DBS
 public function addUser($username,$password)
 {
     $sqlQuery = "INSERT INTO users (username,password) VALUES ('$username','$password')";

     //echo $sqlQuery; //helpful for debugging

     $statement =$this->_dbHandle->prepare($sqlQuery);
     $statement->execute();

     $dataSet =[];
     while ($row=$statement->fetch())
     {
         $dataSet[] = new User($row);
     }
     return $dataSet;
 }

    public function login($username,$password)
    {
        $sqlQuery = "SELECT username,password FROM users WHERE username='$username' AND password='$password'";

        $statement =$this->_dbHandle->prepare($sqlQuery);
        $statement->execute();

        $dataSet =[];
        while ($row=$statement->fetch())
        {
            $dataSet[] = new User($row);
        }
        return $dataSet;
    }


}