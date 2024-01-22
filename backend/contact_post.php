<?php

session_start();
require 'db.php';
$em = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if(empty($em)){
    $_SESSION['em'] = "give your email";
    header('location:contact.php');
    die();
}

if(empty($phone)){
    $_SESSION['phone'] = "give your phone number";
    header('location:contact.php');
    die();

}


if(empty($message)){
    $_SESSION['msg'] = "enter your message";
    header('location:contact.php');
    die();
}

else{
    $sql = "INSERT INTO `contacts`(`id`, `email`, `phone`, `message`) VALUES ('','$em','$phone','$message')";
    mysqli_query($conec,$sql);
    $_SESSION['ok'] = "we will contact you";
    header('location:../contact.php');
}



?>