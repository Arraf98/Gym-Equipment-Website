<?php

require 'db.php';
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

$select= "SELECT name, email from user WHERE email ='$email' and password='$password'";
$query = mysqli_query($conec,$select);
$data = mysqli_fetch_array($query);



//$data = mysqli_fetch_array($query);
$record = mysqli_num_rows($query);

$_SESSION['record'] = $record;

if($record){
    //echo "welcome";
    $_SESSION['user_name'] = $data['name'];
    setcookie("login","true", time()+(86400*30));
    header('location:../wanted.php');
}
else{
    
    $_SESSION['warn'] = "Wrong email or password";
    if(isset($_SESSION['error_count'])){
        echo $_SESSION['error_count']++;
    }
    else{
        $_SESSION['error_count']=0;
    }
    if($_SESSION['error_count']==3){
        setcookie("error","d",time()+600);
  
        $_SESSION['error_count'] = "";
    }
    header('location:../users.php');
}
?>