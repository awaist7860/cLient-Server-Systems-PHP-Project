<?php

class Database {
    /**
     * @var Database
     */
    protected static $_dbInstance = null;

    /**
     * @var PDO
     */
    protected $_dbHandle;

    /**
     * @return Database
     */
    public static function getInstance() {
        $username ='sgb849';
        //$password = 'f1m9mHBhjktiNqf';//Old password
        $password = 'f1m9mHBhjktiNqf';
        $host = 'poseidon.salford.ac.uk';
        $dbName = 'sgb849';

        //Local DB Details
        //$username ='root';
        //$password = 'f1m9mHBhjktiNqf';//Old password
        //$password = '786786';
        //$host = '127.0.0.1';
        //$dbName = 'Local root';

        //$host="127.0.0.1";
        //$port=3306;
        //$socket="";
        //$user="root";
        //$password="786786";
        $dbname="";

        //$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        //or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


        if(self::$_dbInstance === null) { //checks if the PDO exists
            // creates new instance if not, sending in connection info
            self::$_dbInstance = new self($username, $password, $host, $dbName);
        }

        return self::$_dbInstance;
    }


    /**
     * @param $username
     * @param $password
     * @param $host
     * @param $database
     */
    private function __construct($username, $password, $host, $database) {
        try {
            $this->_dbHandle = new PDO("mysql:host=$host;dbname=$database",  $username, $password); // creates the database handle with connection info
            //$this->_dbHandle = new PDO('mysql:host=' . $host . ';dbname=' . $database,  $username, $password); // creates the database handle with connection info

        }
        catch (PDOException $e) { // catch any failure to connect to the database
            echo $e->getMessage();
        }
    }

    /**
     * @return PDO
     */
    public function getdbConnection() {
        return $this->_dbHandle; // returns the PDO handle to be used                                        elsewhere
    }

    public function __destruct() {
        $this->_dbHandle = null; // destroys the PDO handle when nolonger needed                                        longer needed
    }
}
