<?php
session_start();
include "nav.php";

if(isset($_SESSION['user_name'])){
    //header('location:contact.php');
}

else{
    header('location:users.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/web.css">
    <title>Wanted</title>
</head>
<body id="wanted">
    <h1 id="up_header">Upload second hand product to database</h1><br><br><br>
    <?php echo "<h1>".$_SESSION['user_name']."</h1>";?>
    <div id="upload_wrapper">
        <form action="backend/wanted_post.php" method="post" enctype="multipart/form-data">

            
            <table id="upload" border="1px">
            <tr>
                <td>Name:</td>
                <td> <input type="text"   name="p_name" ></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><input type="text" name="p_type"></td>
            </tr>
            <tr>
                <td>Description:	</td>
                <td><input type="text"  name="p_description"></td>
            </tr>
            <tr>
                <td>image:</td>
                <td><input type="file" name="p_image"></td>
            </tr>
            <tr>
                <tr>
                    <td>price:	</td>
                    <td><input type="text"  name="p_price"></td>
                </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="btn">product upload</button></td>
            </tr>

            </table>
            </form>
             
        </div><br>
            <a id="searchlink" href="search.php">product search</a><br><br>
            <a id="logout" href='backend/logout.php'>logout</a>
            
        <?php

        echo "<br><br><br>";
        include "footer.php";
        ?>
</body>
</html>


