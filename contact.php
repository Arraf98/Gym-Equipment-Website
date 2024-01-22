<?php

session_start();
/*if($_SERVER['REQUEST_METHOD']=="POST"){
    header('location:contact.php');
}
else{
    header('location:users.php');
}*/
/*if(isset($_SESSION['user_name'])){
    //header('location:contact.php');
}

else{
    header('location:users.php');
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/web.css">
    <title>Contact</title>
</head>
<body>

    <nav >
          
       
        <div id="logo_text">Home gym equipment<img src="images/HGE.png"></div>
        
        
       <div id="menu">
        <div class="dropdown">
            <a href="home_page.html">Home Page</a>
        </div>
        
        <div class="dropdown">
            <a href="FAQ.html">Information</a>
            
        </div>

        <div class="dropdown">
            <a href="Member_Area.html">Featured</a>
            
        </div>

        <div class="dropdown">
            <a href="Community_group.html">gallery</a>
            
        </div>
    
        <div class="dropdown">
            <a href="Latest_place_fly.html">Workshop</a>
        </div>

        <div class="dropdown">
            <a href="users.html">wanted</a>

        </div>
        <div class="dropdown">
            <a href="#">Contact</a>
        </div>
        
    </div>

        
  
    <div class="Searchbox">
        <input placeholder="Search..." id="sbar" type="text"><br/>
        <button type="button" onclick="searchText()" id="sbtn">search</button>
    </div>

    </nav>

<div class="contact_wrapper">
    <div class="contact_form">
        <form action="backend/contact_post.php" method="post">
        
        
            <div class="form3"> 
                <h2> Contact us</h2>          
                <div class="input2">
                    <input type="email" name="email" class="inputbox1" placeholder="Your email">
                </div>
                <div class="input2"> 
                    <input type="text" name="phone" class="inputbox1" placeholder="Your phone">
                </div>
                <div class="input2"> 
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
                </div>
                <div class="button3"><button type="submit" name="btn3">Submit</button></div>
                
                
    
            </div>
            
            </form><div id="" style="color:white;">
               <?php

                if(isset($_SESSION['ok'])){
                    echo $_SESSION['ok'];
                    
                    
                }
                if(isset($_SESSION['phone'])){
                    echo $_SESSION['phone'];
                   
                }
                if(isset($_SESSION['em'])){
                    echo $_SESSION['em'];
                    
                }

                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    
                }
                session_unset();
               ?>
                </div>
            <span><a href="policy">For privacy policy please click here!</a></span>
            <a id="logout" href='backend/logout.php'>logout</a>
    </div>
</div>




       
    <footer id="contact">
                
        
    <div class="lowerfooter">
            <div class="text">
                <ul>
                    <h2>services</h2><br>
                    <li>Equipment maintenance</li><br>
                    <li>payment plans</li><br>
                    <li>customer support</li><br>
                </ul>
            </div>
            <div class="text">
                <ul>
                    <h2>about us</h2><br>
                    <p>Home gym equipment provides efficinet equipment delivery and also provides wearable
                        technology with essential information you need.
                    </p>
                </ul>
            </div>
            <div class="text">
                <ul>
                    <h2>contact</h2><br>
                    <li>location:Uk London</li><br>
                    <li>email:homegym@gym.ac</li><br>
                    <li>phone:+4423211</li><br>
                    <li>customer support</li><br>
                </ul>
            </div>
        </div>
        <hr>
        <div class="social">
            <span>Follow us on social media</span>
            <img src="images/facebook.png" alt="facebook">
            <img src="images/youtube.png" alt="youtube">
            <img src="images/instagram.png" alt="instagram"> 
        </div>
      
    
        <div class="copyright">
            &copy; copyright 2021 Home Gym Equipment 2021 All rights reserved
        </div>
    </footer>

    
</body>
</html>