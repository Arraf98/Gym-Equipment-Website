<?php
session_start();
$ans=$_POST['ans'];
if($ans==$_SESSION['result']){
    $_SESSION['human'] = "You are a Human";
    header('location:../home_page.php');
    
    
    
}else{
   
    $_SESSION['bot'] = "You are a bot";
    header('location:../home_page.php');
    
}
?>