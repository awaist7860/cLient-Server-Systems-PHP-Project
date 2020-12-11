<?php
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
