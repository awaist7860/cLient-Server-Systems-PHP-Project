<?php

include_once 'Models/LoginPage.php';
include_once '../Models/Login.php';
include_once '../Views/template/header.phtml';

session_start();


$username = $_POST['username'];
$password = $_POST['password'];

//$userDataSet = new userDataSet();
//$Login = new Login();

$loginPage = new userLogin();

$result = $loginPage-> login($username, $password);

print_r($result);

if ($result) {
    header("Location: ../index.php");
} else {
    header("Location: ../index.php?error=Invalid details");
}

//$result = $loginPage->login($email, $pasw);








//
//$login = new Login();
//
//
//
//if($result)
//{
//    echo "welcome";
////    header("location: ../header.php");
//}
//
//else
//{
//    echo "Wrong details!, please retry!";
//}



