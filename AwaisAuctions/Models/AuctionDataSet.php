<?php

require_once ('Models/Database.php');
require_once ('Models/AuctionData.php');

class AuctionDataSet
{
    protected $_dbHandle, $_dbInstance;

    public function __construct() {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllStudents() {
        $sqlQuery = 'SELECT * FROM users';

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new AuctionData($row);
        }
        return $dataSet;
        //return $sqlQuery;

        //echo  $dataSet;
    }

    public function getDatSetAndSqlQuery(){
        $this->fetchAllStudents();
    }



}