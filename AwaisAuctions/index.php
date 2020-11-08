<?php

$view = new stdClass();
$view->pageTitle = 'Homepage';
//Move as much php code into the php file
//require_once(__DIR__ . '/../Models/AuctionDataSet.php');
require_once(__DIR__ . '/Models/AuctionDataSet.php');//This is mvc
$AuctionDataSet1 = (new AuctionDataSet())->fetchAllStudents();
require_once('Views/index.phtml');
