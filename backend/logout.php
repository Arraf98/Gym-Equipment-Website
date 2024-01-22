<?php

session_start();

session_destroy();
setcookie("login","true", time()-10 );
header('location: ../users.php');

?>