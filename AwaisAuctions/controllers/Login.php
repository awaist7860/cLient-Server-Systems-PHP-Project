<?php
<<<<<<< HEAD
//
////session_start();
//
////include_once '../Models/UserDataSet.php';
////include_once '../Views/template/header.phtml';
//require_once ('../Models/UserDataSet.php');
//
////session_start();
//
//function clean($sanString)
//{
//    $sanString = stripslashes($sanString);
//    $sanString = strip_tags($sanString);
//    $sanString = htmlentities($sanString);
//    return $sanString;
//}
//
//$view = new stdClass();
//$view->pageTitle ='Login';
////$username = "";
//$view->message = "";
//
//
//if (isset($_POST['login'])) {
//    $username = clean($_POST['username']);
//    $password = md5($_POST['password']);
//    $userDataSet = new UserDataSet();
//    $view->userDataSet = $userDataSet->login($username, $password);
//    $countUserDataSet = count($view->userDataSet);
//
//    if ($countUserDataSet == 1) {
//        session_start();
//        $_SESSION['username'] = $username;
//        $view->message = "you have logged in successfully ";
//        header("location:../index.php?you have logged in");
//        die();
//    } else {
//        $view->message = "Invalid password and username";
//    }
//}
//
//require_once ('../Views/index.phtml');
//
//
////$username = $_POST['username'];
////$password = $_POST['password'];
////
////$userDataSet = new userDataSet();
////
////$loginModel = new LoginModel();
////$result = $loginModel->login($username, $password);
////print_r($result);
////$countUsers = count($result);
////
////if($countUsers == 1)
//////if($result)
////{
////    header("Location: ../index.php");
////}
////
////else
////{
////    header("Location: ../index.php?error=Invalid details");
////}
//
////$Login = new Login();
//
////$loginPage = new userLogin();
////$loginModel = new LoginModel();
////
////$result = $loginPage-> login($username, $password);
////
////print_r($result);
////
////if ($result) {
////    header("Location: ../index.php");
////} else {
////    header("Location: ../index.php?error=Invalid details");
////}
//
////$result = $loginPage->login($email, $pasw);
//
//
//
//
//
//
//
//
////
////$login = new Login();
////
////
////
////if($result)
////{
////    echo "welcome";
//////    header("location: ../header.php");
////}
////
////else
////{
////    echo "Wrong details!, please retry!";
////}
//
//
//
=======
include_once '../Models/Login.php';
include_once '../Views/template/header.phtml';


$email = $_POST['username'];
$pasw = $_POST['password'];
$login = new Login();

$result = $login->login($email, $pasw);

if($result)
{
    echo "welcome";
//    header("location: ../header.php");
}

else
{
    echo "Wrong details!, please retry!";
}
>>>>>>> parent of 3a58755... Login Button Half Works
