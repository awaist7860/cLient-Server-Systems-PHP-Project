<?php

class userLogin{
    protected $id, $username, $password;

    public function __construct($dbRow) {
        $this->id = $dbRow['id'];
        $this->username = $dbRow['username'];
        $this->password = $dbRow['password'];


    }
    public function getID() {
        return $this->id;
    }

    public function getUserName() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

}