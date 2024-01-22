<?php
require 'db.php';
session_start();







/*registration data */
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash = md5($password);
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];


$selects= "SELECT email from user WHERE email ='$email'";
$query = mysqli_query($conec,$selects);
$records = mysqli_num_rows($query);

/*session data */


$_SESSION['user_name'] = $name;
/*
$_SESSION['user_email'] = $email;
$_SESSION['user_age'] = $age;
$_SESSION['user_phone'] = $phone;*/

if(empty($name)){
    //echo "name is empty";
    $_SESSION['name'] = "name is empty";
    header('location:../users.php');
    
    
}

if(empty($email)){
   // echo "email is empty";
   $_SESSION['email'] = "email is empty";
   header('location:../users.php');
   
}

if(empty($password)){
    //echo "password must be given";
    $_SESSION['pass'] = "password must be given";
    header('location:users.php');
    
}



if(empty($age)){
    $_SESSION['age'] = "age is required";
    header('location:users.php');
    
}

if(empty($gender)){
    $_SESSION['gender'] = "gender is required";
    header('location:../users.php');
    
}

if(strlen($password)<4){
    $_SESSION['length'] == "password must be at least four character";
    header('location:../users.php');
}



else{

   
   /* if($records>0){
        $_SESSION['check'] = "this email is taken";
        header('location:../users.php');
    }*/
    
    
        $insert = "INSERT INTO user(id, name, email, password, age, phone, gender) VALUES ('','$name','$email','$hash','$age','$phone','$gender')";
        mysqli_query($conec,$insert);
        header('location:../wanted.php');

        //echo $name;
        
    
    
}

?>