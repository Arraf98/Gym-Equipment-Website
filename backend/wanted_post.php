<?php
session_start();
require "db.php";



$s_name=$_POST['p_name'];
$s_id=$_POST['p_type'];
$s_email=$_POST['p_description'];
$s_pass=$_FILES['p_image'];
$s_price=$_POST['p_price'];
//$_GET['btn']
move_uploaded_file($_FILES['p_image']['tmp_name'],$_FILES['p_image']['name']);
$s_pass=$_FILES['p_image']['name'];
$sql="INSERT INTO products (name,type,description,price,image)
VALUES ('$s_name','$s_id','$s_email','$s_price','$s_pass')";
$upload = mysqli_query($conec,$sql);
//var_dump($_FILES['p_image']);

header('location: ../wanted.php');

?>