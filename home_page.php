<?php

session_start();
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/web.css">
</head>
<body>

    <!--navigation bar-->

    

    
        <!--main body-->
        <div class="body">
        <div id="slideshow">  
            <div id="up">
                <div>Home gym equipment</div>
            </div>
        </div>
        <div class="start">
            <div class="intro">
                <h1>Build gym in your house</h1>
                <img src="images/home.jpg" alt="home_gym">
                <p>
                    We believe fitness enthusiasts shouldn’t have to sacrifice to get a club-quality workout at home. It’s everything you love about the health club workout, plus sleek design that fits your home beautifully.
                </p>
            </div>
            <div class="intro">
                <h1>Equipment maintenance</h1>
                <img src="images/workshop.jpg" alt="home_gym">
                <p>
                Repair your gym equipment with convenience and ease
                </p>
            </div>
        </div>
        

        <div class="content">
            <!--header-->
            <h1 id="home">
                Types of gym equiment you can buy
            </h1>
            <div class="item">
                <img src="images/weight.jpg" alt="dumbell">
                <h2>Weights</h2>
                <p>
                    Engage in exercises to strengthen and grow leane muscle to lower the risk of chronic illness, enhance mobility and function, and safeguard brain health.
                </p>
            </div>
            <div class="item">
                <img src="images/cardio.jpg" alt="treadmill">
                <h2>cardio</h2>
                <p>
                    Use this type of equipment to strengthen your heart and avoid heart disease
                </p>
            </div>
            <div class="item">
                <img src="images/smith_machine.jpg" alt="dumbell">
                <h2>machines</h2>
                <p>
                    Use machines to train heavy with weight if you are uncomfortable with free weights.
                
                </p>
            </div>
            <div class="item">
                <img src="images/stationary-bike.jpg" alt="cycle">
                <h2>bikes</h2>
                <p>
                    Buy amazing bikes for your convenient cardio training
                </p>
            </div>

            
        
        </div>

        
            <div class="content2">
                <div class="wrapper">
                    <div class="old">
                        <h1>Buy second hand equipment</h1>
                        <img src="images/old.jpg" alt="home_gym">
                        <p>
                            We continue to grow our market share by never settling and continually challenging the status quo, while providing valuable products and outstanding service.
                            Look no farther than Global Fitness if you're seeking for high-quality secondhand workout equipment at a reasonable price.
                        </p>
                    </div>
                </div>
                
            </div>

            <!--videos-->

            <div class="videos">
                <h1>our featured products</h1>
                <div class="vid">
                    
                    <video controls autoplay muted>
                    
                        <source src="videos/vid2.mp4" type="video/mp4">
                    
                    </video>
                    <h2>
                        Treadmill
                    </h2>
                    <p>
                        If you have the money to spend on a serious machine, the AssaultRunner can put an end to your home treadmill search. This manual treadmill, which is powered by your movement rather than a motor, requires you to work harder, resulting in more calorie burn and a more intense workout. It lacks the bells and whistles of the other devices.
                    </p>
                </div>
    
                <div class="vid">
                    <video controls autoplay muted>
                   
                        <source src="videos/vid.mp4" type="video/ogg">
                   
                    </video>
                    <h2>
                        punching bag
                    </h2>
                    <p>
                        Our long-lasting pro punching bags will be great additions to any training facility or home gym. These punching bags are an essential tool for anybody looking to develop their boxing abilities. Our pro boxer punching bags can withstand years of abuse and strenuous training. We're so sure of it that we provide a lifetime warranty on every single one.
                    </p>
                </div>
            </div>
        <div id="captcha">
            <span>Captcha verification</span>
            
                <form action="backend/check.php" method="post">
                <input type="text" name="ans" required>
                <input type="submit" name="btn" value="submit">
                </form>
                <?php
                $n1=rand(10,99);
                $n2=rand(1,9);
                echo $n1."+".$n2."= ?";
                $result=$n1+$n2;
                $_SESSION['result']=$result;
                if(isset($_SESSION['human'])){
                    echo $_SESSION['human'];
                    session_unset();
                    
                    
                }

                
                    if(isset($_SESSION['bot'])){
                        echo $_SESSION['bot'];
                        session_unset();
                        
                    }
                

                
            ?>
            </div><br><br>
           <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=uttara%20dhaka+(Home%20gym)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embed-map.org/'>adding a google map to website</a> 
            <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=9378c740029045dc665574a672f4ea7cdcf1c9c1'></script>
        </div>
    
            

    <!--footer design-->
    <footer id="home">
        
            
        
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
           <?php
           if(isset($_SESSION['usercount']))
           {$_SESSION['usercount']++;}
       
       else{
       $_SESSION['usercount']=1;
       }
       echo "User View Count:".$_SESSION['usercount'];
           ?> &copy; copyright 2021 Home Gym Equipment 2021 All rights reserved
        </div>
    </footer>
    
</body>
</html>