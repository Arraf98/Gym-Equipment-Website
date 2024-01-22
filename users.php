<?php

session_start();


    
   /* if(isset($_COOKIE["user"])){
        echo "<strong>"."Cookie information:".$_COOKIE["user"]."</strong>";
    }*/



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link rel="stylesheet" href="css/web.css">
</head>
<body>

    <!--navigation bar-->
    <nav id="nav1">
          
       
        <span id="logo_text">Home gym equipment</span>
        
        
       <div id="menu">
       <div class="dropdown">
            <a href="home_page.php">Home Page</a>
        </div>
        
        <div class="dropdown">
            <a href="Information.php">Information</a>
            
        </div>

        <div class="dropdown">
            <a href="featured.php">Featured</a>
            
        </div>

        <div class="dropdown">
            <a href="gallery.php">gallery</a>
            
        </div>
    
        <div class="dropdown">
            <a href="workshop.php">Workshop</a>
        </div>

        <div class="dropdown">
            <a href="wanted.php">wanted</a>

        </div>
        <div class="dropdown">
            <a href="contact.php">Contacts</a>
        </div>
        
    </div>

        
  
    <div class="Searchbox">
        <input placeholder="Search..." id="sbar" type="text"><br/>
        <button type="button" onclick="searchText()" id="sbtn">search</button>
    </div>

    </nav>

    <!--Signup form-->

   <div class="reg_body">
    <div class="formcontain">
        <form action="backend/signup_post.php" method="post">
        
        
            <div class="form"> 
                <h2>Registration form</h2>
                <div class="input1">
                    <input type="text" name="name" class="inputbox1" placeholder="Your Name" value="<?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}?>">
                    <?php 
                        if(isset($_SESSION['name'])){
                            echo $_SESSION['name'];
                            
                           
                           
                        }
                       
                    ?>
                </div>
                
                <div class="input2">
                    <input type="email" name="email" class="inputbox1" placeholder="Your email" value="<?php if(isset($_SESSION['user_email'])){echo $_SESSION['user_email'];}?>">
                    <?php 
                        if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                            
                             
                            if(isset($_SESSION['check'])){
                                echo $_SESSION['check'];
                                
                            }
                          
                            
                        }
                        
                    ?>
                </div>
                <div class="input3"> 
                    <input type="password" name="password" class="inputbox1" placeholder="Your password">
                    <?php 
                        if(isset($_SESSION['pass'])){
                            echo $_SESSION['pass'];
                            
                            
                        }

                        if(isset($_SESSION['length'])){
                            echo $_SESSION['length'];
                            
                            
                        }
                       
                    ?>
                </div>
                <div class="input4">
                    <input type="text" name="age" class="inputbox1" placeholder="age" value="<?php if(isset($_SESSION['user_age'])){echo $_SESSION['user_age'];}?>">
                    <?php 
                        if(isset($_SESSION['age'])){
                            echo $_SESSION['age'];
                            session_unset();
                            
                        }
                        
                    ?>
                </div>
                <div class="input5">
                    <input type="text" name="phone" class="inputbox1" placeholder="Phone number" value="<?php if(isset($_SESSION['user_phone'])){echo $_SESSION['user_phone'];}?>">
                    <?php 
                        if(isset($_SESSION['phone'])){
                            echo $_SESSION['phone'];
                            
                            
                            
                        }
                        
                    ?>
                </div>
               
                <span>Gender</span>
                <div class="m">Male:<input id="male" type="radio" name="gender" value="M"></div>
                <div class="f">Female:<input id="female" type="radio" name="gender" value="F"></div>
                <?php 
                       if(isset($_SESSION['gender'])){
                            echo $_SESSION['gender'];
                            
                        }
                        
                ?>
              
    
            </div>
            <div class="button"><button type="submit" name="btn1">Signup</button></div><br><br>
            
           
        </form> 
    </div>
   </div>
                        
   <!--Login form-->

   <div class="logcontain">
    <form action="backend/login_post.php" method="post">
    
    
        <div class="form2"> 
            <h2> Account login</h2>          
            <div class="input2">
                <input type="email" name="email" class="inputbox1" placeholder="Your email">
            </div>
            <div class="input2"> 
                <input type="password" name="password" class="inputbox1" placeholder="Your password">
            </div>
            
            <?php
            
                if(isset($_SESSION['warn'])){
                    echo $_SESSION['warn']."  ";
                }

                if(isset($_SESSION['error_count'])){
                    echo"attempt: ".$_SESSION['error_count'];
                    
                }
                

                if(isset($_COOKIE['error'])){
                    echo "wait for 10 mins";
                    
                }
                else{
                    echo '<div class="button2"><button type="submit" name="btn2">Log in</button></div>';
                }
            ?>
        

        </div>
        
        </form>
    </div>

   <!--Footer design-->
   <?php include "footer.php";?>

</body>
</html>