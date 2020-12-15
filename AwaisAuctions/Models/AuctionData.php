<?php


class AuctionData
{
    protected $_id,  $_userName, $_passwords;

    public function __construct($dbRow) {
        $this->_id = $dbRow['id'];
        $this->_userName = $dbRow['username'];
        $this->_passwords = $dbRow['password'];

    }

    public function getUserId() {
        return $this->_id;
    }

    public function getUsername() {
        return $this->_userName;
    }

    public function getPassword() {
        return $this->_passwords;
    }
}